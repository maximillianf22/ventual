
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    Ventual 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />
</head>




<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg p-0 m-0 navbar-dark bg-gradient-warning" style="height: 2vh;">
</nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><h4 class="text-warning"><strong>VENTUAL</strong></h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand"> 
                        <a href="#">
                            <h4 class="text-warning"><strong>VENTUAL</strong></h4>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-warning btn-round mt-1" href="#">
                        Planes y Precios
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-warning btn-round mt-1" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Negocios</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Comercio Unico</a>
                        <a class="dropdown-item" href="#">Multi Comercio </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1" href="#">
                        <span class="nav-link-inner--text">Mas</span>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
  <!-- End Navbar -->
      <!--     *********     Header    -->
      <div class="contactus-1 bg-default" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
        <div class="container"><br>
          <div class="row">
            <div class="col-lg-5 col-md-5 d-flex justify-content-center flex-column">
              <h2 class="title text-white">Software <strong>Ventual </strong> Para Restaurantes y Comercios</h2>
              <h4 class="description text-white">Es una plataforma de comercio electronico para comercios o restaurantes en la cual puedes gestionar y administrar 
              tu negocio de forma facil, rapida y economica.</h4>
              <div class="info info-horizontal">
                <div class="description">
                 <button class="btn btn-warning text-uppercase">Solicitar demo</button>
                 <button class="btn btn-secondary text-uppercase">Empieza ahora</button>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 mx-auto">
              <div class="card card-contact card-raised">
                <form role="form" id="contact-form" method="post">
                  <div class="card-header text-center">
                    <h3 class="card-title text-warning"> Pruébalo gratis por 7 días</h3>
                        <small class="text-uppercase">La mejor solución del mercado </small>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nombre" aria-label="First Name..." type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 pl-2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="Last Name...">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Telefono">
                      </div>
                    </div>
                    <div class="form-group">
                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                      <option disabled selected>Selecciona el Tipo de Negocio</option>
                      <option value="2">Restaurante</option>
                      <option value="3">Multi Restaurante</option>
                    </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="customCheck" type="checkbox">
                          <label class="custom-control-label" for="customCheck">
                            <span>No soy un Robot</span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-warning pull-right">Empieza Ahora</button>
                      </div>
                      <div class="container">
                        <small class="text-uppercase"><small class="text-center text-success"><b>Al hacer clic, aceptas nuestros términos y condiciones</b></small></small>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><br><br> 
      <!--     *********     Logo Clientes    -->
      <div class="container" style="">
        <div class="row our-clients">
          <div class="mx-auto">
            <div class="container">
              <h3 class="text-center">Alguno de Nuestros Clientes</h3>
            </div>
            <img class="w-100" src="https://vendty.com/wp-content/uploads/2019/05/logos-new.fw_-1-2.png" alt="" />
          </div>
        </div>
        </div><br><br><br>
      <!--     *********    Tarjeta de Opciones  -->
      <section class="blogs-6">
        <div class="container">
          <div class="row">
            <div class=" container mx-auto mb-3">
              <h3 class="text-center">Tenemos una solución POS para cada tipo de negocio</h3>
              <h6 class="text-center">Selecciona tu tipo de negocio y descubre todas las funcionalidades</h6>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person1.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 mx-auto text-center">
                    <h2 class="card-title mx-auto text-center">Comercio unico</h2>
                    <p class="card-description text-white text-center">Cafetería, comida rápida, heladería, pizzería, restaurante, panadería</p>
                    <br>
                    <a class="btn btn-warning text-center align-items-center" href="javascript:;">
                     Más Información
                    </a>
                  </div><br>
                </a>
              </div>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person2.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 text-center">
                    <h2 class="card-title mx-auto text-center">Multi comercio</h2>
                    <p class="card-description text-white mx-auto text-center">Cafetería, comida rápida, heladería, pizzería, restaurante, panadería</p>
                    <br>
                    <a class="btn btn-warning mx-auto text-center align-items-center" href="javascript:;">
                      Más Información
                    </a>
                  </div> <br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> <br><br>
      <!--     *********     Funcionalidades -->
      <div class="section features-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 mr-auto text-left">
              <div class="pr-md-5">
                <h3 class="text-uppercase">Funcionalidades que harán crecer tu negocio</h3>
                <p>Ventual TuResraurante cuenta con muchas funcionalidades que te harán ahorrar tiempo y vender más.</p>
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Gestiona eficientemente los pedidos registrados.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Notificaciones en tiempo real.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Administra el menú de tu restaurante.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Gestiona tus domicilios.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Crea eventos unicos con un menú especifico.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-md-0">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-primary shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fas fa-file-alt text-primary"></i>
                    </div>
                    <h5 class="info-title text-white">Facturas personalizadas​</h5>
                    <p class="description">Genera facturas o recibos de compra, imprímelas o envíalas por correo.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-danger info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-cubes text-danger"></i>
                    </div>
                    <h5 class="info-title text-white">Inventario​</h5>
                    <p class="description">Conoce las entradas, salidas y traslados de tus productos.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-info shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fas fa-chart-line text-info"></i>
                    </div>
                    <h5 class="info-title text-white">Informes</h5>
                    <p class="description">Informes y alertas a tu correo que te darán la información precisa para que tu negocio crezca.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-success shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-smile-o text-success"></i>
                    </div>
                    <h5 class="info-title text-white">Fideliza tus clientes</h5>
                    <p class="description">Aumenta tus ventas, crea promociones, sistema de puntos o vende tarjetas de regalo.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-warning info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-home text-warning"></i>
                    </div>
                    <h5 class="info-title text-white">Multi Almacen</h5>
                    <p class="description">Administra los movimientos de todos tus almacenes desde la misma plataforma.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-default shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-files-o text-default"></i>
                    </div>
                    <h5 class="info-title text-white">Facturación Electrónica</h5>
                    <p class="description">Implementa tu Factura Electrónica fácilmente con Ventual </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--     *** App Funciones Punto de Venta   **   --> 
      <div class="section features-6">
        <div class="container">
          <div class="row mb-0 pb-0">
            <div class="col-md-8">
              <h3 class="display-3">Conoce las funcionalidades de Ventual </h3>
              <p class="lead mt-0">Impulsa tu negocio con el mejor software para punto de venta del mercado.</p>
            </div>
          </div>
          <div class="row align-items-center mt-0">
            <div class="col-lg-6 col-10 mx-md-auto">
              <img src="./assets/img/ill/ill2.png" width="120%">
            </div>
            <div class="col-lg-5 ml-4">
              <div class="info info-horizontal info-hover-success">
                <div class="description pl-4">
                  <small class="text-uppercase">CONVIERTE TU TABLET ANDROID EN UNA CAJA DE VENTA​</small>
                  <h4 class="title">App punto de venta</h4>
                  <div class="" style="width: 20rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-2">
                       <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>Desde tablet o celular
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Facturacion e Inventario
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Quick Service
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Vende con descuentos
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Apertura y cierre de Restaurante
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Vende con adiciones y modificaciones
                      </li>
                    </ul>
                  </div>
                  <ul class="title">
                    
                  </ul>
                  <a href="#" class="text-info">Más Información</a>
                  <div class="row align-items-center">
                        <div class="col-6 text-right">
                          <a href="#"><img src="https://ventual.co/assets/home/images/googlePlay.png" style="width:100%;" alt=""></a>
                        </div>
                        <div class="col-6">
                          <a href="#"><img src="https://ventual.co/assets/home/images/appStore.png" style="width:100%;" alt=""></a>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--     *********   Separador Adquierelo  -->
      <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div2.jpg')}}'); background-attachment: fixed;">
        <div class="row ">
          <div class=" col-md-7 card mt-4 ml-3 border">
            <div class="-title"><h1 class="text-warning text-center"><strong>Adquiérelo desde $292.000 mensuales</strong></h1></div>
            <div class="-body mt-0 pt-0">
              <p class="lead mt-0 pt-0 text-center"><strong> <big>Ventual</big> es un servicio cloud y se paga mensualmente de forma recurrente.</strong></p>
              </div>
          </div>
          <div class="col-md-4 ml-3 mt-4">
          <a href="#" class="btn btn-lg btn-warning btn-block p-5"><h3 class="text-white">MÁS INFORMACIÓN</h3></a>
          </div>
        </div>
      </div><br><br>
      <!--     *********     precios -->     
      <div class="pricing-1" id="pricing-1">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center mb-0">
              <h2 class="title text-center">Tenemos el Plan Ideal para tu Negocio</h2>
              <h4 class="description text-center">Pagando Anualmente (Ahorra hasta 2 meses) del servicio total</h4>
              <div class="section-space text-center"></div>
            </div>
          </div>
          <div class="row" style="margin-top: -20px;">
            <div class="nav-wrapper ml-auto mr-3 mb-3">
              <ul class="nav nav-pills nav-pills-success nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-year" data-toggle="tab" href="#tabs-year" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-collection mr-2"></i>Anual</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-5">
              <div class="card card-pricing bg-gradient-info border-0 text-center mb-4" style="background-image: url('./assets/img/">
                <div class="card-header bg-transparent">
                  <h6 class="text-uppercase ls-1 text-white py-3 mb-0">Ventual Lite</h6>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled my-4">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-home"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">1 Dominio</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-user-o"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Tienda virtual comercio unico</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Facturas ilimitadas</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Pagos en Línea</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Hosting por un Año</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Personalizacion de Tienda</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Direcciones con Google Maps</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Integracion con Whatsapp</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Certificado de Seguridad SSL</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Gestion de Ventas y Clientes</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Notificaciones por SMS</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <button type="button" class="btn btn-link text-white mb-3">Iniciar</button>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="#!" class=" text-white">Solicitar demo</a>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card card-pricing bg-gradient-warning border-0 text-center mb-4" style="background-image: url('./assets/img/">
                <div class="card-header bg-transparent">
                  <h6 class="text-uppercase ls-1 text-white py-3 mb-0">Ventual Multi-comercios</h6>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled my-4">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-home"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">1 Dominio</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-user-o"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Tienda virtual Multicomercio</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Facturas ilimitadas</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Pagos en Línea</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Hosting por un Año</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Personalizacion de Tienda</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Direcciones con Google Maps</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Integracion con Whatsapp</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Certificado de Seguridad SSL</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Gestion de Ventas y Clientes</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Soporte Premium</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">App Movil Android y iOs</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Notificaciones por SMS</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-info">
                            <i class="fa fa-file-alt"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm text-white">Plataforma de Fidelización</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <button type="button" class="btn btn-link text-white mb-3">Iniciar</button>
                </div>
                <div class="card-footer bg-transparent">
                  <a href="#!" class=" text-white">Solicitar demo</a>
                </div>
              </div>
            </div>
            <div class="col-1"></div>
          </div>
        </div>
      </div><br><br>
      <div class="">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center mb-5">
                <h1 class="display-2">¿Tienes alguna Pregunta?</h1>
                <h3 class="lead">Sera un placer para nosotros atender todas tus inquietudes</h3>
                <button class="btn btn-icon btn-warning mt-3" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-chat-round"></i></span>
                  <span class="btn-inner--text">Chatea con Nosotros</span>
                </button>
              </div>
            </div>
          </div>
      </div>
<footer class="footer bg-lighter" style="padding-top: 40px; margin-top:0px; border-top: 2px solid #435db5;">
  <div class="container mx-auto p-0 m-0 mt-5">
    <div class="row mx-auto">
      <div class="col-md-6 mx-auto border-right p-0 m-0">
        <div class="container">
           <div class="row">
            <div class="col-md-4 p-0 m-0 content-center mt-3 text-center d-none d-lg-block">
                <img src="{{ asset('assets/img/theme/appico.png') }}" width="80%" class="mt-5">
            </div>
            <div class="col-md-8">
                <h4 class="text-warning display-2"><strong>VENTUAL</strong></h4>
                <br>
                <p class="text-dark lead text-left"><small>Te ofrece una tienda multiservicios integrando domicilios y compras en línea de los productos que comercialice tu empresa.</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto text-lg-center btn-wrapper">
          <a href="faceoook.com" target="blank">
            <div class="icon icon-shape icon-shape-primary bg-facebook icon-lg shadow-sm rounded-circle text-white">
                <i class="fab fa-facebook fa-3x"></i>
            </div>
          </a>
          <a href="instagram.com" target="blank">
             <div class="icon icon-shape icon-shape-danger bg-danger icon-lg shadow-sm rounded-circle text-white ml-4">
                <i class="fab fa-instagram fa-3x "></i>
              </div>
          </a>
          <a href="twitter.com" target="blank">
             <div class="icon icon-shape icon-shape-info bg-info btn icon-lg shadow-sm rounded-circle text-white ml-4">
                <i class="fab fa-twitter fa-3x"></i>
              </div>
          </a>
          <div class="container border-top mt-4">
              <div class="row">
                  <div class="col text-dark lead"><small>Privacidad</small></div>
                  <div class="col text-dark lead"><small>Publicidad</small></div>
                  <div class="col text-dark lead"><small>Ayuda</small></div>
                  <div class="col text-dark lead"><small>Condiciones</small></div>
              </div>
          </div>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="col-lg-12">
        <div class="footer_nav_container text-center">
          <div class="cr text-center text-dark mt-4"><small>©2020 Todos los derechos reservados. <a href="#">Ventual</a></small></div>
        </div>
      </div>
    </div>
  </footer>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="{{ asset('assets/js/argon-design-system.min.js?v=1.2.0') }}" type="text/javascript"></script>
</body>

</html>