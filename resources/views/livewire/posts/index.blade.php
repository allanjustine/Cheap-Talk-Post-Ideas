<div>
    <div class="container">
        <div class="col-md-6 offset-md-4 mt-5">
            @if (session('message'))
                <div class="alert bg-dark text-center text-white"><small>{{ session('message') }}</small></div>
            @endif
            <div class="col-md-6 offset-3">
                <a href="/create-posts" class="btn btn-dark form-control">Add Post</a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="category" class="form-control mt-3" wire:model.lazy="category_id">
                        <h4 class="text-center mt-5">"{{ $search }}" search not found.</h4>
                        <option value="All">All</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach

                    </select>

                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="card mt-3">
                    <div class="card-header">
                        <span class="float-end">{{ $post->category->category }}</span>
                        <h3>{{ $post->author }}</h3>
                    </div>
                    <div class="card-body" style="height: auto;">
                        <h5 class="text-center" style="font-family: serif">{{ $post->title }}</h5>
                        <hr>
                        <p>{!! nl2br($post->content) !!}</p>
                    </div>
                    <div class="card-footer">
                        <span>Posted at: {{ $post->created_at->format('F d, Y | g:iA') }}</span>
                    </div>
                </div>
            @endforeach
            @if (!empty($search) && $posts->count() === 0)
                <h6 class="text-center mt-5">No "{{ $search }}" found.</h6>
            @elseif($posts->count() === 0)
                <h6 class="text-center mt-5">No post for now.</h6>
            @endif
        </div>
    </div>
</div>
