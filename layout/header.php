<?php
require_once __DIR__ . '/../bootstrap/autoload.php';

$auth = new Auth();
$user = new User();
$title = $title ?? config("APP_NAME", "سامانه مدیریت کشتی");

if ($auth->guest()) {
    go('./login.php');
}

$directory = config('PROFILE_DIRECTORY');
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="public/vendors/bundle.css" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="public/vendors/datepicker-jalali/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="public/vendors/datepicker/daterangepicker.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="public/vendors/dataTable/responsive.bootstrap.min.css" type="text/css">


    <!-- Select2 -->
    <link rel="stylesheet" href="public/vendors/select2/css/select2.min.css" type="text/css">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="public/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="public/css/app.css" type="text/css">


</head>

<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
</div>
<!-- end::page loader -->

<?php include_once __DIR__ . '/navigation.php' ?>

<!-- begin::header -->
<div class="header">

    <!-- begin::header logo -->
    <div class="header-logo">
        <a href="./">
            <img class="large-logo" src="public/media/image/logo.png" alt="image">
            <img class="small-logo" src="public/media/image/logo-sm.png" alt="image">
            <img class="dark-logo" src="public/media/image/logo-dark.png" alt="image">
        </a>
    </div>
    <!-- end::header logo -->

    <!-- begin::header body -->
    <div class="header-body">

        <div class="header-body-left">

            <h3 class="page-title"><?= $title ?></h3>

            <!-- begin::breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol>
            </nav>
            <!-- end::breadcrumb -->

        </div>

        <div class="header-body-right">
            <!-- begin::navbar main body -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="./profile.php" class="nav-link bg-none">
                        <div>
                            <figure class="avatar avatar-state-success avatar-sm">
                                <img src="<?= $directory ?>/<?=  $user->me()->profile ?>" class="rounded-circle">
                            </figure>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end::navbar main body -->


            <div class="d-flex align-items-center">
                <!-- begin::navbar navigation toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
                    <a href="#">
                        <i class="ti-menu"></i>
                    </a>
                </div>
                <!-- end::navbar navigation toggler -->

                <!-- begin::navbar toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
                    <a href="#">
                        <i class="ti-arrow-down"></i>
                    </a>
                </div>
                <!-- end::navbar toggler -->
            </div>


        </div>

    </div>
    <!-- end::header body -->

</div>
<!-- end::header -->
