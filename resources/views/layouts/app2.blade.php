<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <meta name="description" content="Time RH">
    <meta name="author" content="IRT Conseils">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('stylesheets')
    <!-- vendor css -->
    <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/cassie.css') }}">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <div>
            <a href="#" class="sidebar-logo"><span>Time RH</span></a>
            <small class="sidebar-logo-headline">Votre compagnon RH</small>
        </div>
    </div><!-- sidebar-header -->
    <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
            <li class="nav-label"><label class="content-label">Paie et RH</label></li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="box"></i> Mon espace</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="layout"></i> Mes demandes</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="lock"></i> Collaborateurs</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="lock"></i> Saisie et
                    Validation</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="x-circle"></i> Intérimaires</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i data-feather="user"></i>Visite médicale</a>
            </li>

                        <li class="nav-item">
                                <a href="#" class="nav-link"><i data-feather="layers"></i> E-documents</a>
                            </li>
        </ul>

        <hr class="mg-t-30 mg-b-25">

        <ul class="nav nav-sidebar">
            <li class="nav-item"><a href="#" class="nav-link"><i data-feather="aperture"></i> FAQ</a></li>
            <li
                class="nav-item"><a href="#" class="nav-link"><i
                        data-feather="help-circle"></i>
                    Mentions légales
                </a></li>
            <li
                class="nav-item"><a href="#" class="nav-link"><i
                        data-feather="help-circle"></i>
                    Politique de confidentialité
                </a></li>
        </ul>


    </div><!-- sidebar-body -->
</div><!-- sidebar -->

<div class="content">
    <div class="header">
        <div class="header-left">
            <a href="" class="burger-menu"><i data-feather="menu"></i></a>

                        <div class="header-search">
                                <i data-feather="search"></i>
                                <input type="search" class="form-control" placeholder="Qu'est-ce que vous cherchez?">
                            </div><!-- header-search -->
        </div><!-- header-left -->

        <div class="header-right">
            <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>
            <div class="dropdown dropdown-notification">
                <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <h6>Notifications</h6>
                        <a href=""><i data-feather="more-vertical"></i></a>
                    </div><!-- dropdown-menu-header -->
                    <div class="dropdown-menu-body">
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                                <span>5 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                                <span>8 hours ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                                <span>a day ago</span>
                            </div>
                        </a>
                        <a href="" class="dropdown-item">
                            <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                            <div class="dropdown-item-body">
                                <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                                <span>2 days ago</span>
                            </div>
                        </a>
                    </div><!-- dropdown-menu-body -->
                    <div class="dropdown-menu-footer">
                        <a href="">Voir toute les notifications</a>
                    </div>
                </div><!-- dropdown-menu -->
            </div>
            <div class="dropdown dropdown-loggeduser">
                <a href="" class="dropdown-link" data-toggle="dropdown">
                    <div class="">
                        Bienvenue <strong>{{ Auth::user()->name }}</strong>
                    </div><!-- avatar -->
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-menu-header">
                        <div class="media align-items-center">
                            <div class="media-body mg-l-10">
                                <h6>{{ Auth::user()->name }}</h6>
                                <span>Ingénieur système</span>
                            </div>
                        </div><!-- media -->
                    </div>
                    <div class="dropdown-menu-body">
                        <a href="#" class="dropdown-item"><i data-feather="user"></i> Voir le profil</a>
                                                <a href="#" class="dropdown-item"><i data-feather="edit-2"></i> Editer le Profile</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}><i data-feather="log-out"></i> Se déconnecter</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div><!-- dropdown-menu -->
            </div>
        </div><!-- header-right -->
    </div><!-- header -->
    @yield('content')
    <div class="content-footer text-center">
        &copy; 2021. Tous droits réservés. Conception par <a href="https://www.irtconseils.fr/" target="_blank">IRT
            Soft</a> &nbsp;partenaire <a href="#" target="_blank">IRT Conseils</a>.
    </div><!-- content-footer -->
</div><!-- content -->

@yield('js')
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jqueryui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('lib/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('lib/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('lib/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('lib/jquery.flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>

<script src="{{ asset('js/flot.sampledata.js') }}"></script>
<script src="{{ asset('js/cassie.js') }}"></script>
<script src="{{ asset('js/calendar-events.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>

</body>
</html>
