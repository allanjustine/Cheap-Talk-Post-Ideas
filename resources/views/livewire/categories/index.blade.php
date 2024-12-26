<div>
    {{-- deleting category --}}
    <div wire:ignore.self class="modal fade" id="delete-modal-category" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title3" id="exampleModalLabel">Do you want to delete this category
                        permanently?</h5>
                    <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="submit" class="btn btn-danger form-control mb-2" wire:click="deleted()">
                        Yes
                    </button>
                    <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end deleting category --}}
    <div class="container">
        <div class="col-md-8 offset-md-3 mt-5">
            @if (session('message'))
                <div class="alert bg-dark text-center text-white"><small>{{ session('message') }}</small></div>
            @endif
            <div class="d-flex justify-content-end float-end mb-3">
                <a href="/create-categories" class="btn btn-dark">
                    Add Category
                </a>
            </div>
            <table class="table table-hover table-striped table-bordered">
                <thead class="bg-dark">
                    <tr>
                        <th class="text-white">Category</th>
                        <th class="text-white">Remarks</th>
                        <th class="text-white text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-secondary">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-white">{{ $category->category }}</td>
                            <td class="text-white">{{ $category->remarks }}</td>
                            <td class="text-white text-center"> <a href="" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete-modal-category"
                                    wire:click="delete({{ $category->id }})">Delete</a></td>
                        </tr>
                    @endforeach
                    @if ($categories->count() === 0)
                        <td colspan="3" class="text-center">No data found.</td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
