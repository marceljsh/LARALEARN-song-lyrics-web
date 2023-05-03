<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #DF4B05">
    <div class="container">
        <a class="navbar-brand" href="/home">LARALEARN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is("about"))? "active" : "" }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is("posts*"))? "active" : "" }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is("categories"))? "active" : "" }}" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                                <li><a class="dropdown-item" href="/posts?author=coleworld"><i class="bi bi-peace"></i> Da Goat 🐐</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-person-fill-slash"></i> Sign out</a></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link nav-link {{ (Request::is("login"))? "active" : "" }}">
                                <i class="bi bi-person-circle"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link nav-link {{ (Request::is("register"))? "active" : "" }}">
                                <i class="bi bi-person-fill-add mx-1"></i>
                            </a>
                        </li>
                @endauth
            </ul>
      </div>
    </div>
</nav>