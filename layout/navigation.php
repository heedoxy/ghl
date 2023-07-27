<?php
require_once __DIR__ . '/../bootstrap/autoload.php';
$auth = new Auth();
$user = new User();
?>
<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li data-toggle="tooltip" title="Dashboard" class="active">
                <a href="#navigationDashboards" title="Dashboard">
                    <i class="icon ti-pie-chart"></i>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="Profile">
                <a href="./profile.php" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="logout">
                <a href="./logout.php" class="go-to-page">
                    <i class="icon ti-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="navigationDashboards" class="navigation-active">
            <li>
                <a href="./">Dashboard</a>
            </li>
            <li>
            <li>
                <a href="./log.php">Logs</a>
            </li>
            <li>
                <a href="./user-list.php">Users</a>
            </li>
            <li>
                <a href="./profile.php">Profile</a>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->