<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$title ?? 'Sistema Gerenciador'}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('template-assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ url('template-assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('template-assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('template-assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('template-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('template-assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('template-assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('template-assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('template-assets/images/favicon.png') }}" />
</head>

<body class="sidebar-dark">
    <div class="container-scroller">
        <!-- Navbar Superior -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="#"><img
                        src="{{ url('template-assets/images/logo.svg') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img
                        src="{{ url('template-assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ url('template-assets/images/faces/face28.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Configurações
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                  </button>
            </div>
        </nav>
        <!-- fim da navbar superior -->

        <!-- Menu Lateral -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item {{$plano_active ?? ''}}">
                        <a class="nav-link" href="{{route('home')}}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Planos</span>
                        </a>
                    </li>
                    <li class="nav-item {{$contact_active ?? ''}}">
                        <a class="nav-link" href="{{route('contact')}}">
                            <i class="mdi mdi-message-text-outline menu-icon"></i>
                            <span class="menu-title">Contato</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Sobre o Sistema</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- conteúdo -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                          <div class="row">
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                              <h3 class="font-weight-bold">{{$title ?? ''}}</h3>
                              <h6 class="font-weight-normal mb-0">{{$subtitle ?? ''}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>

                    @yield('conteudo')

                </div>
                <!-- rodapé -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            Licença MIT © 2022. Todos os Direitos Reservados.
                        </span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            Implantado por <a href="#">NND</a>
                        </span>
                    </div>
                </footer>
                <!-- fim do rodapé -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- fim do menu lateral -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ url('template-assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('template-assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('template-assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ url('template-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ url('js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('template-assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('template-assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('template-assets/js/template.js') }}"></script>
    <script src="{{ url('template-assets/js/settings.js') }}"></script>
    <script src="{{ url('template-assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('template-assets/js/dashboard.js') }}"></script>
    <script src="{{ url('template-assets/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
