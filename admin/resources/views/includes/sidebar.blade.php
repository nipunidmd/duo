<section>
  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
      <div>
        <img src="{{URL::asset('assets/img/logo.png')}}" width="60" alt="User" />
      </div>
      <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{auth()->user()->name}}
        </div>
        <div class="btn-group user-helper-dropdown">
          <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
          <ul class="dropdown-menu pull-right">

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            <li><a onclick="document.getElementById('logout-form').submit();"><i class="material-icons" type="submit">input</i>Sign Out</a> </li>
            <li><a href="#" data-toggle="modal" data-target="#userProfile"><i class="material-icons">account_box</i>Profile</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
      <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ \Request::is("dashboard") || Request::is("/") || Request::is("home")? 'active': ''}}">
          <a href="{{ url('/dashboard') }}">
            <i class="material-icons">dashboard</i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="header">PROJECT MANAGEMENT</li>
        <li class="{{ \Request::is("projects") || \Request::is("projects/*") ? 'active': ''}}">
          <a href="{{ url('/projects') }}">
            <i class="material-icons">layers</i>
            <span>Projects</span>
          </a>
        </li>

        <li class="header">APPLICATION SETTINGS</li>
        <li class="{{ \Request::is("user") ? 'active': ''}}">
          <a href="{{ url('/user') }}">
            <i class="material-icons">account_circle</i>
            <span>Users</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
      <div class="copyright">
      </div>
      <div class="version">
        <b>Version: </b> <i>1.0</i>
      </div>
    </div>
    <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->
</section>
