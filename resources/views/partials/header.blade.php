<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 d-flex">
        <div>
            <a class="navbar-brand" href="#">
                <img src="https://user-images.githubusercontent.com/1915268/67271712-b77c4a00-f4d8-11e9-85d1-ea6875a06903.png" width="30" height="30" alt="">
            </a>
        </div>
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.comics.index')}}">Comics List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.comics.create')}}">Create new Comic</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            </div>

            {{-- <div>
                <form class="form-inline my-2 my-lg-0 d-flex ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div> --}}
        </div>
    </nav>
</header>