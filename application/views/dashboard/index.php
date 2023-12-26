
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?= base_url()?>/assets/backend/assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Hello Admin</span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-cash-multiple">Transaction</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Order</span>
                <i class="mdi mdi-shopping menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">User</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Email</span>
                <i class="mdi mdi-envelope menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Master Data</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-database menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('master.index', ['master' => 'user']) }}">User Master</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('master.index', ['master' => 'role']) }}">Role Master</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('master.index', ['master' => 'brand']) }}">Brand Master</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('master.index', ['master' => 'image']) }}">Gallery Master</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('master.index', ['master' => 'region']) }}">Region Master</a></li>
                  </ul>
                </div>
              </li>
            <li class="nav-item">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Logout
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dashboard </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('imagemasters.index')}}">Dashboard</a></li> 
                  <li class="breadcrumb-item active" aria-current="page">Sub Title</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">

                <div class="card">
                <div class="card-body">
                    
                    <div style="overflow-x: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><!-- Your action buttons or content here --></td>
                                </tr>
                        </tbody>
                    </table>
                    </div>

                    
                </div>
                </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
