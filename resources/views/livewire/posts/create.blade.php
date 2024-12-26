<div>
    <div class="container">
        <div class="card card-body col-md-6 offset-md-4 mt-5">
            <div class="card-header">
                <ul>
                    @error('author')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                    @error('title')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                    @error('category_id')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                    @error('content')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                </ul>
                <h3 class="text-center">Create Posts</h3>
            </div>
            <div class="col-md-4 offset-md-4">
                <input type="text" class="mt-3 mb-2 form-control" placeholder="Author" wire:model.defer="author"
                    required>
            </div>

            <input type="text" class=" mb-3 form-control" placeholder="Title" wire:model.defer="title" required>

            <div class="form-floating mb-3">
                <select name="category" id="" class="form-select" wire:model.defer="category_id" required>
                    <option selected disabled>Category</option>
                    <option hidden="true">Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach

                </select>
                <label for="category">Category</label>
            </div>

            <textarea name="content" placeholder="Whats on your mind?" style="resize: none;" class="form-control"
                wire:model.defer="content" required></textarea>

            <button class="btn btn-dark mt-2" wire:click="addPost()">Post</button>
        </div>
    </div>
</div>
