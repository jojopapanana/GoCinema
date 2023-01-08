<nav class="navbar navbar-expand-lg bg-light shadow p-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="images/Go Cinema.png" alt="LOGO" style="width: 10vw;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Now Showing</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Now Showing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('upcoming') }}">Upcoming</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Playing In
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Bali</a></li>
              <li><a class="dropdown-item" href="#">Jakarta</a></li>
              <li><a class="dropdown-item" href="#">Surabaya</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" style="border-style: solid; border-color: rgb(235, 171, 93)" id="search-button" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>