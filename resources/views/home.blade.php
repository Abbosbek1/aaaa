@extends('layouts.home')
@section('content')
    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

                <!-- ! Hide app brand if navbar-full -->
                <div class="app-brand demo">
                    <a href="{{ route('home') }}"
                        class="app-brand-link">
                       
                        <span class="app-brand-text demo menu-text fw-semibold ms-2">Materialize</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                                fill-opacity="0.9" />
                            <path
                                d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                                fill-opacity="0.4" />
                        </svg>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item ">
                        <a href="app/ecommerce/dashboard.html" class="menu-link">
                            <i class="menu-icon tf-icons ri-home-smile-line"></i>
                            <div>Dashboard</div>

                        </a>
                    </li>

                    <li class="menu-item ">
                        <a href="app/ecommerce/dashboard.html" class="menu-link">
                            <i class="menu-icon ri-briefcase-line ri-24px"></i>
                            <div>My documents</div>

                        </a>
                    </li>

                    <li class="menu-item ">
                        <a href="app/ecommerce/dashboard.html" class="menu-link">
                            <i class="menu-icon ri-shopping-cart-line ri-24px"></i>
                            <div>Purchased documents</div>

                        </a>
                    </li>

                    <li class="menu-item ">
                        <a href="app/ecommerce/dashboard.html" class="menu-link">
                            <i class="menu-icon tf-icons ri-money-dollar-circle-line ri-24px"></i>
                            <div>Selling history</div>

                        </a>
                    </li>








                </ul>

            </aside>


            <!-- Layout page -->
            <div class="layout-page">




                <!-- BEGIN: Navbar-->
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                    <!-- ! Not required for layout-without-menu -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0  d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="ri-menu-fill ri-22px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                     

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class='ri-translate-2 ri-22px'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item active" href="lang/en.html" data-language="en"
                                            data-text-direction="ltr">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="lang/fr.html" data-language="fr"
                                            data-text-direction="ltr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="lang/ar.html" data-language="ar"
                                            data-text-direction="rtl">
                                            <span class="align-middle">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="lang/de.html" data-language="de"
                                            data-text-direction="ltr">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class='ri-22px'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class='ri-sun-line ri-22px me-3'></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i
                                                    class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="ri-computer-line ri-22px me-3"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher -->


                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <i class="ri-notification-2-line ri-22px"></i>
                                    <span
                                        class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom py-50">
                                        <div class="dropdown-header d-flex align-items-center py-2">
                                            <h6 class="mb-0 me-auto">Notification</h6>
                                            <div class="d-flex align-items-center">
                                                <span class="badge rounded-pill bg-label-primary fs-xsmall me-2">8
                                                    New</span>
                                                <a href="javascript:void(0)"
                                                    class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Mark all as read"><i
                                                        class="ri-mail-open-line text-heading ri-20px"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../demo/assets/img/avatars/1.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                        <small class="mb-1 d-block text-body">Won the monthly best seller
                                                            gold badge</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Charles Franklin</h6>
                                                        <small class="mb-1 d-block text-body">Accepted your
                                                            connection</small>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../demo/assets/img/avatars/2.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">New Message ✉️</h6>
                                                        <small class="mb-1 d-block text-body">You have new message from
                                                            Natalie</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="ri-shopping-cart-2-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                                                        <small class="mb-1 d-block text-body">ACME Inc. made new order
                                                            $1,154</small>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../demo/assets/img/avatars/9.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                                                        <small class="mb-1 d-block text-body">Your ABC project application
                                                            has been approved.</small>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="ri-pie-chart-2-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Monthly report is generated</h6>
                                                        <small class="mb-1 d-block text-body">July monthly financial report
                                                            is generated </small>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../demo/assets/img/avatars/5.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">Send connection request</h6>
                                                        <small class="mb-1 d-block text-body">Peter sent you connection
                                                            request</small>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="../demo/assets/img/avatars/6.png" alt
                                                                class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">New message from Jane</h6>
                                                        <small class="mb-1 d-block text-body">Your have new message from
                                                            Jane</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                                    class="ri-error-warning-line"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1 small">CPU is running high</h6>
                                                        <small class="mb-1 d-block text-body">CPU Utilization Percent is
                                                            currently at 88.63%,</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ri-close-line ri-20px"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="border-top">
                                        <div class="d-grid p-4">
                                            <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                                <small class="align-middle">View all notifications</small>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../demo/assets/img/avatars/1.png" alt class="rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages/profile-user.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar avatar-online">
                                                        <img src="../demo/assets/img/avatars/1.png" alt
                                                            class="rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block small">
                                                        John Doe
                                                    </span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/profile-user.html">
                                            <i class="ri-user-3-line ri-22px me-3"></i><span class="align-middle">My
                                                Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="pages/account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger">4</span>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <div class="d-grid px-4 pt-2 pb-1">
                                            <a class="btn btn-sm btn-danger d-flex" href="auth/login-basic.html">
                                                <small class="align-middle">Login</small>
                                                <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                 
                </nav>
                <!-- / Navbar -->
                <!-- END: Navbar-->


                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="row g-6">
                            <!-- Gamification Card -->
                            <div class="col-md-12 col-xxl-8">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-md-6 order-2 order-md-1">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Congratulations <span
                                                        class="fw-bold">John!</span> 🎉</h4>
                                                <p class="mb-0">You have done 68% 😎 more sales today.</p>
                                                <p>Check your new badge in your profile.</p>
                                                <a href="javascript:;" class="btn btn-primary">View Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                                            <div class="card-body pb-0 px-0 pt-2">
                                                <img src="../demo/assets/img/illustrations/illustration-john-light.png"
                                                    height="186" class="scaleX-n1-rtl" alt="View Profile"
                                                    data-app-light-img="illustrations/illustration-john-light.png"
                                                    data-app-dark-img="illustrations/illustration-john-dark.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Gamification Card -->

                            <!-- Statistics Total Order -->
                            <div class="col-xxl-2 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line ri-24px"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 text-success me-1">+22%</p>
                                                <i class="ri-arrow-up-s-line text-success"></i>
                                            </div>
                                        </div>
                                        <div class="card-info mt-5">
                                            <h5 class="mb-1">155k</h5>
                                            <p>Total Orders</p>
                                            <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Statistics Total Order -->

                            <!-- Sessions line chart -->
                            <div class="col-xxl-2 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="d-flex align-items-center mb-1 flex-wrap">
                                            <h5 class="mb-0 me-1">$38.5k</h5>
                                            <p class="mb-0 text-success">+62%</p>
                                        </div>
                                        <span class="d-block card-subtitle">Sessions</span>
                                    </div>
                                    <div class="card-body">
                                        <div id="sessions"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sessions line chart -->

                            <!-- Total Transactions & Report Chart -->
                            <div class="col-12 col-xxl-8">
                                <div class="card h-100">
                                    <div class="row row-bordered g-0 h-100">
                                        <div class="col-md-7 col-12 order-2 order-md-0">
                                            <div class="card-header">
                                                <h5 class="mb-0">Total Transactions</h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="totalTransactionChart"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-1">Report</h5>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                            type="button" id="totalTransaction" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-line ri-20px"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="totalTransaction">
                                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 card-subtitle">Last month transactions $234.40k</p>
                                            </div>
                                            <div class="card-body pt-6">
                                                <div class="row">
                                                    <div class="col-6 border-end">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <div class="avatar">
                                                                <div class="avatar-initial bg-label-success rounded-3">
                                                                    <div class="ri-pie-chart-2-line ri-24px"></div>
                                                                </div>
                                                            </div>
                                                            <p class="mt-3 mb-1">This Week</p>
                                                            <h6 class="mb-0">+82.45%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <div class="avatar">
                                                                <div class="avatar-initial bg-label-primary rounded-3">
                                                                    <div class="ri-money-dollar-circle-line ri-24px"></div>
                                                                </div>
                                                            </div>
                                                            <p class="mt-3 mb-1">This Week</p>
                                                            <h6 class="mb-0">-24.86%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-5">
                                                <div
                                                    class="d-flex justify-content-around align-items-center flex-wrap gap-2">
                                                    <div>
                                                        <p class="mb-1">Performance</p>
                                                        <h6 class="mb-0">+94.15%</h6>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary" type="button">view report</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Transactions & Report Chart -->

                            <!-- Performance Chart -->
                            <div class="col-12 col-xxl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Performance</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                    type="button" id="performanceDropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-line ri-20px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="performanceDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="performanceChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Performance Chart -->

                            <!-- Project Statistics -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2">Project Statistics</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                type="button" id="projectStatus" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-line ri-20px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between p-4 border-bottom">
                                        <p class="mb-0 fs-xsmall">NAME</p>
                                        <p class="mb-0 fs-xsmall">BUDGET</p>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex align-items-center mb-6">
                                                <div class="avatar avatar-md flex-shrink-0 me-4">
                                                    <div class="avatar-initial bg-light-gray rounded-3">
                                                        <div>
                                                            <img src="../demo/assets/img/icons/misc/3d-illustration.png"
                                                                alt="User" class="h-25">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-1">3D Illustration</h6>
                                                        <small>Blender Illustration</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$6,500</div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-6">
                                                <div class="avatar avatar-md flex-shrink-0 me-4">
                                                    <div class="avatar-initial bg-light-gray rounded-3">
                                                        <div>
                                                            <img src="../demo/assets/img/icons/misc/finance-app-design.png"
                                                                alt="User" class="h-25">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-1">Finance App Design</h6>
                                                        <small>Figma UI Kit</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$4,290</div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-6">
                                                <div class="avatar avatar-md flex-shrink-0 me-4">
                                                    <div class="avatar-initial bg-light-gray rounded-3">
                                                        <div>
                                                            <img src="../demo/assets/img/icons/misc/4-square.png" alt="User"
                                                                class="h-25">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-1">4 Square</h6>
                                                        <small>Android Application</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$44,500</div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center mb-6">
                                                <div class="avatar avatar-md flex-shrink-0 me-4">
                                                    <div class="avatar-initial bg-light-gray rounded-3">
                                                        <div>
                                                            <img src="../demo/assets/img/icons/misc/delta-web-app.png"
                                                                alt="User" class="h-25">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-1">Delta Web App</h6>
                                                        <small>React Dashboard</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$12,690</div>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <div class="avatar avatar-md flex-shrink-0 me-4">
                                                    <div class="avatar-initial bg-light-gray rounded-3">
                                                        <div>
                                                            <img src="../demo/assets/img/icons/misc/ecommerce-website.png"
                                                                alt="User" class="h-25">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-1">eCommerce Website</h6>
                                                        <small>Vue + Laravel</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$10,850</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Project Statistics -->

                            <!-- Multiple widgets -->
                            <div class="col-md-6 col-xxl-4">
                                <div class="row g-4">
                                    <!-- Total Revenue chart -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-header pb-xl-8">
                                                <div class="d-flex align-items-center mb-1 flex-wrap">
                                                    <h5 class="mb-0 me-1">$42.5k</h5>
                                                    <p class="mb-0 text-danger">-22%</p>
                                                </div>
                                                <span class="d-block card-subtitle">Total Revenue</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="totalRevenue"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Total Revenue chart -->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                                    <div class="avatar">
                                                        <div class="avatar-initial bg-label-success rounded-3">
                                                            <i class="ri-handbag-line ri-24px"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-success me-1">+38%</p>
                                                        <i class="ri-arrow-up-s-line text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="card-info mt-5 mt-xl-8">
                                                    <h5 class="mb-1">$13.4k</h5>
                                                    <p>Total Sales</p>
                                                    <div class="badge bg-label-secondary rounded-pill">Last Six Month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                                    <div class="avatar">
                                                        <div class="avatar-initial bg-label-info rounded-3">
                                                            <i class="ri-links-line ri-24px"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-success me-1">+62%</p>
                                                        <i class="ri-arrow-up-s-line text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="card-info mt-5 mt-xl-8">
                                                    <h5 class="mb-1">142.8k</h5>
                                                    <p>Total Impression</p>
                                                    <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- overview Radial chart -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-header pb-xl-7">
                                                <div class="d-flex align-items-center mb-1 flex-wrap">
                                                    <h5 class="mb-0 me-1">$67.1k</h5>
                                                    <p class="mb-0 text-success">+49%</p>
                                                </div>
                                                <span class="d-block card-subtitle">Overview</span>
                                            </div>
                                            <div class="card-body pb-xl-8">
                                                <div id="overviewChart" class="d-flex align-items-center"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ overview Radial chart -->
                                </div>
                            </div>
                            <!--/ Multiple widgets -->

                            <!-- Sales Country Chart -->
                            <div class="col-12 col-xxl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Sales Country</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                    type="button" id="salesCountryDropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-line ri-20px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="salesCountryDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 card-subtitle">Total $42,580 Sales</p>
                                    </div>
                                    <div class="card-body pb-1 px-0">
                                        <div id="salesCountryChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales Country Chart -->

                            <!-- Top Referral Source  -->
                            <div class="col-12 col-xxl-8">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div>
                                            <h5 class="card-title mb-1">Top Referral Sources</h5>
                                            <p class="card-subtitle mb-0">Number of Sales</p>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                type="button" id="earningReportsTabsId" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-line ri-20px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="earningReportsTabsId">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="nav nav-tabs nav-tabs-widget pb-6 gap-4 mx-1 d-flex flex-nowrap"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);"
                                                    class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id"
                                                    aria-controls="navs-orders-id" aria-selected="true">
                                                    <div class="avatar avatar-sm">
                                                        <img src="../demo/assets/img/icons/brands/google.png" alt="User">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);"
                                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id"
                                                    aria-controls="navs-sales-id" aria-selected="false">
                                                    <div class="avatar avatar-sm">
                                                        <img src="../demo/assets/img/icons/brands/facebook-rounded.png"
                                                            alt="User">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);"
                                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id"
                                                    aria-controls="navs-profit-id" aria-selected="false">
                                                    <div class="avatar avatar-sm">
                                                        <img src="../demo/assets/img/icons/brands/instagram-rounded.png"
                                                            alt="User">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);"
                                                    class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id"
                                                    aria-controls="navs-income-id" aria-selected="false">
                                                    <div class="avatar avatar-sm">
                                                        <img src="../demo/assets/img/icons/brands/reddit-rounded.png"
                                                            alt="User">
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);"
                                                    class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                                    role="tab" data-bs-toggle="tab" aria-selected="false">
                                                    <div class="avatar avatar-sm">
                                                        <div class="avatar-initial bg-label-secondary text-body rounded">
                                                            <i class="ri-add-line ri-22px"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content p-0">
                                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-transparent border-bottom">Product Name</th>
                                                            <th class="bg-transparent border-bottom">STATUS</th>
                                                            <th class="text-end bg-transparent border-bottom">Profit</th>
                                                            <th class="text-end bg-transparent border-bottom">REVENUE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <tr>
                                                            <td>Email Marketing Campaign</td>
                                                            <td>
                                                                <div class="badge bg-label-primary rounded-pill">Active
                                                                </div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+24%</td>
                                                            <td class="text-end fw-medium">$42,857</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Google Workspace</td>
                                                            <td>
                                                                <div class="badge bg-label-success rounded-pill">Completed
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-12%</td>
                                                            <td class="text-end fw-medium">$850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Affiliation Program</td>
                                                            <td>
                                                                <div class="badge bg-label-primary rounded-pill">Active
                                                                </div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+24%</td>
                                                            <td class="text-end fw-medium">$5,576</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Google Adsense</td>
                                                            <td>
                                                                <div class="badge bg-label-info rounded-pill">In Draft</div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+0%</td>
                                                            <td class="text-end fw-medium">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-transparent border-bottom">Product Name</th>
                                                            <th class="bg-transparent border-bottom">STATUS</th>
                                                            <th class="text-end bg-transparent border-bottom">Profit</th>
                                                            <th class="text-end bg-transparent border-bottom">REVENUE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <tr>
                                                            <td>facebook Adsense</td>
                                                            <td>
                                                                <div class="badge bg-label-info rounded-pill">In Draft</div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+5%</td>
                                                            <td class="text-end fw-medium">$5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Affiliation Program</td>
                                                            <td>
                                                                <div class="badge bg-label-primary rounded-pill">Active
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-24%</td>
                                                            <td class="text-end fw-medium">$5,576</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email Marketing Campaign</td>
                                                            <td>
                                                                <div class="badge bg-label-warning rounded-pill">warning
                                                                </div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+5%</td>
                                                            <td class="text-end fw-medium">$2,857</td>
                                                        </tr>
                                                        <tr>
                                                            <td>facebook Workspace</td>
                                                            <td>
                                                                <div class="badge bg-label-success rounded-pill">Completed
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-12%</td>
                                                            <td class="text-end fw-medium">$850</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-transparent border-bottom">Product Name</th>
                                                            <th class="bg-transparent border-bottom">STATUS</th>
                                                            <th class="text-end bg-transparent border-bottom">Profit</th>
                                                            <th class="text-end bg-transparent border-bottom">REVENUE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <tr>
                                                            <td>Affiliation Program</td>
                                                            <td>
                                                                <div class="badge bg-label-primary rounded-pill">Active
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-24%</td>
                                                            <td class="text-end fw-medium">$5,576</td>
                                                        </tr>
                                                        <tr>
                                                            <td>instagram Adsense</td>
                                                            <td>
                                                                <div class="badge bg-label-info rounded-pill">In Draft</div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+5%</td>
                                                            <td class="text-end fw-medium">$5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>instagram Workspace</td>
                                                            <td>
                                                                <div class="badge bg-label-success rounded-pill">Completed
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-12%</td>
                                                            <td class="text-end fw-medium">$850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email Marketing Campaign</td>
                                                            <td>
                                                                <div class="badge bg-label-danger rounded-pill">warning
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-5%</td>
                                                            <td class="text-end fw-medium">$857</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table border-top">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-transparent border-bottom">Product Name</th>
                                                            <th class="bg-transparent border-bottom">STATUS</th>
                                                            <th class="text-end bg-transparent border-bottom">Profit</th>
                                                            <th class="text-end bg-transparent border-bottom">REVENUE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                        <tr>
                                                            <td>reddit Workspace</td>
                                                            <td>
                                                                <div class="badge bg-label-warning rounded-pill">process
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-12%</td>
                                                            <td class="text-end fw-medium">$850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Affiliation Program</td>
                                                            <td>
                                                                <div class="badge bg-label-primary rounded-pill">Active
                                                                </div>
                                                            </td>
                                                            <td class="text-danger fw-medium text-end">-24%</td>
                                                            <td class="text-end fw-medium">$5,576</td>
                                                        </tr>
                                                        <tr>
                                                            <td>reddit Adsense</td>
                                                            <td>
                                                                <div class="badge bg-label-info rounded-pill">In Draft</div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+5%</td>
                                                            <td class="text-end fw-medium">$5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email Marketing Campaign</td>
                                                            <td>
                                                                <div class="badge bg-label-success rounded-pill">Completed
                                                                </div>
                                                            </td>
                                                            <td class="text-success fw-medium text-end">+50%</td>
                                                            <td class="text-end fw-medium">$857</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Top Referral Source  -->

                            <!-- Weekly Sales Chart-->
                            <div class="col-12 col-xxl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Weekly Sales</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                    type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-line ri-20px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="weeklySalesDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 card-subtitle">Total 85.4k Sales</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-7 mb-xl-12">
                                            <div class="col-6 d-flex align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-primary rounded">
                                                        <i class="ri-funds-line ri-24px"></i>
                                                    </div>
                                                </div>
                                                <div class="ms-3 d-flex flex-column">
                                                    <p class="mb-0">Net Income</p>
                                                    <h6 class="mb-0">$438.5K</h6>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-warning rounded">
                                                        <i class="ri-money-dollar-circle-line ri-24px"></i>
                                                    </div>
                                                </div>
                                                <div class="ms-3 d-flex flex-column">
                                                    <p class="mb-0">Expense</p>
                                                    <h6 class="mb-0">$22.4K</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="weeklySalesChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Weekly Sales Chart-->


                            <!-- visits By Day Chart-->
                            <div class="col-12 col-xxl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Visits by Day</h5>
                                            <div class="dropdown">
                                                <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                                                    type="button" id="visitsByDayDropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-line ri-20px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="visitsByDayDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 card-subtitle">Total 248.5k Visits</p>
                                    </div>
                                    <div class="card-body pt-xl-5">
                                        <div id="visitsByDayChart"></div>
                                        <div class="d-flex justify-content-between mt-6">
                                            <div>
                                                <h6 class="mb-0">Most Visited Day</h6>
                                                <p class="mb-0 small">Total 62.4k Visits on Thursday</p>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-warning rounded">
                                                    <i class="ri-arrow-right-s-line ri-24px scaleX-n1-rtl"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ visits By Day Chart-->

                            <!-- Activity Timeline -->
                            <div class="col-12 col-xxl-8">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-0">Activity Timeline</h5>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <ul class="timeline card-timeline mb-0">
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-primary"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-3">
                                                        <h6 class="mb-0">12 Invoices have been paid</h6>
                                                        <small class="text-muted">12 min ago</small>
                                                    </div>
                                                    <p class="mb-2">
                                                        Invoices have been paid to the company
                                                    </p>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="badge bg-lighter rounded-3">
                                                            <img src="../demo/assets/img/icons/misc/pdf.png" alt="img"
                                                                width="15" class="me-2">
                                                            <span class="h6 mb-0">invoices.pdf</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-success"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-3">
                                                        <h6 class="mb-0">Client Meeting</h6>
                                                        <small class="text-muted">45 min ago</small>
                                                    </div>
                                                    <p class="mb-2">
                                                        Project meeting with john @10:15am
                                                    </p>
                                                    <div class="d-flex justify-content-between flex-wrap gap-2">
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <div class="avatar avatar-sm me-2">
                                                                <img src="../demo/assets/img/avatars/1.png" alt="Avatar"
                                                                    class="rounded-circle" />
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                                                <small>CEO of ThemeSelection</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-info"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-3">
                                                        <h6 class="mb-0">Create a new project for client</h6>
                                                        <small class="text-muted">2 Day Ago</small>
                                                    </div>
                                                    <p class="mb-2">
                                                        6 team members in a project
                                                    </p>
                                                    <ul class="list-group list-group-flush">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                                                            <div class="d-flex flex-wrap align-items-center">
                                                                <ul
                                                                    class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                        data-bs-placement="top" title="Vinnie Mostowy"
                                                                        class="avatar pull-up">
                                                                        <img class="rounded-circle"
                                                                            src="../demo/assets/img/avatars/5.png"
                                                                            alt="Avatar" />
                                                                    </li>
                                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                        data-bs-placement="top" title="Allen Rieske"
                                                                        class="avatar pull-up">
                                                                        <img class="rounded-circle"
                                                                            src="../demo/assets/img/avatars/12.png"
                                                                            alt="Avatar" />
                                                                    </li>
                                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                        data-bs-placement="top" title="Julee Rossignol"
                                                                        class="avatar pull-up">
                                                                        <img class="rounded-circle"
                                                                            src="../demo/assets/img/avatars/6.png"
                                                                            alt="Avatar" />
                                                                    </li>
                                                                    <li class="avatar">
                                                                        <span
                                                                            class="avatar-initial rounded-circle pull-up text-heading"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="bottom"
                                                                            title="3 more">+3</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Activity Timeline -->
                        </div>

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body mb-2 mb-md-0">
                                    ©
                                    <script>document.write(new Date().getFullYear())</script>,
                                    made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                                    <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                        target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                        class="footer-link me-4">More Themes</a>
                                    <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/laravel-introduction.html"
                                        target="_blank" class="footer-link me-4">Documentation</a>
                                    <a href="https://pixinvent.ticksy.com/" target="_blank"
                                        class="footer-link d-none d-sm-inline-block">Support</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!--/ Footer -->
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!--/ Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Vendor JS-->

@endsection