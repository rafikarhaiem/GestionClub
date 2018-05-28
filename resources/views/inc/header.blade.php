@section('header')
<!-- Header -->
<header id="home">
  @yield('Background')

  <!-- Nav -->
  <nav id="nav" class="navbar nav-transparent">
    <div class="container">

      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a href="index.html">
            <img class="logo-alt" src="img/CSC_Logo.png" alt="logo">
            <img class="logo" src="img/CSC_Logo.png" alt="logo">
          </a>
        </div>
        <!-- /Logo -->

        <!-- Collapse nav button -->
        <div class="nav-collapse">
          <span></span>
        </div>
        <!-- /Collapse nav button -->
      </div>

  @yield('NavigationBar')

    </div>
  </nav>
  <!-- /Nav -->

  <!-- home wrapper -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">

        @yield('HomeContent')

      </div>
    </div>
  </div>
  <!-- /home wrapper -->

</header>
<!-- /Header -->
