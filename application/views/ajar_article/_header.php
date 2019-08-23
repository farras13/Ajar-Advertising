<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo htmlspecialchars($title); ?> - <?php echo trans("admin"); ?>&nbsp;<?php echo htmlspecialchars($settings->site_title); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" type="image/png" href="<?php echo get_favicon($vsettings); ?>"/>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/select2/css/select2.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/_all-skins.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables_themeroller.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/icheck/square/purple.css">

    <!-- Tags Input -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/tagsinput/jquery.tagsinput.min.css">

    <!-- Color Picker css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">

    <!-- File Manager css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/file-manager/file-manager.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">

    <!-- Datetimepicker css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/custom.css">
    <?php if ($site_lang->text_direction == "rtl"): ?>
        <!-- RTL -->
        <link href="<?php echo base_url(); ?>assets/admin/css/rtl.min.css" rel="stylesheet"/>
    <?php endif; ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var csfr_token_name = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csfr_cookie_name = '<?php echo $this->config->item('csrf_cookie_name'); ?>';
        var base_url = '<?php echo base_url(); ?>';
        var fb_app_id = '<?php echo $this->general_settings->facebook_app_id; ?>';
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                <b><?php echo html_escape($settings->application_name); ?>&nbsp;<?php echo trans("panel"); ?></b>
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <a class="btn btn-sm btn-success pull-left btn-site-prev" target="_blank"
                   href="<?php echo base_url(); ?>"><i
                            class="fa fa-eye"></i> <?php echo trans("view_site"); ?></a>
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo html_escape(user()->username); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <?php echo html_escape(user()->username); ?>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">
                                        <i class="fa fa-sign-out"></i>&nbsp;
                                        <?php echo trans("logout"); ?>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>assets/admin/img/user.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo html_escape(user()->username); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo trans("online"); ?></a>
                </div>
            </div>


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"><?php echo trans("main_navigation"); ?></li>
                <li>
                    <a href="<?php echo base_url(); ?>admin">
                        <i class="fa fa-home"></i>
                        <span><?php echo trans("home"); ?></span>
                    </a>
                </li>

                <?php if (is_admin()): ?>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/navigation">
                            <i class="fa fa-th"></i>
                            <span><?php echo trans("navigation"); ?></span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-leaf"></i> <span><?php echo trans("pages"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>page/add_page">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("add_page"); ?>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>page/pages">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("pages"); ?>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i> <span><?php echo trans("add_post"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_post/add_post"> <i class="fa fa-circle-o"></i> <?php echo trans("add_post"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/add_video">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("add_video"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/add_audio"> <i class="fa fa-circle-o"></i> <?php echo trans("add_audio"); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bars"></i> <span><?php echo trans("posts"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_post/posts?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("posts"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/slider_posts?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("slider_posts"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/featured_posts?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("featured_posts"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/breaking_news?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("breaking_news"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/recommended_posts?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("recommended_posts"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/pending_posts?lang_id=<?php echo $general_settings->site_lang;?>"><i class="fa fa-circle-o"></i> <?php echo trans("pending_posts"); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/scheduled_posts?lang_id=<?php echo $general_settings->site_lang;?>">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo trans("scheduled_posts"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/drafts?lang_id=<?php echo $general_settings->site_lang;?>">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span><?php echo trans("drafts"); ?></span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-rss"></i> <span><?php echo trans("rss_feeds"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_rss/import_feed">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("import_rss_feed"); ?>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_rss/feeds">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("rss_feeds"); ?>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder-open"></i> <span><?php echo trans("categories"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_category/categories">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("categories"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_category/subcategories"><i class="fa fa-circle-o"></i> <?php echo trans("subcategories"); ?>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i> <span><?php echo trans("widgets"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>widget/add_widget">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("add_widget"); ?>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>widget/widgets">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("widgets"); ?>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list"></i> <span><?php echo trans("polls"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>poll/add_poll">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("add_poll"); ?>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>poll/polls">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("polls"); ?>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-image"></i> <span><?php echo trans("gallery"); ?></span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>admin_category/gallery_categories">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("categories"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>gallery/index">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("images"); ?>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin/contact_messages">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <span><?php echo trans("contact_messages"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/comments">
                            <i class="fa fa-comments"></i>
                            <span><?php echo trans("comments"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin/newsletter">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><?php echo trans("newsletter"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>quizz/quizz">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            <span><?php echo 'Quizz'; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin_event/event">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span><?php echo 'Event'; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/ad_spaces">
                            <i class="fa fa-dollar" aria-hidden="true"></i>
                            <span><?php echo trans("ad_spaces"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/users"><i class="fa fa-users"></i>
                            <span><?php echo trans("users"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/update_profile/<?php echo user()->id; ?>">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span><?php echo trans("update_profile"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/font_options"><i class="fa fa-font" aria-hidden="true"></i>
                            <span><?php echo trans("font_options"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/seo_tools"><i class="fa fa-wrench"></i>
                            <span><?php echo trans("seo_tools"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/social_login_configuration"><i class="fa fa-share-alt"></i>
                            <span><?php echo trans("social_login_configuration"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/preferences">
                            <i class="fa fa-check-square-o"></i>
                            <span><?php echo trans("preferences"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>language/languages">
                            <i class="fa fa-language"></i>
                            <span><?php echo trans("language_settings"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/visual_settings">
                            <i class="fa fa-paint-brush"></i>
                            <span><?php echo trans("visual_settings"); ?></span>
                        </a>
                    </li>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/email_settings">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("email_settings"); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/settings">
                            <i class="fa fa-cogs"></i>
                            <span><?php echo trans("settings"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_departments/index">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("departments"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_badges/index">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("badges"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_points/index">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("points"); ?></span>
                        </a>
                    </li>

                <?php endif; ?>

                <?php if (is_author()): ?>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i> <span><?php echo trans("add_post"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_post/add_post"> <i class="fa fa-circle-o"></i> <?php echo trans("add_post"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/add_video">
                                    <i class="fa fa-circle-o"></i> <?php echo trans("add_video"); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/add_audio"> <i class="fa fa-circle-o"></i> <?php echo trans("add_audio"); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bars"></i> <span><?php echo trans("posts"); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin_post/posts"><i class="fa fa-circle-o"></i> <?php echo trans("posts"); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin_post/pending_posts"><i class="fa fa-circle-o"></i> <?php echo trans("pending_posts"); ?></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/scheduled_posts">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo trans("scheduled_posts"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin_post/drafts">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span><?php echo trans("drafts"); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>admin/update_profile/<?php echo user()->id; ?>">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span><?php echo trans("update_profile"); ?></span>
                        </a>
                    </li>

                <?php endif; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
