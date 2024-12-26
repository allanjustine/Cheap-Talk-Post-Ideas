<div>
    <div class="container">
        <div class="col-sm-6 offset-sm-4 mt-5">
            @if (session('message'))
                <div class="alert bg-success text-center text-white"><small>{{ session('message') }}</small></div>
            @endif
            @if (session('error'))
                <div class="alert bg-danger text-center text-white"><small>{{ session('error') }}</small></div>
            @endif
            <div class="card-img-top d-flex justify-content-center align-items-center mb-3">
                <div class="rounded-circle overflow-hidden shadow" style="width: 200px; height: 200px;">
                    <img src="images/cheaptalk.jpg" class="w-100 h-100" alt="Login Image">
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Login</h3>
                    <hr>
                    <form wire:submit.prevent="login">
                        @error('error')
                            <div class="text-white p-2 text-center bg-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="email" id="email" name="email" wire:model.defer="email"
                                class="form-control">
                            <label for="email">Email:</label>
                        </div>

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <input type="password" id="password" name="password" wire:model.defer="password"
                                class="form-control">
                            <label for="password">Password:</label>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="d-flex mt-3">
                            <div class="flex-grow-1">
                                <p href="/register">Don't have an account? <a href="/register">Register</a></p>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
