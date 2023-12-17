<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WPU Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
           <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? "active" : '') }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "About" ? "active" : '') }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  ($title === "All Posts" ? "active" : '' )}}" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{  ($title === "Categories" ? "active" : '' )}}" href="/categories">Categories</a>
            </li>
            <ul class="navbar-nav mr-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Dashboard</a>
                <div class="dropdown-divider"></div>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item {{  ($title === "Login" ? "active" : '' )}}"><i class="bi bi-box-arrow-in-light"></i>Logout</a></button>
                  </form>
                </div>
            </li>
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{  ($title === "Login" ? "active" : '' )}}"> <i class="bi bi-box-arrow-in-light"></i>Login</a>
            </li>
            @endauth
            </ul>
        </ul>
      </div>
    </nav> 
