@php
    $count_notification = DB::table('notifications')
        ->where('id_user', Auth::user()->id)
        ->count();
@endphp

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('titre') - {{ Auth::user()->projet_name }} </title>
    <!--favicon-->
    <link rel="icon" href="/admin/images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!--plugins-->
    <link href="/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="/admin/css/pace.min.css" rel="stylesheet" />
    <script src="/admin/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/admin/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="/admin/css/app.css" />
    <link rel="stylesheet" href="/admin/css/dark-sidebar.css" />
    <link rel="stylesheet" href="/admin/css/dark-theme.css" />

    @yield('header')

    <style>
        .header-notifications-list {
            max-height: 800px;
            overflow: hidden;
            overflow-y: auto;
        }
        @media print {
  .hidden-print {
    display: none !important;
  }
}
    </style>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="/admin/images/logo-icon.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">{{ Auth::user()->projet_name }}</h4>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto">
                    <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <div class="parent-icon icon-color-1">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                        <div class="menu-title">Emploi de temps</div>
                    </a>
                </li>
                <li class="menu-label">Gestion</li>
                <li>
                    <a href="{{ route('finnaces') }}">
                        <div class="parent-icon icon-color-1">
                            <i class='bx bx-dollar'></i>
                        </div>
                        <div class="menu-title">Finances</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('eleves') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bx-book-reader'></i>
                        </div>
                        <div class="menu-title">Elèves</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('professeurs') }}">
                        <div class="parent-icon icon-color-3">
                            <i class='bx bx-chalkboard'></i>
                        </div>
                        <div class="menu-title">Professeurs</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('paiements') }}">
                        <div class="parent-icon icon-color-4">
                            <i class='bx bx-money'></i>
                        </div>
                        <div class="menu-title">Paiements</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('depenses') }}">
                        <div class="parent-icon icon-color-5">
                            <i class='bx bx-wallet-alt'></i>
                        </div>
                        <div class="menu-title">Dépenses</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn">
                        <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="flex-grow-1 search-bar">
                    <div class="input-group">
                        <button class="btn btn-search-back search-arrow-back" type="button">
                            <i class="bx bx-arrow-back"></i>
                        </button>
                        <input type="text" class="form-control" placeholder="search" />
                        <button class="btn btn-search" type="button">
                            <i class="lni lni-search-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="right-topbar ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;">
                                <i class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                href="javascript:;" data-bs-toggle="dropdown"> <i
                                    class="bx bx-bell vertical-align-middle"></i>
                                <span class="msg-count">
                                    {{ $count_notification }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <h6 class="msg-header-title">{{ $count_notification }}</h6>
                                        <p class="msg-header-subtitle"> Notifications</p>
                                    </div>
                                </a>
                               @livewire('Notifications.Liste')
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0">
                                            {{ Auth::user()->nom }}
                                        </p>
                                        <p class="designattion mb-0">
                                            En ligne
                                        </p>
                                    </div>
                                    <img src="{{ Auth::user()->avatar() }}" class="user-img" alt="user avatar" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('profile') }}"><i
                                        class="bx bx-user"></i><span>Profil</span></a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="bx bx-power-off"></i><span>Déconnexion</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->

        @yield('body')




        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        <div class="footer">
            <p class="mb-0">
                {{ Auth::user()->projet_name }} @2024 | Developed By :
                <a href="https://kevin-gassam.com" target="_blank">KG CODE</a>
            </p>
        </div>
        <!-- end footer -->
    </div>

    <!-- JavaScript -->
    <!-- Bootstrap JS -->
    <script src="/admin/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="/admin/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!-- Vector map JavaScript -->
    <script src="/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="/admin/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/admin/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/admin/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="/admin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="/admin/js/index2.js"></script>
    <!-- App JS -->
    <script src="/admin/js/app.js"></script>

    @yield('scripts')
</body>

</html>
