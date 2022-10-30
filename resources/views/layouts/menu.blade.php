<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ URL::to('/home')}}" class="brand-link">
    <img src="{{ asset('dist/img/logo/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Bolpack SV  </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image my-auto">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info my-auto">
              <a href="#" class="d-block">{{ auth()->user()->name }} <br>{{ auth()->user()->last_name }}</a>

            
                    <!-- Authentication Links -->
                     
          
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>    
        </div>
      </div>
      <!-- SidebarSearch Form -->
      @if( auth()->user()->role != 1 )      
      <div class="form-inline">
        <form id="form_orden_edit" name="form_orden_edit" action="{{URL::to('ordenes/edit')}}" >
          @csrf
          <div class="input-group" >
            <input class="form-control form-control-sidebar orden_search" name="orden_search" id="orden_search" type="text" placeholder="Buscar ordenes">
            <input type="hidden" class="id_orden_add" id="id_orden_add" name="id_orden_add">
            <div class="input-group-append">
              <button type="button" class="btn btn-sidebar" id="buscar_orden">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      @endif
      @if( auth()->user()->role == 0)
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">ADMINISTRACION</li>
            <li class="nav-item">
              <a href="{{ URL::to('ordenes/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-paste"></i>
                <p>
                  Ordenes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('clientes/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clientes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('productos/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Productos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('empleados/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Empleados
                </p>
              </a>
            </li>
            <li class="nav-header">CONTROL DE PRODUCCION</li>
            <li class="nav-item">
              <a href="{{ URL::to('ext/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-industry"></i>
                <p>
                  EXT
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('imp/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-fill"></i>
                <p>
                  IMP
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('corte/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-cut"></i>
                <p>
                  CORTE
                </p>
              </a>
            </li>
            <li class="nav-header">INVENTARIO</li>
            <li class="nav-item">
              <a href="{{ URL::to('fardos/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-boxes"></i>
                <p>FARDOS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('bobina/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tape"></i>
                <p>BOBINA</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      @elseif( auth()->user()->role == 1)
        <nav>
           <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">CONTROL DE PRODUCCION</li>
            <li class="nav-item">
              <a href="{{ URL::to('ext/supervisor')}}" class="nav-link">
                <i class="nav-icon fas fa-industry"></i>
                <p>
                  EXT
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('imp/supervisor')}}" class="nav-link">
                <i class="nav-icon fas fa-fill"></i>
                <p>
                  IMP
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('corte/supervisor')}}" class="nav-link">
                <i class="nav-icon fas fa-cut"></i>
                <p>
                  CORTE
                </p>
              </a>
            </li>
          </ul>
        </nav>
        </nav>
      @endif
  </div>
  <!-- /.sidebar -->
</aside>
