<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Gercepnet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
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
    </div>
  </nav>