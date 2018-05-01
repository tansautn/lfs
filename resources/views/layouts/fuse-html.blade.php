<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Project Dashboard</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" rel="stylesheet">

    <!-- STYLESHEETS -->
    <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="../assets/icons/fuse-icon-font/style.css">
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.min.css">
    <!-- Nvd3 - D3 Charts -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/nvd3/build/nv.d3.min.css" />
    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="../assets/vendor/fuse-html/fuse-html.min.css" />
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
    <!-- / STYLESHEETS -->

    <!-- JAVASCRIPT -->
    <!-- jQuery -->
    <script type="text/javascript" src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Mobile Detect -->
    <script type="text/javascript" src="../assets/vendor/mobile-detect/mobile-detect.min.js"></script>
    <!-- Perfect Scrollbar -->
    <script type="text/javascript" src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Popper.js -->
    <script type="text/javascript" src="../assets/vendor/popper.js/index.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Nvd3 - D3 Charts -->
    <script type="text/javascript" src="../assets/vendor/d3/d3.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/nvd3/build/nv.d3.min.js"></script>
    <!-- Data tables -->
    <script type="text/javascript" src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
    <!-- PNotify -->
    <script type="text/javascript" src="../assets/vendor/pnotify/pnotify.custom.min.js"></script>
    <!-- Fuse Html -->
    <script type="text/javascript" src="../assets/vendor/fuse-html/fuse-html.min.js"></script>
    <!-- Main JS -->
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <!-- / JAVASCRIPT -->
</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
    <main>
        <div id="wrapper">
            <aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
                <div class="aside-content-wrapper">

                    <div class="aside-content bg-primary-700 text-auto">

                        <div class="aside-toolbar">

                            <div class="logo">
                                <span class="logo-icon">F</span>
                                <span class="logo-text">FUSE</span>
                            </div>

                            <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block" data-fuse-aside-toggle-fold>
                                <i class="icon icon-backburger"></i>
                            </button>

                        </div>

                        <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                            <li class="subheader">
                                <span>APPS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-dashboards">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-dashboards" href="#" aria-expanded="false" aria-controls="collapse-dashboards">

                                    <i class="icon s-4 icon-tile-four"></i>

                                    <span>Dashboards</span>
                                </a>
                                <ul id="collapse-dashboards" class='collapse show' role="tabpanel" aria-labelledby="heading-dashboards" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple active" href="index.html" data-url="index.html">

                                            <span>Project Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-dashboards-server.html" data-url="index.html">

                                            <span>Server</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-calendar.html" data-url="index.html">

                                    <i class="icon s-4 icon-calendar-today"></i>

                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="nav-item" role="tab" id="heading-ecommerce">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-ecommerce" href="#" aria-expanded="false" aria-controls="collapse-ecommerce">

                                    <i class="icon s-4 icon-cart"></i>

                                    <span>Ecommerce</span>
                                </a>
                                <ul id="collapse-ecommerce" class='collapse ' role="tabpanel" aria-labelledby="heading-ecommerce" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-products.html" data-url="index.html">

                                            <span>Products</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-product.html" data-url="index.html">

                                            <span>Product</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="apps-e-commerce-orders.html" data-url="index.html">

                                            <span>Orders</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-mail.html" data-url="index.html">

                                    <i class="icon s-4 icon-email"></i>

                                    <span>Mail</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-chat.html" data-url="index.html">

                                    <i class="icon s-4 icon-hangouts"></i>

                                    <span>Chat</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-file-manager.html" data-url="index.html">

                                    <i class="icon s-4 icon-folder"></i>

                                    <span>File Manager</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-contacts.html" data-url="index.html">

                                    <i class="icon s-4 icon-account-box"></i>

                                    <span>Contacts</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="apps-todo.html" data-url="index.html">

                                    <i class="icon s-4 icon-checkbox-marked"></i>

                                    <span>To-Do</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>PAGES</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-authentication">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-authentication" href="#" aria-expanded="false" aria-controls="collapse-authentication">

                                    <i class="icon s-4 icon-lock"></i>

                                    <span>Authentication</span>
                                </a>
                                <ul id="collapse-authentication" class='collapse ' role="tabpanel" aria-labelledby="heading-authentication" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-login.html" data-url="index.html">

                                            <span>Login</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-login-v2.html" data-url="index.html">

                                            <span>Login v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register.html" data-url="index.html">

                                            <span>Register</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-register-v2.html" data-url="index.html">

                                            <span>Register v2</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-forgot-password.html" data-url="index.html">

                                            <span>Forgot Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-reset-password.html" data-url="index.html">

                                            <span>Reset Password</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-auth-lock-screen.html" data-url="index.html">

                                            <span>Lock Screen</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-coming-soon.html" data-url="index.html">

                                    <i class="icon s-4 icon-alarm-check"></i>

                                    <span>Coming Soon</span>
                                </a>
                            </li>

                            <li class="nav-item" role="tab" id="heading-errors">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-errors" href="#" aria-expanded="false" aria-controls="collapse-errors">

                                    <i class="icon s-4 icon-alert"></i>

                                    <span>Errors</span>
                                </a>
                                <ul id="collapse-errors" class='collapse ' role="tabpanel" aria-labelledby="heading-errors" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-errors-404.html" data-url="index.html">

                                            <span>404</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="pages-errors-500.html" data-url="index.html">

                                            <span>500</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-maintenance.html" data-url="index.html">

                                    <i class="icon s-4 icon-oil"></i>

                                    <span>Maintenance</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-profile.html" data-url="index.html">

                                    <i class="icon s-4 icon-account"></i>

                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="pages-search.html" data-url="index.html">

                                    <i class="icon s-4 icon-magnify"></i>

                                    <span>Search</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>USER INTERFACE</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-elements">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-elements" href="#" aria-expanded="false" aria-controls="collapse-elements">

                                    <i class="icon s-4 icon-layers"></i>

                                    <span>Elements</span>
                                </a>
                                <ul id="collapse-elements" class='collapse ' role="tabpanel" aria-labelledby="heading-elements" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-alerts.html" data-url="index.html">

                                            <span>Alerts</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-badges.html" data-url="index.html">

                                            <span>Badges</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-breadcrumb.html" data-url="index.html">

                                            <span>Breadcrumb</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-buttons.html" data-url="index.html">

                                            <span>Buttons</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-button-group.html" data-url="index.html">

                                            <span>Button Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-cards.html" data-url="index.html">

                                            <span>Cards</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-dropdowns.html" data-url="index.html">

                                            <span>Dropdowns</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-forms.html" data-url="index.html">

                                            <span>Forms</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-input-group.html" data-url="index.html">

                                            <span>Input Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-jumbotron.html" data-url="index.html">

                                            <span>Jumbotron</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-list-group.html" data-url="index.html">

                                            <span>List Group</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navs.html" data-url="index.html">

                                            <span>Navs</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-navbar.html" data-url="index.html">

                                            <span>Navbar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-pagination.html" data-url="index.html">

                                            <span>Pagination</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-elements-progress.html" data-url="index.html">

                                            <span>Progress</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-tables">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-tables" href="#" aria-expanded="false" aria-controls="collapse-tables">

                                    <i class="icon s-4 icon-table-large"></i>

                                    <span>Tables</span>
                                </a>
                                <ul id="collapse-tables" class='collapse ' role="tabpanel" aria-labelledby="heading-tables" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-simple-table.html" data-url="index.html">

                                            <span>Simple Table</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-tables-data-table.html" data-url="index.html">

                                            <span>Data Table</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item" role="tab" id="heading-page-layouts">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-page-layouts" href="#" aria-expanded="false" aria-controls="collapse-page-layouts">

                                    <i class="icon s-4 icon-view-quilt"></i>

                                    <span>Page Layouts</span>
                                </a>
                                <ul id="collapse-page-layouts" class='collapse ' role="tabpanel" aria-labelledby="heading-page-layouts" data-children=".nav-item">

                                    <li class="nav-item" role="tab" id="heading-carded">

                                        <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-carded" href="#" aria-expanded="false" aria-controls="collapse-carded">

                                            <span>Carded</span>
                                        </a>
                                        <ul id="collapse-carded" class='collapse ' role="tabpanel" aria-labelledby="heading-carded" data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-full-width.html" data-url="index.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-full-width-2.html" data-url="index.html">

                                                    <span>Full Width 2</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-left-sidebar.html" data-url="index.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-left-sidebar-2.html" data-url="index.html">

                                                    <span>Left Sidebar 2</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-right-sidebar.html" data-url="index.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-carded-right-sidebar-2.html" data-url="index.html">

                                                    <span>Right Sidebar 2</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item" role="tab" id="heading-simple">

                                        <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-simple" href="#" aria-expanded="false" aria-controls="collapse-simple">

                                            <span>Simple</span>
                                        </a>
                                        <ul id="collapse-simple" class='collapse ' role="tabpanel" aria-labelledby="heading-simple" data-children=".nav-item">

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-full-width.html" data-url="index.html">

                                                    <span>Full Width</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-left-sidebar.html" data-url="index.html">

                                                    <span>Left Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-left-sidebar-2.html" data-url="index.html">

                                                    <span>Left Sidebar 2</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-left-sidebar-inner.html" data-url="index.html">

                                                    <span>Left Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-left-sidebar-floating.html" data-url="index.html">

                                                    <span>Left Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-right-sidebar.html" data-url="index.html">

                                                    <span>Right Sidebar</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-right-sidebar-2.html" data-url="index.html">

                                                    <span>Right Sidebar 2</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-right-sidebar-inner.html" data-url="index.html">

                                                    <span>Right Sidebar Inner</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-right-sidebar-floating.html" data-url="index.html">

                                                    <span>Right Sidebar Floating</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link ripple " href="user-interface-page-layouts-simple-tabbed.html" data-url="index.html">

                                                    <span>Tabbed</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="user-interface-page-layouts-blank.html" data-url="index.html">

                                            <span>Blank</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-typography.html" data-url="index.html">

                                    <i class="icon s-4 icon-format-text"></i>

                                    <span>Typography</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-icons.html" data-url="index.html">

                                    <i class="icon s-4 icon-information"></i>

                                    <span>Icons</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-colors.html" data-url="index.html">

                                    <i class="icon s-4 icon-palette"></i>

                                    <span>Colors</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="user-interface-helper-classes.html" data-url="index.html">

                                    <i class="icon s-4 icon-help-circle"></i>

                                    <span>Helper Classes</span>
                                </a>
                            </li>

                            <li class="subheader">
                                <span>COMPONENTS</span>
                            </li>

                            <li class="nav-item" role="tab" id="heading-charts">

                                <a class="nav-link ripple with-arrow collapsed" data-toggle="collapse" data-target="#collapse-charts" href="#" aria-expanded="false" aria-controls="collapse-charts">

                                    <i class="icon s-4 icon-poll"></i>

                                    <span>Charts</span>
                                </a>
                                <ul id="collapse-charts" class='collapse ' role="tabpanel" aria-labelledby="heading-charts" data-children=".nav-item">

                                    <li class="nav-item">
                                        <a class="nav-link ripple " href="components-charts-nvd3.html" data-url="index.html">

                                            <span>nvD3</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-collapse.html" data-url="index.html">

                                    <i class="icon s-4 icon-plus-box"></i>

                                    <span>Collapse</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-modal.html" data-url="index.html">

                                    <i class="icon s-4 icon-window-maximize"></i>

                                    <span>Modal</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-popovers.html" data-url="index.html">

                                    <i class="icon s-4 icon-tooltip-outline"></i>

                                    <span>Popovers</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-snackbar.html" data-url="index.html">

                                    <i class="icon s-4 icon-page-layout-footer"></i>

                                    <span>Snackbar</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ripple " href="components-tooltips.html" data-url="index.html">

                                    <i class="icon s-4 icon-tooltip"></i>

                                    <span>Tooltips</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>
            <div class="content-wrapper">
                <nav id="toolbar" class="bg-white">

                    <div class="row no-gutters align-items-center flex-nowrap">

                        <div class="col">

                            <div class="row no-gutters align-items-center flex-nowrap">

                                <button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="aside">
                                    <i class="icon icon-menu"></i>
                                </button>

                                <div class="toolbar-separator d-block d-lg-none"></div>

                                <div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

                                    <div class="shortcuts row no-gutters align-items-center d-none d-md-flex">

                                        <a href="apps-chat.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-hangouts"></i>
                                        </a>

                                        <a href="apps-contacts.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-account-box"></i>
                                        </a>

                                        <a href="apps-mail.html" class="shortcut-button btn btn-icon mx-1">
                                            <i class="icon icon-email"></i>
                                        </a>

                                    </div>

                                    <div class="add-shortcut-menu-button dropdown px-1 px-sm-3">

                                        <div class="dropdown-toggle btn btn-icon" role="button" id="dropdownShortcutMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-star text-amber-600"></i>
                                        </div>

                                        <div class="dropdown-menu" aria-labelledby="dropdownShortcutMenu">

                                            <a class="dropdown-item" href="#">
                                                <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-calendar-today"></i>
                                                        <span class="px-3">Calendar</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                            <a class="dropdown-item" href="#">
                                                <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-folder"></i>
                                                        <span class="px-3">File Manager</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                            <a class="dropdown-item" href="#">
                                                <div class="row no-gutters align-items-center justify-content-between flex-nowrap">
                                                    <div class="row no-gutters align-items-center flex-nowrap">
                                                        <i class="icon icon-checkbox-marked"></i>
                                                        <span class="px-3">To-Do</span>
                                                    </div>
                                                    <i class="icon icon-pin s-5 ml-2"></i>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                            </div>
                        </div>

                        <div class="col-auto">

                            <div class="row no-gutters align-items-center justify-content-end">

                                <div class="user-menu-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="avatar-wrapper">
                                            <img class="avatar" src="../assets/images/avatars/profile.jpg">
                                            <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                                        </div>
                                        <span class="username mx-3 d-none d-md-block">John Doe</span>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-account"></i>
                                                <span class="px-3">My Profile</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-email"></i>
                                                <span class="px-3">Inbox</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="status text-green icon-checkbox-marked-circle"></i>
                                                <span class="px-3">Online</span>
                                            </div>
                                        </a>

                                        <div class="dropdown-divider"></div>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <i class="icon-logout"></i>
                                                <span class="px-3">Logout</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                                <button type="button" class="search-button btn btn-icon">
                                    <i class="icon icon-magnify"></i>
                                </button>

                                <div class="toolbar-separator"></div>

                                <div class="language-button dropdown">

                                    <div class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4" role="button" id="dropdownLanguageMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="row no-gutters align-items-center">
                                            <img class="flag mr-2" src="../assets/images/flags/us.png">
                                            <span class="d-none d-md-block">EN</span>
                                        </div>
                                    </div>

                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/us.png">
                                                <span class="px-3">English</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/es.png">
                                                <span class="px-3">Spanish</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item" href="#">
                                            <div class="row no-gutters align-items-center flex-nowrap">
                                                <img class="flag" src="../assets/images/flags/tr.png">
                                                <span class="px-3">Turkish</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="toolbar-separator"></div>

                                <button type="button" class="quick-panel-button btn btn-icon" data-fuse-bar-toggle="quick-panel-sidebar">
                                    <i class="icon icon-format-list-bulleted"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="content custom-scrollbar">

                    <div id="project-dashboard" class="page-layout simple right-sidebar">

                        <div class="page-content-wrapper custom-scrollbar">

                            <!-- HEADER -->
                            <div class="page-header bg-secondary text-auto d-flex flex-column justify-content-between px-6 pt-4 pb-0">

                                <div class="row no-gutters align-items-start justify-content-between flex-nowrap">

                                    <div>
                                        <span class="h2">Welcome back, John!</span>
                                    </div>

                                    <button type="button" class="sidebar-toggle-button btn btn-icon d-block d-xl-none" data-fuse-bar-toggle="dashboard-project-sidebar" aria-label="Toggle sidebar">
                                        <i class="icon icon-menu"></i>
                                    </button>
                                </div>

                                <div class="row no-gutters align-items-center project-selection">

                                    <div class="selected-project h6 px-4 py-2">ACME Corp. Backend App</div>

                                    <div class="project-selector">
                                        <button type="button" class="btn btn-icon">
                                            <i class="icon icon-dots-horizontal"></i>
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- / HEADER -->

                            <!-- CONTENT -->
                            <div class="page-content">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link btn active" id="home-tab" data-toggle="tab" href="#home-tab-pane" role="tab" aria-controls="home-tab-pane" aria-expanded="true">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="budget-summary-tab" data-toggle="tab" href="#budget-summary-tab-pane" role="tab" aria-controls="budget-summary-tab-pane">Budget Summary</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="team-members-tab" data-toggle="tab" href="#team-members-tab-pane" role="tab" aria-controls="team-members-tab-pane">Team Members</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active p-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row no-gutters">

                                            <!-- WIDGET 1 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget1 card">

                                                    <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                            <select class="h6 custom-select">
                                                                <option selected="" value="today">Today</option>
                                                                <option value="yesterday">Yesterday</option>
                                                                <option value="tomorrow">Tomorrow</option>
                                                            </select>

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">

                                                        <div class="title text-secondary">25</div>

                                                        <div class="sub-title h6 text-muted">DUE TASKS</div>

                                                    </div>

                                                    <div class="widget-footer p-4 bg-light row no-gutters align-items-center">

                                                        <span class="text-muted">Completed:</span>

                                                        <span class="ml-2">7</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 1 -->

                                            <!-- WIDGET 2 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget2 card">

                                                    <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Overdue</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>
                                                    </div>

                                                    <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-danger">4</div>
                                                        <div class="sub-title h6 text-muted">TASKS</div>
                                                    </div>

                                                    <div class="widget-footer p-4 bg-light row no-gutters align-items-center">
                                                        <span class="text-muted">Yesterday's:</span>
                                                        <span class="ml-2">2</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 2 -->

                                            <!-- WIDGET 3 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget3 card">

                                                    <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Issues</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-warning">32</div>
                                                        <div class="sub-title h6 text-muted">OPEN</div>
                                                    </div>

                                                    <div class="widget-footer p-4 bg-light row no-gutters align-items-center">
                                                        <span class="text-muted">Closed today:</span>
                                                        <span class="ml-2">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 3 -->

                                            <!-- WIDGET 4 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget4 card">

                                                    <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Features</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-info">42</div>
                                                        <div class="sub-title h6 text-muted">PROPOSALS</div>
                                                    </div>

                                                    <div class="widget-footer p-4 bg-light row no-gutters align-items-center">
                                                        <span class="text-muted">Implemented:</span>
                                                        <span class="ml-2">8</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 4 -->

                                            <!-- WIDGET 5 -->
                                            <div class="col-12 p-3">

                                                <div class="widget widget5 card">

                                                    <div class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Github Issues</span>
                                                        </div>

                                                        <div>

                                                            <button type="button" class="widget5-option-change-btn btn btn-link" data-interval="TW">
                                                                This Week
                                                            </button>

                                                            <button type="button" class="widget5-option-change-btn btn btn-link" data-interval="LW">
                                                                Last Week
                                                            </button>

                                                            <button type="button" class="widget5-option-change-btn btn btn-link" data-interval="2W">
                                                                2 WEEKS AGO
                                                            </button>

                                                        </div>
                                                    </div>

                                                    <div class="widget-content p-4">

                                                        <div class="row">

                                                            <div class="col-12 col-lg-6">

                                                                <div id="widget5-main-chart">
                                                                    <svg></svg>
                                                                </div>

                                                            </div>

                                                            <div class="col-12 col-lg-6">

                                                                <div id="widget5-supporting-charts" class="row">

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-created-chart">
                                                                            <div class="h6 text-muted">CREATED</div>
                                                                            <div class="h2 count">48</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-closed-chart">
                                                                            <div class="h6 text-muted">CLOSED</div>
                                                                            <div class="h2 count">26</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-re-opened-chart">
                                                                            <div class="h6 text-muted">RE-OPENED</div>
                                                                            <div class="h2 count">2</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-wont-fix-chart">
                                                                            <div class="h6 text-muted">WON'T FIX</div>
                                                                            <div class="h2 count">4</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-needs-test-chart">
                                                                            <div class="h6 text-muted">NEED'S TEST</div>
                                                                            <div class="h2 count">8</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-6 p-4">

                                                                        <div id="widget5-fixed-chart">
                                                                            <div class="h6 text-muted">FIXED</div>
                                                                            <div class="h2 count">14</div>
                                                                            <div class="chart-wrapper">
                                                                                <svg></svg>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 5 -->

                                            <!-- WIDGET 6 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget6 card">

                                                    <div class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Task Distrubition</span>
                                                        </div>

                                                        <div class="">
                                                            <select id="widget6-option-select" class="h6 custom-select">
                                                                <option selected="" value="TW">This Week</option>
                                                                <option value="LW">Last Week</option>
                                                                <option value="2W">2 Weeks Ago</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="widget-content">

                                                        <div class="row no-gutters">

                                                            <div class="col-12">

                                                                <div id="widget6-main-chart" class="p-4">
                                                                    <svg></svg>
                                                                </div>

                                                            </div>

                                                            <div class="divider col-12"></div>

                                                            <div id="added-tasks" class="col-6 d-flex flex-column align-items-center justify-content-center py-4">

                                                                <div class="count h2">594</div>

                                                                <div class="count-title">Tasks Added</div>

                                                            </div>

                                                            <div id="completed-tasks" class="col-6 d-flex flex-column align-items-center justify-content-center py-4">

                                                                <div class="count h2">287</div>

                                                                <div class="count-title">Tasks Completed</div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 6 -->

                                            <!-- WIDGET 7 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget-7 card">

                                                    <div class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Schedule</span>
                                                        </div>

                                                        <div class="">
                                                            <select class="h6 custom-select">
                                                                <option selected="" value="today">Today</option>
                                                                <option value="yesterday">Yesterday</option>
                                                                <option value="tomorrow">Tomorrow</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content p-4">

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Group Meeting</div>

                                                                <div>
                                                                    <span class="text-muted">In 32 minutes</span>

                                                                    <span>, Room 1B</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Coffee Break</div>

                                                                <div>
                                                                    <span class="text-muted">10:30 AM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Public Beta Release</div>

                                                                <div>
                                                                    <span class="text-muted">11:00 AM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Lunch</div>

                                                                <div>
                                                                    <span class="text-muted">12:10 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Dinner with David</div>

                                                                <div>
                                                                    <span class="text-muted">17:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Jane&#39;s Birthday Party</div>

                                                                <div>
                                                                    <span class="text-muted">19:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="py-4 row no-gutters align-items-center justify-content-between">

                                                            <div class="col">

                                                                <div class="h6">Overseer&#39;s Retirement Party</div>

                                                                <div>
                                                                    <span class="text-muted">21:30 PM</span>

                                                                </div>

                                                            </div>

                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-icon">
                                                                    <i class="icon icon-dots-vertical"></i>
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 7 -->
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
                                    <div class="tab-pane fade p-3" id="budget-summary-tab-pane" role="tabpanel" aria-labelledby="budget-summary-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row no-gutters">

                                            <!-- WIDGET 8 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget8 card">

                                                    <div class="widget-header px-4 row no-gutters align-items-center justify-content-between">
                                                        <div class="col">
                                                            <span class="h6">Budget Distribution</span>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content row">

                                                        <div class="col-12">

                                                            <div id="widget8-main-chart" class="p-4">
                                                                <svg></svg>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 8 -->

                                            <!-- WIDGET 9 -->
                                            <div class="col-12 col-lg-6 p-3">

                                                <div class="widget widget9 card">

                                                    <div class="widget-header px-4 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h6">Spent</span>
                                                        </div>

                                                        <div class="">
                                                            <select id="widget9-option-select" class="h6 custom-select">
                                                                <option selected="" value="TW">This Week</option>
                                                                <option value="LW">Last Week</option>
                                                                <option value="2W">2 Weeks Ago</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="widget-content">

                                                        <div id="widget9-weeklySpent" class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">WEEKLY SPENT</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">3,630.15</span>
                                                                </div>

                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>
                                                        </div>

                                                        <div id="widget9-totalSpent" class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">TOTAL SPENT</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">34,758.34</span>
                                                                </div>
                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>
                                                        </div>

                                                        <div id="widget9-remaining" class="budget-item p-4 row no-gutters align-items-center">

                                                            <div class="col-12 col-sm-auto p-2">

                                                                <div class="item-title text-muted">REMAINING</div>

                                                                <div class="pt-2 h2">
                                                                    <span class="text-muted">$</span>
                                                                    <span class="item-value">89.241,66</span>
                                                                </div>

                                                            </div>

                                                            <div class="chart-wrapper col-12 col-sm">
                                                                <svg></svg>
                                                            </div>

                                                        </div>

                                                        <div class="divider w-100 my-2"></div>

                                                        <div id="widget9-total-budget" class="p-4">

                                                            <div class="item-title text-muted">TOTAL BUDGET</div>

                                                            <div class="pt-2 h2">
                                                                <span class="text-muted">$</span>
                                                                <span class="item-value">124.000,00</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 9 -->

                                            <!-- WIDGET 10 -->
                                            <div class="col-12 p-3">

                                                <div class="widget widget10 card">

                                                    <div class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h5">Budget Details</span>
                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div class="widget-content p-4 table-responsive">

                                                        <table class="table">

                                                            <thead>
                                                                <tr>

                                                                    <th>
                                                                        Budget Type
                                                                    </th>

                                                                    <th>
                                                                        Total Budget
                                                                    </th>

                                                                    <th>
                                                                        Spent ($)
                                                                    </th>

                                                                    <th>
                                                                        Spent (%)
                                                                    </th>

                                                                    <th>
                                                                        Remaining ($)
                                                                    </th>

                                                                    <th>
                                                                        Remaining (%)
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>
                                                                        <span class="badge badge-primary">
                                                                            Wireframing
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-bold">
                                                                            $14,880.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $14,000.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-success">
                                                                            %94.08
                                                                        </span>

                                                                        <i class="icon icon-trending-up text-success s-4"></i>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $880.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            %5.92
                                                                        </span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                                                        <span class="badge badge-success">
                                                                            Design
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-bold">
                                                                            $21,080.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $17,240.34
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-success">
                                                                            %81.78
                                                                        </span>

                                                                        <i class="icon icon-trending-up text-success s-4"></i>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $3,839.66
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            %18.22
                                                                        </span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                                                        <span class="badge badge-warning">
                                                                            Coding
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-bold">
                                                                            $34,720.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $3,518.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-danger">
                                                                            %10.13
                                                                        </span>

                                                                        <i class="icon icon-trending-down text-danger s-4"></i>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $31,202.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            %89.87
                                                                        </span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                                                        <span class="badge badge-info">
                                                                            Marketing
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-bold">
                                                                            $34,720.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $0.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-info">
                                                                            %0.00
                                                                        </span>

                                                                        <i class="icon icon-minus text-info s-4"></i>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $34,720.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            %100.00
                                                                        </span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>
                                                                        <span class="badge badge-danger">
                                                                            Extra
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-bold">
                                                                            $18,600.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $0.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="text-info">
                                                                            %0.00
                                                                        </span>

                                                                        <i class="icon icon-minus text-info s-4"></i>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            $34,720.00
                                                                        </span>

                                                                    </td>

                                                                    <td>
                                                                        <span class="">
                                                                            %100.00
                                                                        </span>

                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 10 -->
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
                                    <div class="tab-pane fade p-6" id="team-members-tab-pane" role="tabpanel" aria-labelledby="team-members-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row no-gutters">

                                            <!-- WIDGET 1 -->
                                            <div class="col-12">

                                                <div class="card">

                                                    <div class="widget-header px-4 py-6 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">
                                                            <span class="h5">Team Members</span>
                                                        </div>

                                                        <div>
                                                            <span class="badge badge-danger">20 members</span>
                                                        </div>

                                                    </div>

                                                    <div class="divider"></div>

                                                    <div class="widget-content table-responsive">

                                                        <table class="table">

                                                            <thead>
                                                                <tr>

                                                                    <th>

                                                                    </th>

                                                                    <th>
                                                                        Name
                                                                    </th>

                                                                    <th>
                                                                        Position
                                                                    </th>

                                                                    <th>
                                                                        Office
                                                                    </th>

                                                                    <th>
                                                                        E-Mail
                                                                    </th>

                                                                    <th>
                                                                        Phone
                                                                    </th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Jack Gilbert</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Design Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Johor Bahru</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>jgilbert48@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;16 298 032 7774</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/katherine.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Kathy Anderson</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Recruiting Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Solţānābād</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>kanderson49@mail.com.br</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;23 572 311 1136</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/andrew.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Mark Turner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Recruiting Manager</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Neftegorsk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>mturner4a@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;01 139 803 9263</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/jane.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Kathryn Martinez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Director of Sales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Palekastro</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>kmartinez4b@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;25 467 022 5393</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/alice.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Annie Gonzales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Actuary</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Candon</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>agonzales4c@mail.edu</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;99 891 619 7138</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/vincent.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Howard King</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Human Resources</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Bergen op Zoom</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>hking4d@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;46 984 348 1409</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/joyce.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Elizabeth Dixon</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Electrical Engineer</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Písečná</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>edixon4e@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;33 332 067 9063</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/danielle.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Dorothy Morris</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Office Assistant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Magsaysay</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>dmorris4f@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;05 490 958 6120</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/carl.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Mark Gonzales</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Quality Control</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Matsue-shi</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>mgonzales4g@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;03 168 394 9935</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/profile.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Catherine Rogers</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Programmer Analyst</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Kangar</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>crogers4h@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;86 235 407 5373</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/garry.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Ruth Grant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Community Outreach</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Beaune</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>rgrant4i@mail.pl</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;36 288 083 8460</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Phyllis Gutierrez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Administrative Assistant</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Shlissel’burg</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>pgutierrez4j@mail.net</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;52 749 861 9304</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/alice.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Lillian Morris</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Media Planner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Berlin</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>lmorris4k@mail.de</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;59 695 110 3856</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/vincent.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Jeremy Anderson</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Systems Engineer</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Lũng Hồ</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>janderson4l@mail.uk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;40 384 115 1448</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/carl.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Arthur Lawrence</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Nurse Practicioner</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Sarkanjut</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>alawrence4m@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;36 631 599 7867</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/andrew.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>David Simmons</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Social Worker</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Ushumun</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>dsimmons4n@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;01 189 681 4417</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/danielle.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Daniel Johnston</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Help Desk</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>São Carlos</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>djohnston4o@mail.gov</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;60 028 943 7919</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/joyce.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Ann King</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Internal Auditor</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Liren</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>aking4p@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;91 103 932 6545</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/james.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Phillip Franklin</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>VP Accounting</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Soba</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>pfranklin4q@mail.com</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;25 820 986 7626</span>

                                                                    </td>

                                                                </tr>

                                                                <tr>

                                                                    <td>

                                                                        <img class="avatar" src="../assets/images/avatars/garry.jpg">

                                                                    </td>

                                                                    <td>

                                                                        <span>Gary Gonzalez</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Speech Pathologist</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>Gangkou</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>ggonzalez4r@mail.cc</span>

                                                                    </td>

                                                                    <td>

                                                                        <span>&#43;10 862 046 7916</span>

                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- WIDGET 1 -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / CONTENT -->

                        </div>

                        <aside class="page-sidebar custom-scrollbar" data-fuse-bar="dashboard-project-sidebar" data-fuse-bar-media-step="lg" data-fuse-bar-position="right">
                            <!-- WIDGET GROUP -->
                            <div class="widget-group">

                                <!-- NOW WIDGET -->
                                <div class="widget widget-now">

                                    <div class="widget-header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                        <div class="h6">Monday, 16:37:16</div>

                                        <button type="button" class="btn btn-icon" aria-label="Options">
                                            <i class="icon icon-dots-vertical"></i>
                                        </button>
                                    </div>

                                    <div class="widget-content d-flex flex-column align-items-center justify-content-center p-4 pb-6">
                                        <div class="month text-muted">May</div>
                                        <div class="day text-muted">8</div>
                                        <div class="year text-muted">2017</div>
                                    </div>

                                </div>
                                <!-- / NOW WIDGET -->

                                <div class="divider"></div>

                                <!-- WEATHER WIDGET -->
                                <div class="widget widget-weather">

                                    <div class="widget- header row no-gutters align-items-center justify-content-between pl-4 py-4">

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-map-marker mr-2"></i>
                                            <span class="h6">New York</span>
                                        </div>

                                        <button type="button" class="btn btn-icon" aria-label="Options">
                                            <i class="icon icon-dots-vertical"></i>
                                        </button>

                                    </div>

                                    <div class="d-flex flex-column align-items-center justify-content-center p-4 pb-8">

                                        <div class="today-weather row no-gutters align-items-center justify-content-center">
                                            <i class="icon-weather-pouring s-10 mr-4"></i>
                                            <span class="h1">22</span>
                                            <span class="h1 text-muted">&deg;</span>
                                            <span class="h1 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-weather-windy icon mr-2 s-5"></i>
                                            <span>12</span>
                                            <span class="text-muted ml-1">KMH</span>
                                        </div>

                                        <div class="row align-items-center">
                                            <i class="icon-compass-outline icon mr-2 s-5"></i>
                                            <span>NW</span>
                                        </div>

                                        <div class="row no-gutters align-items-center">
                                            <i class="icon-umbrella icon mr-2 s-5"></i>
                                            <span>98%</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Sunday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-pouring"></i>
                                            <span class="h5">21</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Sunday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-pouring"></i>
                                            <span class="h5">19</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>

                                    <div class="row no-gutters align-items-center justify-content-between p-4">

                                        <span class="">Tuesday</span>

                                        <div class="row no-gutters align-items-center">
                                            <i class="mr-4 icon-weather-partlycloudy"></i>
                                            <span class="h5">24</span>
                                            <span class="h5 text-muted">&deg;</span>
                                            <span class="h5 text-muted">C</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- / WEATHER WIDGET -->

                                <div class="divider"></div>
                            </div>
                            <!-- / WIDGET GROUP -->
                        </aside>
                    </div>

                    <script type="text/javascript" src="../assets/js/apps/dashboard/project.js"></script>

                </div>
            </div>
            <div class="quick-panel-sidebar custom-scrollbar" fuse-cloak data-fuse-bar="quick-panel-sidebar" data-fuse-bar-position="right">
                <div class="list-group" class="date">

                    <div class="list-group-item subheader">TODAY</div>

                    <div class="list-group-item two-line">

                        <div class="text-muted">

                            <div class="h1"> Saturday</div>

                            <div class="h2 row no-gutters align-items-start">
                                <span> 1</span>
                                <span class="h6">th</span>
                                <span> Jan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Events</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Group Meeting</h3>
                            <p>In 32 Minutes, Room 1B</p>
                        </div>
                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Public Beta Release</h3>
                            <p>11:00 PM</p>
                        </div>
                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Dinner with David</h3>
                            <p>17:30 PM</p>
                        </div>
                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Q&amp;A Session</h3>
                            <p>20:30 PM</p>
                        </div>
                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Notes</div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Best songs to listen while working</h3>
                            <p>Last edit: May 8th, 2015</p>
                        </div>
                    </div>

                    <div class="list-group-item two-line">

                        <div class="list-item-content">
                            <h3>Useful subreddits</h3>
                            <p>Last edit: January 12th, 2015</p>
                        </div>
                    </div>

                </div>

                <div class="divider"></div>

                <div class="list-group">

                    <div class="list-group-item subheader">Quick Settings</div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Notifications</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Cloud Sync</h3>
                        </div>

                        <div class="secondary-container">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>

                    </div>

                    <div class="list-group-item">

                        <div class="list-item-content">
                            <h3>Retro Thrusters</h3>
                        </div>

                        <div class="secondary-container">

                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-indicator"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>