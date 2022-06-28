<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow" style="background-color: #0d413f">
    <div class="container">
      <a class="navbar-brand" href="/">#OfficialRMT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }} fw-bold" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Event RMT") ? 'active' : '' }}" href="/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Member RMT") ? 'active' : '' }}" href="/members">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Contact RMT") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->