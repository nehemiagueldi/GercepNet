<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/management/dashboard">
        <img src="{{asset('image/logo/G.png')}}" width="40" height="40" alt="">
      </a>
        <div class="collapse navbar-collapse row" id="navbarNav">
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="/facility" {{ ($title === "facility") ? 'active' : '' }}>Facility</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/management/request" {{ ($title === "request") ? 'active' : '' }}>Request</a>
            </li>
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item nav-link"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
    </div>
  </nav>
