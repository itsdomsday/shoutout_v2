<div class="col-2 col-lg-2">
    <div class="left_nav_section position-sticky border-end d-flex flex-column align-text-center" style="height: 100vh; top: 0px;">
        <div class="mt-3 mb-5">
            <a class="navbar-brand" href="{{ url('/home') }}"><img class="img-fluid" src="https://i.ibb.co/K6kMCzZ/shoutout.png" alt="ShoutOut"></a>
        </div>
        <div class="sidebar">
        <div class="my-3">
            <a class="text-decoration-none" href="{{ url('/home') }}" style="color: #E0DDFA;">
            <i class="fa-solid fa-house fs-3"></i>
            <span class="ms-1 fs-3 d-none d-lg-inline">Home</span>
          </a>
        </div>
        <div class="my-3">
            <a class="text-decoration-none" href="{{ route('profile', Auth::user()->id) }}" style="color: #E0DDFA;">
            <i class="fa-regular fa-user fs-3"></i>
            <span class="ms-1 fs-3 d-none d-lg-inline">Profile</span>
          </a>
        </div>
        <div class="my-3">
        <a class="text-decoration-none" href="{{ url('/home') }}" style="color: #E0DDFA;">
            <i class="fa-solid fa-envelope fs-3"></i>
            <span class="ms-1 fs-3 d-none d-lg-inline">Messages</span>
        </div>
        <div class="my-3">
        <a class="text-decoration-none" href="{{ url('/home') }}" style="color: #E0DDFA;">
            <i class="fa-solid fa-list fs-3"></i>
            <span class="ms-1 fs-3 d-none d-lg-inline">Settings</span>
        </div>
        </div>
        <div class="profile_icon position-absolute" style="bottom: 30px;">
            <li class="nav-item dropdown" style="list-style-type:none; left: 0; bottom: 0; position absolute">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #E0DDFA">
                <img src="http://placekitten.com/40/40" alt="" class="rounded-circle me-2">
                  <div class="dropdown-menu dropdown-menu-top" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                        </form>
                  </div>
              </li>
        </div>
    </div>
</div>