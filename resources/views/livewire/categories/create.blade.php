<div>
    <div class="container">
        <div class="card card-body col-md-6 offset-md-4 mt-5">
            <div class="card-header">
                <ul>
                    @error('category')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                    @error('remarks')
                        <li>
                            <p class="text-danger">{{ $message }}</p>
                        </li>
                    @enderror
                </ul>
                <h3 class="text-center">Add Category</h3>
            </div>
            <div class="form-floating mt-3 mb-3">
                <select name="category" id="" class="form-select" wire:model.defer="category" required>
                    <option selected disabled>Category</option>
                    <option hidden="true">Category</option>
                    <option value="Sad">Sad</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Romance">Romance</option>
                    <option value="Religion">Religion</option>
                    <option value="Politics">Politics</option>
                    <option value="Education">Education</option>
                    <option value="Business">Business</option>
                </select>
                <label for="category">Category</label>
            </div>
            <textarea name="remarks" placeholder="Remarks" style="resize: none;" class="form-control"
                wire:model.defer="remarks" required></textarea>

            <button class="btn btn-dark mt-2" wire:click="addCategory()">Add Category</button>
        </div>
    </div>
</div>
