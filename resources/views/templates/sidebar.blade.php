<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/user/profile')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (Auth::user()->id_tipe_user == 1)
            <li class="nav-item">
                <a href="{{url('/user')}}" class="nav-link">
                  <i class="nav-icon fa fa-user-alt"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/TipeUser')}}" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Tipe User
                  </p>
                </a>
              </li>
            @endif


          <li class="nav-item">
            <a href="{{url('/produk')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/varian')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Variant
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/proses')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Proses
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/dftproses')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Daftar Proses
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/tugas')}}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Tugas
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
