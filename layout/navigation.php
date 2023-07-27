<?php
require_once __DIR__ . '/../bootstrap/autoload.php';
$auth = new Auth();
$user = new User();
$access = $user->me()->access;
?>
<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li data-toggle="tooltip" title="داشبورد" class="active">
                <a href="#navigationDashboards" title="داشبوردها">
                    <i class="icon ti-pie-chart"></i>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="ویرایش پروفایل">
                <a href="./profile.php" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="خروج">
                <a href="./logout.php" class="go-to-page">
                    <i class="icon ti-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="navigationDashboards" class="navigation-active">
            <li>
                <a href="./">داشبورد</a>
            </li>
            <li>
            <li>
                <a href="./log.php">گزارشات سیستم</a>
            </li>
            <li>
                <a href="./user-list.php">کاربران سیستم</a>
            </li>
            <li>
                <a href="./profile.php">حساب کاربری</a>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->