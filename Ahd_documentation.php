########################################################################################################################
#####------------>1/12 to 10-12-2017 Documenting Ahd Design of Finance application V.1----------------------------------

template--->Body classes in :
1- Make <body class="sidebar-xs navbar-top  pace-done sidebar-opposite-visible">
2- after <!-- Page content -->
    <div class="page-content">
    <div class="sidebar sidebar-main effect8" style=""></div>
        Add:
    <!---ahd--->
    <?php if(isset($show_side_bar_fi) && $show_side_bar_fi=true) { ?>
        <?php $this->load->view('Main_core/includes/Bw_fi_sidebar') ?>
    <?php } ?>
    <!--ahd--->

3- Change :<!-- Page header -->
    <div class="page-header page-header-default effect8">
   To:<!-- Page header -->
        <div class="page-header page-header-default effect8" style="margin-bottom: 0px;">
4- Befor: <?php if(isset($header_alert)) { ?>
                <div style="position: absolute;left: 40%;top:2px"
                     class="alert alert-<?= $header_alert_type ?>">
                    <?= $header_alert ?>
                </div>
            <?php } ?>
            <div class="error_database"></div>
   Add:
            <!---ahd--->
            <?php
            if(isset($show_side_bar_fi) && $show_side_bar_fi=true)
                $this->load->view('Main_core/includes/Bw_fi_menu')
            ?>
            <!--ahd--->
   5- Remove Class "Content" from:
            <!-- page header -->
            <div class="clearfix"></div>
            <div class="content margin-content col-xs-12">
                <div class="row">
    --------------------------------------------------------------------------------------------------------------------
Main_Core-View-Include->Header.blade.php:
                            add :    <link media="all" href="<?php echo PLUGINS_URL.'/3d/css/style.css' ?>" rel="stylesheet" type="text/css">
                            Befor coe.min.css
                      ->Footer.php:
                            add at the start:
                            <!----- ahd 3-12-2017--->
                            <?php if(isset($show_side_bar_fi) && $show_side_bar_fi=true) { ?>
                            <?php $this->load->view('Main_core/includes/pre-footer'); ?>
                            <?php } ?>
                            <!----- /ahd 3-12-2017--->
                      ->Navbar.php: سويتش اظهار بار يساري ===== غير ضروري ابداً
                            After User Dropdown list Add:
                            <li>
                                <a class="sidebar-control sidebar-opposite-fix hidden-xs" data-popup="tooltip" title="" data-placement="bottom" data-container="body" data-original-title="Hide opposite">
                                    <i class="icon-lan3"></i>
                                </a>
                            </li>
Copy Files:
                    Includes: [Bwc.php][Bwsecondbar.php][Pre-footer.php]
                    Take the new CSS/Style.css
    --------------------------------------------------------------------------------------------------------------------
########################################################################################################################
ALTER TABLE `bw_waiting_list` ADD `first_name_arabic` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `bw_waiting_list` ADD `last_name_arabic` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `bw_waiting_list` ADD `father_name_arabic` VARCHAR(255) NOT NULL AFTER `id`;
ALTER TABLE `bw_waiting_list` ADD `mother_name_arabic` VARCHAR(255) NOT NULL AFTER `id`;