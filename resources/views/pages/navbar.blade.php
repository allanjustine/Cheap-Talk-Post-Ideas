<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <img src="images/logo.png" alt="logo" style="width: 200px;" class="ms-5 rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link text-white text-center" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center" href="/categories">Categories</a>
            </li>
            @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link text-white text-center" href="/logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-white text-center" href="/login">Login</a>
                </li>
            @endif

        </ul>
        <div class="dropdown me-3 ms-5">
            <button class="btn bg-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>

    </div>
</nav>
