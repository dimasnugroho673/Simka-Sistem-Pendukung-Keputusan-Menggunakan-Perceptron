<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="<?php echo base_url(); ?>assets/admintemplate/assets/images/faces/face8.jpg" alt="profile image">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name text-capitalize"><?php echo $user['nama']; ?></p>
                        <p class="designation text-capitalize text-white-50"><?php echo $user['level']; ?></p>
                    </div>
                </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo site_url('panel/dashboard'); ?>">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="data">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Data</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="data">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('panel/data'); ?>">Data Training (unormalize)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('panel/data/normalize'); ?>">Data Training (normalized)</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#decision" aria-expanded="false" aria-controls="decision">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Decisioning</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="decision">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/simka/machine_learning/perceptron/test.html">Start Decision</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('panel/data/normalize'); ?>">Data Training (normalized)</a>
                        </li> -->
                    </ul>
                </div>
            </li>

        </ul>
    </nav>
    <!-- partial -->


    <div class="main-panel">