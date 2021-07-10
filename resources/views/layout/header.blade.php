<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">

    <ul class="navbar-nav">

      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('public/assets/images/avtar.png') }}" alt="profile">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
              <img src="{{ asset('public/assets/images/avtar.png') }}" alt="">
            </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0">{{ auth()->user()->full_name }}</p>
              <p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">

              <li class="nav-item">
                <a href="{{ route('password.change') }}" class="nav-link">
                  <i data-feather="edit"></i>
                  <span>Change Password</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <i data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>
