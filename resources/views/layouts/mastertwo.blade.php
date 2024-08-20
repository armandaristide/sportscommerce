<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="icon" href="../admin/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../admin/assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="../admin/assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/themify.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/remixicon.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/select2.min.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/ratio.css">

    <!-- remixicon css -->
    <!--Dropzon css -->
    <!-- Feather icon css-->
    <!-- Select2 css -->
    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/date-picker.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/bootstrap.css">
    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vendors/bootstrap-tagsinput.css">
    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="../admin/assets/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="../admin/assets/css/style.css">

</head>

<body>
<!-- tap on top start -->
<div class="tap-top">
    <span class="lnr lnr-chevron-up"></span>
</div>
<!-- tap on tap end -->

<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="{{ route('index') }}">
                        <img class="img-fluid main-logo" src="../admin/assets/images/logo.png" alt="logo">
                        <img class="img-fluid white-logo" src="../admin/assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="{{ route('index') }}">
                        <img src="../admin/assets/images/logo.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="container">
                <h3>
                    @if(Auth::user()->type == 0)
                       <a href="{{route("dashboard")}}">USER DASHBOARD</a>
                    @elseif(Auth::user()->type == 1)
                        <a href="{{route("adminDashboardShow")}}">SELLER ADMIN DASHBOARD</a>
                    @elseif(Auth::user()->type == 2)
                        <a href="{{route("superAdminDashboardShow")}}">SUPER ADMIN DASHBOARD</a>
                    @endif

                </h3>
            </div>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="../assets/user.png" alt="">
                            <div class="user-name-hide media-body">
                                <span>{{ Auth::user()->name }}</span>
                                <p class="mb-0 font-roboto">
                                    @if(Auth::user()->type == 0)
                                        User
                                    @elseif(Auth::user()->type == 1)
                                        Seller Admin
                                    @elseif(Auth::user()->type == 2)
                                        Super Admin
                                    @endif Account
                                    <i class="middle ri-arrow-down-s-line"></i>
                                </p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">

                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0)">
                                    <i data-feather="log-out"></i>
                                    <span>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="{{ route('index') }}" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="../admin/assets/images/logo.png" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="{{ route('index') }}">
                        <img class="img-fluid main-logo main-white" src="../admin/assets/images/logo/logo.png" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="../admin/assets/images/logo/logo-white.png"
                             alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- index body start -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- footer start-->
            <div class="container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2024 © LEVEL UP by TEAM II</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- footer End-->
        </div>
        <!-- index body end -->
    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                <p>Are you sure you want to log out?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                    @if(\Illuminate\Support\Facades\Auth::user()->type == 0)
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();"  >
                                <button type="button" class="btn btn--yes btn-primary" onclick="window.history.forward()" >
                                    {{ __('Yes') }}
                                </button>

                            </x-dropdown-link>
                        </form>

                    @elseif(\Illuminate\Support\Facades\Auth::user()->type == 1)
                        <form method="POST" action="{{ route('adminLogout') }}">
                            @csrf
                            <x-dropdown-link :href="route('adminLogout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();"  >
                                <button type="button" class="btn btn--yes btn-primary" onclick="window.history.forward()" >
                                    {{ __('Yes') }}
                                </button>

                            </x-dropdown-link>
                        </form>
                    @elseif(\Illuminate\Support\Facades\Auth::user()->type == 2)
                        <form method="POST" action="{{ route('superAdminLogout') }}">
                            @csrf
                            <x-dropdown-link :href="route('superAdminLogout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();"  >
                                <button type="button" class="btn btn--yes btn-primary" onclick="window.history.forward()" >
                                    {{ __('Yes') }}
                                </button>

                            </x-dropdown-link>
                        </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- latest js -->
<script src="../admin/assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="../admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js -->
<script src="../admin/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../admin/assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- scrollbar simplebar js -->
<script src="../admin/assets/js/scrollbar/simplebar.js"></script>
<script src="../admin/assets/js/scrollbar/custom.js"></script>

<!-- Sidebar jquery -->
<script src="../admin/assets/js/config.js"></script>

<!-- tooltip init js -->
<script src="../admin/assets/js/tooltip-init.js"></script>
<!-- bootstrap tag-input js -->
<!-- Plugins JS -->
<script src="../admin/assets/js/sidebar-menu.js"></script>
<script src="../assets/js/bootstrap-tagsinput.min.js"></script>
<script src="../admin/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="../admin/assets/js/notify/index.js"></script>
<!--Dropzon js -->
<script src="../assets/js/dropzone/dropzone.js"></script>
<script src="../assets/js/dropzone/dropzone-script.js"></script>
<!-- Apexchar js -->
<script src="../admin/assets/js/chart/apex-chart/apex-chart1.js"></script>
<script src="../admin/assets/js/chart/apex-chart/moment.min.js"></script>
<script src="../admin/assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="../admin/assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="../admin/assets/js/chart/apex-chart/chart-custom1.js"></script>

<!-- slick slider js -->
<script src="../admin/assets/js/slick.min.js"></script>
<script src="../admin/assets/js/custom-slick.js"></script>

<!-- ck editor js -->
<script src="../admin/assets/js/ckeditor.js"></script>
<script src="../admin/assets/js/ckeditor-custom.js"></script>
<!-- select2 js -->
<script src="../admin/assets/js/select2.min.js"></script>
<script src="../admin/assets/js/select2-custom.js"></script>

<!-- ratio js -->
<script src="../admin/assets/js/ratio.js"></script>

<!-- sidebar effect -->
<script src="../admin/assets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="../admin/assets/js/script.js"></script>
<script type="text/javascript">
    // If persisted then it is in the page cache, force a reload of the page.
    window.onpageshow =function(event){
        if(event.persisted){
            document.body.style.display ="none";
            location.reload();
        }
    };
</script>
</body>

</html>
