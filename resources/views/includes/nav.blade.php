<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form style="margin-left:60%"class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    &nbsp;<button class="btn btn-success">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>
