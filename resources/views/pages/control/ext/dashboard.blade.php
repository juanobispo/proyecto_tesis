@include('layouts.header')

@include('layouts.preloader')  

  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
@include('layouts.menu')
  @if ($result)
  {{-- dd($result) --}}
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard {{ $result['title'] }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{ URL::to('/home')}}">Home</a>
              </li>
              <li class="breadcrumb-item active">{{ $result['title'] }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @include('layouts.tools')
        <!-- /.row -->
        <!-- zona word -->
        <div id="zona_word" class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <h5 class="card-title">
                      Formulario de clientes
                  </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-7">
                    <form id="form_cliente"  action=" {{URL::to('clientes/add')}} " class="mt-3 mx-auto col-12 col-lg-11">
                       @csrf
                        <div class="row">
                              <div class="col-12 col-sm-6">
                                  <div class="form-group has-feedback">
                                    <i class="fa fa-user form-control-feedback"></i>
                                    <label for="inputName">Nombres</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" />
                                  </div>
                              </div>
                              <div class="col-12 col-sm-6">  
                                  <div class="form-group has-feedback">
                                    <i class="fa fa-user form-control-feedback"></i>
                                    <label for="inputApe">Apellidos</label>
                                    <input type="text" id="apellido" name="apellido" class="form-control" />
                                  </div>
                              </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-6">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-envelope form-control-feedback"></i>
                                  <label for="inputEmail">Correo</label>
                                  <input type="email" id="correo" name="correo" class="form-control" />
                                </div>
                                
                          </div>
                          <div class="col-12 col-sm-6">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-phone form-control-feedback"></i>
                                  <label for="inputTel">Teléfono</label>
                                  <input type="text" id="telefono" name="telefono" class="form-control" />
                                </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-6">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-address-card form-control-feedback"></i>
                                  <label for="inputdui">DUI</label>
                                  <input type="text" id="dui" name="dui" class="form-control" />
                                </div>
                          </div>
                          <div class="col-12 col-sm-6">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-address-card form-control-feedback"></i>
                                  <label for="inputnit">NIT</label>
                                  <input type="text" id="nit" name="nit" class="form-control" />
                                </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-12">
                                <div class="form-group has-feedback">
                                  <i class="fas fa-map-marked-alt form-control-feedback"></i>
                                  <label for="inputdireccion">Direccion</label>
                                  <input type="text" id="direccion" name="direccion"  class="form-control" />
                                </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="button" id="add_client" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i>  Crear cliente</button>
                        </div>
                    </form>
                  </div>
                  <div class="col-12 col-lg-5 text-center d-flex align-items-center justify-content-center">
                    <div>
                      <h2>Admin<strong>LTE</strong></h2>
                          <p class="lead mb-5">
                            123 Testing Ave, Testtown, 9876 NA<br>
                            Phone: +1 234 56789012
                          </p>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  @else 
  <div>Error</div>
  @endif 

@include('layouts.footer')

