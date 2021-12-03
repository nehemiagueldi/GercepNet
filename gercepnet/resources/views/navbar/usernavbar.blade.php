  {{-- <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/user/dashboard">
        Gercepnet
      </a>
        <div class="" id="navbarScroll">
          <ul class="navbar-nav justify-content-center navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item active">
                <a class="nav-link mt-3" href="/userlisting" {{ ($title === "Facility Listing") ? 'active' : '' }}>Facility</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mt-3" href="/booking" {{ ($title === "Booking") ? 'active' : '' }}>Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-3" href="/request/{{auth()->user()->id}}" {{ ($title === "Request Listing") ? 'active' : '' }}>Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-3" href="/user/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
            </li>
            <img class="mt-3" src="{{ asset('storage/' . auth()->user()->image) }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
            <li class="nav-item">
              <form action="/logout" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="glow-on-hover nav-link"> Logout</button>
              </form>
            </li>
          </ul> 
    </div>
  </nav> --}}
  <header class="header">
    <nav class="navbar">
      <a class="nav-logo" href="/user/dashboard">
        Gercepnet
      </a>
        <ul class="nav-menu">
            <li class="nav-item">
              <a class="nav-link mt-3" href="/userlisting" {{ ($title === "Facility Listing") ? 'active' : '' }}>Facility</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-3" href="/booking" {{ ($title === "Booking") ? 'active' : '' }}>Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-3" href="/request/{{auth()->user()->id}}" {{ ($title === "Request Listing") ? 'active' : '' }}>Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-3" href="/user/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
            </li>
            <img class="mt-3" src="{{ asset('storage/' . auth()->user()->image) }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
            <li class="nav-item">
              <form action="/logout" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="glow-on-hover nav-link"> Logout</button>
              </form>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<script>
  const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
</script>