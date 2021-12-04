{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/admin/dashboard">
      <img src="{{asset('image/logo/G.png')}}" width="40" height="40" alt="">
    </a>
      <div class="" id="navbarScroll">
        <ul class="navbar-nav justify-content-center navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item active">
          <a class="nav-link active navbar-text" aria-current="page" href="/admin/userlist" {{ ($title === "user") ? 'active' : '' }}>User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facility" {{ ($title === "facility") ? 'active' : '' }}>Facility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/requestlist" {{ ($title === "request") ? 'active' : '' }}>Request</a>
          </li>
        </ul>
      </div>
        <form action="/logout" method="POST" class="">
          @csrf
          <button type="submit" class="btn mt-3"> Logout</button>
        </form>
  </div>
</nav> --}}

<header class="header">
  <nav class="navbar">
    <a class="nav-logo" href="/admin/dashboard">
      Gercepnet
    </a>
      <ul class="nav-menu">
          <li class="nav-item">
            <a class="nav-link mt-3" href="/admin/userlist" {{ ($title === "user") ? 'active' : '' }}>User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-3" href="facility" {{ ($title === "facility") ? 'active' : '' }}>Facility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-3" href="/admin/requestlist" {{ ($title === "request") ? 'active' : '' }}>Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-3" href="/admin/dashboard" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
          </li>
          {{-- <img src="{{ asset('storage/' . auth()->user()->image) }}" style="width:40px; height:40px; float:left; border-radius:50%;"> --}}
          <li class="nav-item">
            <form action="/logout" method="POST">
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
