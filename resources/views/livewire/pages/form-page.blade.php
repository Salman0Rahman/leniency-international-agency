<div>
    <!--======== Featured 2 Start ========-->
    <section id="rs-services" class="rs-featured-2 pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-section-title black">
                        <div class="top-sub-heading">
                            <span class="text-uppercase text-bold" style="font-size: 30px; font-weight: bold">
                                Download Application Form
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-start">
                <!-- Download Option -->
                <div class="col-lg-2 col-md-4">
                    <div class="pdf-download-box">
                        <i class="fa-solid fa-file-pdf"></i>

                        <h4>Application Form</h4>

                        <p>View and download our application form.</p>

                        <a href="form.pdf" class="pdf-download-btn" download="Application-Form.pdf">
                            Download PDF
                        </a>
                    </div>
                </div>
                <!-- PDF Preview -->
                <!--        <div class="col-lg-10 col-md-10 col-12">-->
                <!--    <div class="pdf-preview">-->
                <!--        <iframe-->
                <!--            src="form.pdf"-->
                <!--            title="Application Form PDF"-->
                <!--            loading="lazy">-->
                <!--        </iframe>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="col-lg-10 col-md-8 col-12">
                    <div class="pdf-viewer-wrap">
                        <!-- Toolbar -->
                        <div class="pdf-toolbar">
                            <div class="pdf-toolbar-left">
                                <button type="button" id="zoomOut" title="Zoom out">−</button>
                                <span id="zoomLevel">100%</span>
                                <button type="button" id="zoomIn" title="Zoom in">+</button>
                            </div>

                            <div class="pdf-toolbar-center">
                                Page <span id="currentPage">1</span> /
                                <span id="totalPages">1</span>
                            </div>

                            <div class="pdf-toolbar-right">
                                <a href="form.pdf" download="Application-Form.pdf" title="Download">
                                    <i class="fa-solid fa-download"></i>
                                </a>
                                <a href="form.pdf" target="_blank" rel="noopener" title="Open in new tab">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Pages -->
                        <div class="pdf-preview" id="pdfScroll">
                            <div id="pdf-viewer">
                                <p style="padding: 15px; text-align: center">
                                    Loading PDF...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Featured 2 Ends ========-->
</div>

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
    window.addEventListener("load", function () {
        const url = "form.pdf";
        const container = document.getElementById("pdf-viewer");
        const scrollBox = document.getElementById("pdfScroll");
        const zoomLabel = document.getElementById("zoomLevel");
        const currentPageEl = document.getElementById("currentPage");
        const totalPagesEl = document.getElementById("totalPages");

        pdfjsLib.GlobalWorkerOptions.workerSrc =
          "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";

        let pdfDoc = null;
        let zoom = 1; // 1 = container width এর সমান
        let rendering = false;
        let pendingRender = false;

        async function renderAll() {
          if (!pdfDoc) return;
          if (rendering) {
            pendingRender = true;
            return;
          }
          rendering = true;

          container.innerHTML = "";
          const baseWidth = scrollBox.clientWidth - 30; // padding বাদ
          const ratio = window.devicePixelRatio || 1;

          for (let n = 1; n <= pdfDoc.numPages; n++) {
            const page = await pdfDoc.getPage(n);
            const base = page.getViewport({ scale: 1 });
            const cssScale = (baseWidth / base.width) * zoom;
            const viewport = page.getViewport({ scale: cssScale * ratio });

            const canvas = document.createElement("canvas");
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            canvas.style.width = viewport.width / ratio + "px";
            canvas.style.height = viewport.height / ratio + "px";
            canvas.dataset.page = n;
            container.appendChild(canvas);

            await page.render({
              canvasContext: canvas.getContext("2d"),
              viewport: viewport,
            }).promise;
          }

          rendering = false;
          if (pendingRender) {
            pendingRender = false;
            renderAll();
          }
        }

        // Zoom buttons
        document
          .getElementById("zoomIn")
          .addEventListener("click", function () {
            zoom = Math.min(zoom + 0.25, 3);
            zoomLabel.textContent = Math.round(zoom * 100) + "%";
            renderAll();
          });

        document
          .getElementById("zoomOut")
          .addEventListener("click", function () {
            zoom = Math.max(zoom - 0.25, 0.5);
            zoomLabel.textContent = Math.round(zoom * 100) + "%";
            renderAll();
          });

        // Scroll করলে current page number update
        scrollBox.addEventListener("scroll", function () {
          const canvases = container.querySelectorAll("canvas");
          const boxTop = scrollBox.getBoundingClientRect().top;
          let current = 1;
          canvases.forEach(function (c) {
            if (
              c.getBoundingClientRect().top - boxTop <
              scrollBox.clientHeight / 2
            ) {
              current = c.dataset.page;
            }
          });
          currentPageEl.textContent = current;
        });

        // Screen rotate / resize করলে আবার render
        let resizeTimer;
        window.addEventListener("resize", function () {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(renderAll, 300);
        });

        // PDF load
        pdfjsLib
          .getDocument(url)
          .promise.then(function (pdf) {
            pdfDoc = pdf;
            totalPagesEl.textContent = pdf.numPages;
            renderAll();
          })
          .catch(function (err) {
            console.error("PDF error:", err);
            container.innerHTML =
              '<p style="padding:15px;color:#fff;text-align:center;">Preview load hoy nai.<br>' +
              '<a href="form.pdf" target="_blank" style="color:#8ab4f8;">PDF open korun</a></p>';
          });
      });
</script>

@endpush