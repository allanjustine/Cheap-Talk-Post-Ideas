<div>
    <div class="container">
        <div class="col-md-6 offset-md-4 mt-5">
            <div class="card-img-top d-flex justify-content-center align-items-center mb-3">
                <div class="rounded-circle overflow-hidden" style="width: 200px; height: 200px;">
                    <img src="images/cheaptalk.jpg" class="w-100 h-100" alt="Login Image">
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <hr>
                    <form wire:submit.prevent="register">
                        <div class="form-floating">
                            <input type="text" id="name" name="name" wire:model.defer="name"
                                class="form-control">
                            <label for="name">Name:</label>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
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
                        <div class="form-floating mt-3">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                wire:model.defer="password_confirmation" class="form-control">
                            <label for="password_confirmation">Confirm Password:</label>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-floating mt-3">
                            <select name="gender" id="" class="form-control" wire:model.defer="gender">
                                <option hidden="true">Gender</option>
                                <option selected disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="password_confirmation">Select Gender:</label>
                            @error('gender')
                                <p class="text-danger" id="messagee">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex mt-3">
                            <div class="flex-grow-1">
                                <p href="/register">Already have an account? <a href="/login">Login</a></p>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
