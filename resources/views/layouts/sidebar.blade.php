<div class="col-md-3">
  <nav style="position: sticky;">
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="{{ url('/home') }}" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: #E0DDFA;">Home</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('profile', Auth::user()->id) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: #E0DDFA">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color: #E0DDFA">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color: #E0DDFA">Settings</a>
  <div>
  </div class="fixed-bottom" style="left: 0; bottom: 0;">
  <li class="nav-item dropdown" style="list-style-type:none; left: 0; bottom: 0; position absolute">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #E0DDFA">
      My Account
      </a>
        <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
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
</nav>
</div>