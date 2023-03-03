<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assan-Admin</title>

    <!--Bootstrap icons-->
    <link href="/assets/fonts/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!--Google web fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300..900&family=IBM+Plex+Mono:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!--Simplebar css-->
    <link rel="stylesheet" href="/assets/vendor/css/simplebar.min.css">

    <!--Choices css-->
    <link rel="stylesheet" href="/assets/vendor/css/choices.min.css">

    <!-- Core Css Quill editor -->
    <link href="assets/vendor/css/quill.snow.css" rel="stylesheet">

    <!--Main style-->
    <link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body>
<!--////////////////// PreLoader Start//////////////////////-->
<div class="loader bg-gradient-primary text-white">
    <div
        class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
        <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spinner-grow  me-2"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>
            <div>
                <span>Loading...</span>
            </div>
        </div>
    </div>
</div>
<!--////////////////// /.PreLoader END//////////////////////-->


        <!--///////////Page sidebar begin///////////////-->
        <aside class="page-sidebar">
            <div class="h-100 flex-column d-flex justify-content-start">

                <!--Aside-logo-->
                <div class="aside-logo d-flex align-items-center flex-shrink-0 justify-content-start px-5 position-relative">
                    <a href="index.html" class="d-block">
                        <div class="d-flex align-items-center flex-no-wrap text-truncate">
                            <!--Sidebar-icon-->
                            <span class="sidebar-icon size-40 d-flex align-items-center justify-content-center fs-4 lh-1 text-white rounded-3 bg-gradient-primary fw-bolder"> A </span>
                            <span class="sidebar-text">
                            <!--Sidebar-text-->
                            <span class="sidebar-text text-truncate fs-3 fw-bold">
                              Larevel CMS
                            </span>
                          </span>
                        </div>
                    </a>
                </div>
                <!--Sidebar-Menu-->
                <div class="aside-menu px-3 my-auto" data-simplebar>
                    <nav class="flex-grow-1 h-100" id="page-navbar">
                        <!--:Sidebar nav-->
                        <ul class="nav flex-column collapse-group collapse d-flex">
                            <li class="nav-item sidebar-title text-truncate opacity-50 small">
                                <i class="bi bi-three-dots"></i>
                                <span>Главни уредувања</span>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link d-flex align-items-center text-truncate ">
                      <span class="sidebar-icon">
                          <i class="fs-2 text-primary d-block mb-2 bi bi-gear"></i>
                      </span>
                                    <!--Sidebar nav text-->
                                    <span class="sidebar-text">Подесувања</span>
                                 </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link d-flex align-items-center text-truncate ">
                      <span class="sidebar-icon">
                       <i class="fs-2 text-primary d-block mb-2 bi bi-person-fill"></i>
                      </span>
                                    <!--Sidebar nav text-->
                                    <span class="sidebar-text">Корисници</span>
                                </a>
                            </li>
                            <li class="nav-item">


                                    <!--Sidebar nav text-->

                            <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                                <i class="bi bi-three-dots"></i>
                                <span>Уредување на веб страна</span>
                            </li>
                            <li class="nav-item">
                                <a href="app-inbox.html"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sliders"></i>
                              </span>
                                    <span class="sidebar-text">Слајдер</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.index') }}"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-checklist"></i>
                              </span>
                                    <span class="sidebar-text">Категории</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('product.index')}}"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-plus-fill"></i>
                              </span>
                                    <span class="sidebar-text">Продукти</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="app-calendar.html"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-plus"></i>
                              </span>
                                    <span class="sidebar-text">Статички страни</span>

                                </a>
                            </li>
                            <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                                <i class="bi bi-three-dots"></i>
                                <span>Општи уредувања</span>
                            </li>

                            <li class="nav-item">
                                <a href="charts.html"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-checklist"></i>
                              </span>
                                    <span class="sidebar-text">Услуги</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps.html"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-people"></i>
                              </span>
                                    <span class="sidebar-text">Референти</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="datatables.html"
                                   class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-code"></i>
                              </span>
                                    <span class="sidebar-text">Скрипти</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!--aside-info-box-->
                </div>
            </div>
        </aside>
        <!--///////////Page Sidebar End///////////////-->

        <!--///Sidebar close button for 991px or below devices///-->
        <div
            class="sidebar-close d-lg-none">
            <a href="#"></a>
        </div>
        <!--///.Sidebar close end///-->


        <!--///////////Page content wrapper///////////////-->
        <main class="page-content d-flex flex-column flex-row-fluid">

            <!--//page-header//-->
            <header class="navbar mb-3 px-3 px-lg-6 px-3 px-lg-6 align-items-center page-header navbar-expand navbar-light">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <div class="d-flex align-items-center flex-no-wrap text-truncate">
                        <!--Sidebar-icon-->
                        <span class="sidebar-icon bg-gradient-primary rounded-3 size-40 fw-bolder text-white">
                  A
                </span>
                    </div>
                </a>
                <ul class="navbar-nav d-flex align-items-center h-100">
                    <li class="nav-item d-none d-lg-flex flex-column h-100 me-2 align-items-center justify-content-center" data-tippy-placement="bottom-start" data-tippy-content="Toggle Sidebar">
                        <a href="javascript:void(0)" class="sidebar-trigger nav-link size-40 d-flex align-items-center justify-content-center p-0">
                            <span class="material-symbols-rounded">
                              menu_open
                              </span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto d-flex align-items-center h-100">
                    <li class="nav-item d-flex align-items-center justify-content-center flex-column h-100 me-2">

                        <label class="dark-mode-checkbox size-40 d-flex align-items-center justify-content-center nav-link p-0" for="ChangeTheme">
                            <input type="checkbox" id="ChangeTheme"/> <span class="slide"></span>
                        </label>
                    </li>

                            <span
                                class="size-5 rounded-circle d-flex align-items-center justify-content-center position-absolute end-0 top-0 mt-2 me-1 bg-danger small"></span>
                        </a>


                        <div class="dropdown-menu mt-0 p-0 overflow-hidden dropdown-menu-end dropdown-menu-sm">
                            <!--notification header-->
                            <div class="py-3 px-4 bg-primary text-white d-flex align-items-center">
                                <h5 class="me-3 mb-0 flex-grow-1">Notifications</h5>
                                <div class="flex-shrink-0">
                                    <a href="#!" class="btn btn-white btn-sm">View All</a>
                                </div>
                            </div>
                            <div style="height:290px" data-simplebar>
                                <div class="list-group list-group-flush mb-0">

                                    <!--//Notification item start//-->
                                    <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                                        <div class="d-block me-3">
                                            <div class="avatar avatar-status status-online">
                                                <img src="/assets/media/avatars/01.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 flex-wrap pe-3">
                            <span class="mb-0 d-block"><strong>Adam Danely</strong> assigned
                              a task to
                              you <strong>#PI-392</strong></span>
                                            <small class="text-muted">Just now</small>
                                        </div>
                                    </a>
                                    <!--//Notification item start//-->
                                    <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                                        <div class="d-block me-3">
                                            <div class="avatar avatar-status status-offline">
                                                <img src="/assets/media/avatars/06.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 flex-wrap pe-3">
                            <span class="mb-0 d-block"><strong>Vivianna Kiser
                              </strong> just posted <span>"Lorem ipsum is placeholder text
                                used in the graphic, print,
                                and industries.
                                "</span></span>
                                            <small class="text-muted">2h Ago</small>
                                        </div>
                                    </a>
                                    <!--//Notification item start//-->
                                    <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                          <span class="d-block me-3">
                            <span
                                class="d-flex align-items-center justify-content-center lh-1 size-50 bg-tint-success text-success rounded-circle">
                              <span class="material-symbols-rounded">
                                construction
                                </span>
                            </span>
                          </span>

                                        <div class="flex-grow-1 flex-wrap pe-3">
                            <span class="mb-0 d-block"><strong>Updated</strong> Your account
                              password updated
                              succuessfully</span>
                                            <small class="text-muted">2h Ago</small>
                                        </div>
                                    </a>
                                    <!--//Notification item start//-->
                                    <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                          <span class="d-block me-3">
                            <span
                                class="d-flex align-items-center justify-content-center lh-1 size-50 bg-tint-danger text-danger rounded-circle">
                              <span class="material-symbols-rounded">
                                percent
                                </span>
                            </span>
                          </span>

                                        <div class="flex-grow-1 flex-wrap pe-3">
                            <span class="mb-0 d-block"><strong>Pro discount</strong> Upgrade
                              to pro plan with 30%
                              discount, Apply coupon <span class="badge bg-primary">PRO30</span></span>
                                            <small class="text-muted">2h Ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">
                        <a href="#"
                           class="nav-link dropdown-toggle height-40 px-2 d-flex align-items-center justify-content-center"
                           aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="d-flex align-items-center">

                                <!--Avatar with status-->
                                <div class="avatar-status status-online me-sm-2 avatar xs">
                                    <img src="/assets/media/avatars/01.jpg" class="rounded-circle img-fluid" alt="">
                                </div>
                                <span class="d-none d-md-inline-block">Лазе Здравев</span>
                            </div>
                        </a>

                        <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                            <!--User meta-->
                            <div class="position-relative overflow-hidden px-3 pt-4 pb-7 bg-gradient-primary text-white">
                                <!--Divider-->
                                <svg style="transform: rotate(-180deg)" preserveAspectRatio="none"
                                     class="position-absolute start-0 bottom-0 w-100 dropdown-wave" fill="currentColor" height="24" viewBox="0 0 1200 120"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                                        opacity=".25" />
                                    <path
                                        d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                                        opacity=".5" />
                                    <path
                                        d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
                                </svg>
                                <div class="position-relative">
                                    <h5 class="mb-1">Лазе Здравев</h5>
                                    <p class="text-white text-opacity-75 small mb-0 lh-1">Full stack developer</p>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="profile.html" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-primary text-white rounded-2">
                      account_circle
                      </span>
                                    <span class="flex-grow-1">Профил</span>
                                </a>
                                <a href="account-general.html" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-danger text-white rounded-2">
                      settings
                      </span>
                                    <span class="flex-grow-1">Подесувања</span>
                                </a>
                                <a href="page-tasks.html" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-info text-white rounded-2">
                      task
                      </span>
                                    <span class="flex-grow-1">Задачи</span>
                                </a>
                                <hr class="my-2">
                                <a href="page-auth-signin.html" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-warning text-white rounded-2">
                      logout
                      </span>
                                    <span class="flex-grow-1">Одјави се</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown ms-2 d-flex d-lg-none align-items-center justify-content-center flex-column h-100">
                        <a href="javascript:void(0)"
                           class="nav-link sidebar-trigger-lg-down size-40 p-0 d-flex align-items-center justify-content-center">
                            <span class="material-symbols-rounded align-middle">menu</span>
                        </a>
                    </li>
                </ul>
            </header>
            <!--Main Header End-->
            <!--Main Search Modal-->
            <!-- Modal -->
            <div class="modal" id="modal_search" tabindex="-1" aria-labelledby="modal_searchLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <!--Search inner-->
                            <div class="">

                                <!--Search form-->
                                <form>
                                    <div class="position-relative mb-4">
                                        <div class="text-muted">
                  <span class="material-symbols-rounded position-absolute start-0 top-50 translate-middle-y ms-2">
                    search
                    </span>
                                        </div>
                                        <input type="text" autofocus class="form-control form-control-lg border-2 border-primary border ps-6"
                                               placeholder="Search App...">
                                    </div>
                                </form>

                                <!--Recently searched-->
                                <div class="d-flex mb-2 align-items-center">
                                    <h6 class="d-block mb-0 me-3 flex-grow-1">
                <span class="material-symbols-rounded align-middle me-1 fs-5 opacity-50">
                  history
                  </span>
                                        Recent
                                    </h6>
                                    <a href="#!" class="small flex-shrink-0 d-block">Clear All</a>
                                </div>
                                <div class="list-group">
                                    <!--Recently searched item-->
                                    <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <span class="text-truncate">Campaign reports</span>
                                        </div>
                                    </a>
                                    <!--Recently searched item-->
                                    <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <span class="text-truncate">Funnel reports</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-0 border-top-0 modal-footer">
                 <span class="small">Press ESC or
                 <span class="badge bg-secondary" role="button" data-bs-dismiss="modal">Click me</span> to close
                 </span>
                        </div>
                    </div>
                </div>
            </div>

            <!--//Page Toolbar//-->
            <div class="toolbar px-3 px-lg-6 py-3">
                <div class="position-relative container-fluid px-0">
                    <div class="row align-items-center position-relative">
                        <div class="col-md-8 mb-4 mb-md-0">


                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-4 text-md-end">


                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--//Page Toolbar End//-->

            <!--//Page content//-->
            @yield('content')
            <!--//Page content End//-->

            <!--//Page-footer//-->
            <footer class="pb-3 pb-lg-5 px-3 px-lg-6">
                <div class="container-fluid px-0">
                <span class="d-block lh-sm small text-muted text-end">&copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>. Copyright PingDevs
                </span>
                </div>
            </footer>
            <!--/.Page Footer End-->
        </main>
        <!--///////////Page content wrapper End///////////////-->
    </div>
</div>

<!--////////////Theme Core scripts Start/////////////////-->
<script src="/assets/js/theme.bundle.js"></script>

<!--////////////Theme Core scripts End/////////////////-->

<!--Datatables-->
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatable").DataTable({
            "filter":false,
            "length":false
        });
    });


</body>

</html>
