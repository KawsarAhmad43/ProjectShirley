<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="index.html">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#hauth" aria-expanded="false" aria-controls="hauth">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Header Content</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="hauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('headercontent') }}">View</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('headercontent.create') }}"> Add </a></li>
            
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">About Contents</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('aboutcontent') }}"> About </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('aboutcontent.create') }}"> Expertise </a></li>
            
          </ul>
        </div>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#sauth" aria-expanded="false" aria-controls="sauth">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Services</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> View </a></li>
            
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#eauth" aria-expanded="false" aria-controls="eauth">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Experience</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="eauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> View </a></li>
            
          </ul>
        </div>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Donation</span>
        </a>
      </li>





      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#pauth" aria-expanded="false" aria-controls="pauth">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Portfolio</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="pauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> View </a></li>
            
          </ul>
        </div>
      </li>




      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#rauth" aria-expanded="false" aria-controls="rauth">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Review</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="rauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> View </a></li>
            
          </ul>
        </div>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#rauth" aria-expanded="false" aria-controls="rauth">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Team</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="rauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> View </a></li>
            
          </ul>
        </div>
      </li>




      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Contact Responses</span>
        </a>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ssauth" aria-expanded="false" aria-controls="ssauth">
          <span class="menu-icon">
            <i class="mdi mdi-settings text-primary"></i>
          </span>
          <span class="menu-title">Site Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ssauth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Update Site </a></li>

            
          </ul>
        </div>
      </li>



      <li class="nav-item menu-items">
        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
            {{ __('API Tokens') }}
        </x-jet-dropdown-link>
    @endif
  
    <div class="border-t border-gray-100"></div>
  
    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
  
        <x-jet-dropdown-link href="{{ route('logout') }}"
                 @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-jet-dropdown-link>
        
      </li>






    </ul>
  </nav>