<div>
    <div class="login-box">
        <h2>Admin Login</h2>

        <form wire:submit="login">
            <input type="email" wire:model="email" placeholder="Email">
            @error('email') <small class="error">{{ $message }}</small> @enderror

            <input type="password" wire:model="password" placeholder="Password">
            @error('password') <small class="error">{{ $message }}</small> @enderror

            <label>
                <input type="checkbox" wire:model="remember"> Remember me
            </label>

            <button type="submit">Login</button>
        </form>
    </div>
</div>