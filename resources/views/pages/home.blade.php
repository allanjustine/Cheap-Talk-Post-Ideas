@extends('pages.base')

@section('content')
    <div class="container">
        <h6 class="mt-3">Welcome
            @if (auth()->check())
                {{ auth()->user()->name }}
            @else
                Visitors
            @endif
        </h6>
    </div>
@endsection
