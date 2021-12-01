<nav class="navbar navbar-expand-lg navbar-light bg-light" id="myNavbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('image/logo/G.png')}}" width="50" height="50" alt="">
    </a>
    <div class="collapse navbar-collapse row" id="navbarScroll">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/facility" {{ ($title === "facility") ? 'active' : '' }}>Facility</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/request" {{ ($title === "request") ? 'active' : '' }}>Request</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
</script>
