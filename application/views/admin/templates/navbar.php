<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="<?php echo site_url('panel/dashboard') ?>">
                <img src="<?php echo base_url(); ?>assets/uploads/img/logo_web/logo_ai.png" alt="logo" /> </a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('panel/dashboard') ?>">
                <img src="<?php echo base_url(); ?>assets/admintemplate/assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
                <!-- <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li> -->

                <li class="nav-item font-weight-semibold d-none d-lg-block">Accessed from IP :
                    <?php
                    function getUserIP()
                    {
                        // Get real visitor IP behind CloudFlare network
                        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                        }
                        $client  = @$_SERVER['HTTP_CLIENT_IP'];
                        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
                        $remote  = $_SERVER['REMOTE_ADDR'];

                        if (filter_var($client, FILTER_VALIDATE_IP)) {
                            $ip = $client;
                        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                            $ip = $forward;
                        } else {
                            $ip = $remote;
                        }

                        return $ip;
                    }


                    $user_ip = getUserIP();

                    echo $user_ip; // Output IP address [Ex: 177.87.193.134] 
                    ?>
                </li>



            </ul>
            <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user['nama']; ?></p>
                            <p class="font-weight-light text-muted mb-0"><?php echo $user['email']; ?></p>
                        </div>
                        <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                        <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                        <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                        <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                        <a href="<?php echo site_url('login/logout'); ?>" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>