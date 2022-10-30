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
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
            <div id="zona_word" class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h5 class="card-title">Registro de producto</h5>
                        </div>
                          <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 justify-content-cente">
                                <form class="col-md-11 mx-auto" name='formproduct' id='formproduct' action=" {{URL::to('productos/add')}} ">
                                  @csrf
                                  <div class='table-responsive'>
                                  <div class='container' align='center'>
                                  <table class='table table-bordered' cellpadding='2' cellspacing='1' >
                                  <tbody>
                                  <tr>
                                  <td class='encabezado' COLSPAN=10>AREA DE EXTRUSION</td>
                                  </tr>
                                  <tr>
                                  <td COLSPAN=5></td>
                                  <td style='text-align: center;' COLSPAN=5>MEZCLA EN %</td>
                                  </tr>
                                  <tr>
                                  <td>ANCHO</td>
                                  <td class='cnt' COLSPAN=2>MATERIAL</td>
                                  <td class='cnt' COLSPAN=2>IMPRESA</td>
                                  <td>LDPE</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text' id='ldpe' name='ldpe' value=''/>
                                  </td>
                                  </td> 
                                  </tr>
                                  <tr>
                                  <td ROWSPAN=2><input class='col' type='text'  id='ancho' name='ancho' value=''/></td>
                                  <td>B/D</td>
                                  <td><input class='col' type='text' id='bd'  name='bd' value=''/></td>
                                  <td>SI</td>
                                  <td><input class='col' type='text' id='si'  name='si' value=''/></td>
                                  <td>HDPE</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text'  id='hdpe' name='hdpe' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>A/D</td>
                                  <td><input  class='col' type='text' id='ad' name='ad' value=''/></td>
                                  <td>NO</td>
                                  <td><input class='col' type='text' id='no' name='no' value=''/></td>
                                  <td>LLDPE</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text' id='lldpe'   name='lldpe' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>CALIBRE</td>
                                  <td ROWSPAN=2>LBS. A PRODUCIR</td>
                                  <td ROWSPAN=2 COLSPAN=3></td>
                                  <td>MOL. LIMP. B/D</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text' id='limpbd' name='limpbd' value=''  />
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                  <input  class='col' type='text' id='calibre' name='calibre' value=''/></td>
                                  <td>MOL.LIMP.A/D</td>
                                  <td COLSPAN=4>
                                  <input class='col'  type='text' id='limpad' name='limpad' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td COLSPAN=2>Nº DECARAS A TRATAR</td>
                                  <td COLSPAN=3>
                                  <input  class='col' type='text' id='decaras' name='decaras' value=''/>
                                  </td>
                                  <td>PELETISADO</td>
                                  <td COLSPAN=4>
                                  <input  class='col' type='text' id='peletisado' name='peletisado' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td COLSPAN=2>FUELLE LATERAL DE</td>
                                  <td COLSPAN=3>
                                  <input class='col'  type='text' id='fuelle' name='fuelle' value=''/>
                                  </td>
                                  <td>CHICLOSO</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text' id='chicloso'  name='chicloso' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td COLSPAN=2>COLOR DEL MATERIAL</td>
                                  <td COLSPAN=3>
                                  <input class='col' type='text' id='colorm' name='colorm' value=''/>
                                  </td>
                                  <td>PIGMENTO</td>
                                  <td COLSPAN=4>
                                  <input class='col' type='text' id='pigmento' name='pigmento' value='' />
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>TUBO</td>
                                  <td>
                                  <input class='col'  type='text' id='tubo' name='tubo' value=''/>
                                  </td>
                                  <td>LAMINA</td>
                                  <td COLSPAN=2>
                                  <input  class='col' type='text' id='lamina' name='lamina' value=''/>
                                  </td>
                                  <td>ADITIVO</td>
                                  <td COLSPAN=4>
                                  <input   class='col' type='text' id='aditivo' name='aditivo' value=''/>
                                  </td>
                                  </tr>
                                  </tbody>
                                  </table>
                                  </div>
                                  </div>
                                  <div class='table-responsive'>
                                  <div class ='container' align='center'>
                                  <table class='table table-bordered' cellpadding='2' cellspacing='1' >
                                  <tbody>
                                  <tr>
                                  <td class='encabezado' COLSPAN=10>
                                  DEPARTAMENTO DE IMPRESIÓN
                                  </td>
                                  </tr>
                                  <tr>
                                  <td ROWSPAN=3 COLSPAN=1>REPETICIONES POR ANCHO</td>
                                  <td ROWSPAN=3 COLSPAN=2></td> 
                                  <td ROWSPAN=4>NOMBRE DE PRODUCTO</td>
                                  <td ROWSPAN=4 COLSPAN=6>
                                  <input  class='col' type='text' id='producto' name='producto' value=''/>
                                  </td> 
                                  </tr>
                                  <tr>  
                                  </tr>
                                  <tr>    
                                  </tr>
                                  <tr>
                                  <td>DESARROLLO DE RODILLO</td>
                                  <td COLSPAN=2></td>
                                  </tr>
                                  <tr>
                                  <td>COLOR</td>
                                  <td>KG</td>
                                  <td>UNI.</td>
                                  <td>VISCOCIDAD</td>
                                  <td>CODIGO</td>
                                  <td>PROVEEDOR</td>
                                  <td>ANILOX</td>
                                  <td COLSPAN=3>SOLVENTE</td>
                                  </tr>
                                  <tr>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='color' name='color' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='kg' name='kg' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='uni' name='uni' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='viscocidad' name='viscocidad' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='codigo' name='codigo' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='proveedor' name='proveedor' value=''/>
                                  </td>
                                  <td ROWSPAN=5 >
                                  <input class='col' type='text' id='anilox' name='anilox' value=''/>
                                  </td>
                                  <td ROWSPAN=5 COLSPAN=2>
                                  <input class='col' type='text' id='solvente' name='solvente' value=''/>
                                  </td>
                                  </tr>
                                  <tr>  
                                  </tr>
                                  <tr>  
                                  </tr>
                                  <tr>  
                                  </tr>
                                  <tr>
                                  </tr>
                                  </tbody>
                                  </table>
                                  </div>
                                  </div>
                                  <div class='table-responsive'>
                                  <div class ='container' align='center'> 
                                  <table class='table table-bordered' cellpadding='2' cellspacing='1' >
                                  <tbody>
                                  <tr>
                                  <td class='encabezado' COLSPAN=10>AREA DE CORTE Y SELLO</td>
                                  </tr>
                                  <tr>
                                  <td COLSPAN=10 style='text-align: center;'>MEDIDAS DE LA BOLSA Y DETALLES</td>
                                  </tr>
                                  <tr>
                                  <td>TIPO</td>
                                  <td COLSPAN=11>
                                  <input class='inputJ' type='text' id='tipo' name='tipo' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>ANCHO</td>
                                  <td COLSPAN=2 >
                                  <input class='inputJ' type='text' id='anchocorte' name='anchocorte' value=''/>
                                  </td>
                                  <td>TROQUEL</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='troquel' name='troquel' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>LARGO</td>
                                  <td COLSPAN=2>
                                  <input class='inputJ' type='text' id='largo' name='largo' value=''/>
                                  </td>
                                  <td>OJO CHINO</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='ojo' name='ojo' value=''/>
                                  </td>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>FUELLE DE FON.</td>
                                  <td COLSPAN=2>
                                  <input class='inputJ' type='text' id='fuellefon' name='fuellefon' value=''/>
                                  </td>
                                  <td>FUELLE VOCA</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='fuellevoca' name='fuellevoca' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>SOLAPA</td>
                                  <td>INT.</td>
                                  <td>
                                  <input class='inputJ' type='text' id='intr' name='intr' value=''/>
                                  </td>
                                  <td>EXTER.</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='exter' name='exter' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>PESTAÑA</td>
                                  <td COLSPAN=11>
                                  <input class='inputJ' type='text' id='pestana' name='pestana' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>SELLO</td>
                                  <td>LAT.</td>
                                  <td>
                                  <input class='inputJ' type='text' id='lat' name='lat' value=''/>
                                  </td>
                                  <td>FONDO</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='fondo' name='fondo' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>AGUJEROS</td>
                                  <td COLSPAN=2><input class='inputJ' type='text' id='agujeros' name='agujeros' value=''/></td>

                                  <td>DIAME.</td>
                                  <td COLSPAN=8>
                                  <input class='inputJ' type='text' id='diame' name='diame' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>CINTA ADHE.</td>
                                  <td COLSPAN=11>
                                  <input class='inputJ' type='text' id='cinta' name='cinta' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                  FORMA DE EMPAQUE
                                  </td>
                                  <td COLSPAN=11>
                                  <input class='inputJ' type='text' id='formaempa' name='formaempa' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                  U/P FARDO
                                  </td>
                                  <td>
                                  <input class='inputJ' type='text' id='upfardo' name='upfardo' value=''/>
                                  </td>
                                  <td>BLS</td>
                                  <td ROWSPAN=2>PESO</td>
                                  <td  COLSPAN=8>
                                  <input class='inputJ' type='text' id='peso' name='peso' value=''/>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>FECHA DE ENTREGA</td>
                                  <td COLSPAN=2></td>
                                  <td  COLSPAN=8>LBS</td>
                                  </tr>   
                                  </tbody>
                                  </table>
                                  <div class="my-4">
                                    <button type="button" id="add_product" class="btn btn-primary">
                                      Crear producto
                                    </button>
                                  </div>
                                  </div>
                                  </div>
                                </form>
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
            <!-- Main row -->
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

