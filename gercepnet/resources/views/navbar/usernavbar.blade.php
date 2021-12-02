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
                <a class="nav-link" href="/booking" {{ ($title === "Booking") ? 'active' : '' }}>Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/request" {{ ($title === "Request Listing") ? 'active' : '' }}>Request</a>
            </li>
          </ul>
        </div>
          <form action="/logout" method="POST" class="">
            @csrf
            <button type="submit" class="btn mt-3"> Logout</button>
          </form>
    </div>
  </nav>