<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('template')}}"><img src="{{url('public')}}/img/logo.png" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('template')}}"><img src="{{url('public')}}/admin/assets/images/icon.png" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/')}}">
          <span class="menu-icon">
            <i class="mdi mdi-home"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/pc')}}">PC Components</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/laptop')}}">Laptop</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/smartphone')}}">Smartphone</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/accessories')}}">Accessories</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('list')}}">
          <span class="menu-icon">
            <i class="mdi mdi-apps"></i>
          </span>
          <span class="menu-title">List All Products</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('test-ajax')}}">
          <span class="menu-icon">
            <i class="mdi mdi-apps"></i>
          </span>
          <span class="menu-title">Alamat</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('admin/user')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">User</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('login')}}">
          <span class="menu-icon">
            <i class="mdi mdi-login"></i>
          </span>
          <span class="menu-title">Login</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('register')}}">
          <span class="menu-icon">
            <i class="mdi mdi-account-plus"></i>
          </span>
          <span class="menu-title">Register</span>
        </a>
      </li>
    </ul>
</nav>
