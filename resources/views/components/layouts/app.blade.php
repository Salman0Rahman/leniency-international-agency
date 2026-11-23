<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Leniency International</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
        integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Flow+Circular&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap & Icon Font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animation.css') }}" />

    <!-- jquery UI CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}" />

    <!-- awesome Icon Font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" />

    <!-- remixicon Icon Font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}" />

    <!-- Slick Slider CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}" />

    <!-- owl carousel CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}" />

    <!-- flickity CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flickity.css') }}" />

    <!-- odometer CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}" />

    <!-- skeletabs CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/skeletabs.css') }}" />

    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />

    <!-- layout CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rs-layouts.css') }}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta property="og:image"
        content="https://leniencyinternational.com/frontend/assets/images/leniency-international-official-cover.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Leniency International Official Cover" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="https://leniencyinternational.com/frontend/assets/images/leniency-international-official-cover.jpeg" />
    @verbatim
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "https://leniencyinternational.com/#Organization",
        "name": "Leniency International",
        "url": "https://leniencyinternational.com/",
        "image": "https://leniencyinternational.com/frontend/assets/images/leniency-international-official-cover.jpeg",
        "description": "Leniency International provides complete technology solutions for a smarter and safer tomorrow, including IT solutions, software development, cybersecurity, AI security, smart home automation, lifts, generators, substations and solar power systems.",
        "primaryImageOfPage": {
          "@type": "ImageObject",
          "url": "https://leniencyinternational.com/frontend/assets/images/leniency-international-official-cover.jpeg"
        }
      }
    </script>
    @endverbatim
    @stack('styles')
</head>

<body>
    <x-header />
    {{ $slot }}
    <x-footer />




    <!-- jquery Plugins JS -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>

    <!-- jquery UI JS -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }} "></script>

    <!-- bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- ajax-contact JS -->
    <script src="{{ asset('frontend/assets/js/ajax-contact.js') }}"></script>

    <!-- wow animation JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!-- appear JS -->
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>

    <!-- typer JS -->
    <script src="{{ asset('frontend/assets/js/typer.js') }}"></script>

    <!-- PageScroll2id JS -->
    <script src="{{ asset('frontend/assets/js/jquery.malihu.PageScroll2id.min.js') }}"></script>

    <!-- marquee JS -->
    <script src="{{ asset('frontend/assets/js/jquery.marquee.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!-- owl carousel JS -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>

    <!-- flickity JS -->
    <script src="{{ asset('frontend/assets/js/flickity.pkgd.min.js') }}"></script>

    <!-- odometer JS -->
    <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>

    <!-- skeletabs JS -->
    <script src="{{ asset('frontend/assets/js/skeletabs.js') }}"></script>

    <!-- magnific popup JS -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- GSAP Interactions Start -->
    <script src="{{ asset('frontend/assets/js/interactions/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/interactions/rs-scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/interactions/rs-splitText.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/interactions/rs-anim-int.js') }}"></script>
    <!-- GSAP Interactions End -->

    <!-- Activation JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>