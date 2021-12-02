  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/user/dashboard">
        <img src="{{asset('image/logo/G.png')}}" width="40" height="40" alt="">
      </a>
        <div class="" id="navbarScroll">
          <ul class="navbar-nav justify-content-center navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item active">
                <a class="nav-link" href="/userlisting" {{ ($title === "Facility Listing") ? 'active' : '' }}>Facility</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/booking/add" {{ ($title === "Booking") ? 'active' : '' }}>Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/request" {{ ($title === "Request Listing") ? 'active' : '' }}>Request</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back !, {{ auth()->user()->name }}
              </a>
              <li><a class="dropdown-item" href="/profile"><i class="bi bi-person-circle"></i> My Profile</a></li>
              <li><hr class="dropdown-divider"></li>
            </li>
            <img src="{{ asset('storage/' . auth()->user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
          </ul> 
          <form action="/logout" method="POST" class="">
            @csrf
            <button type="submit" class="btn mt-3"> Logout</button>
          </form>
    </div>
  </nav>