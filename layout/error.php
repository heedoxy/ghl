<?php

if (isset($_SESSION['TOASTER-INFO'])) {
    $message = $_SESSION['TOASTER-INFO'];
    echo '<script>toastr.info(\'' . $message . '\')</script>';
    unset($_SESSION['TOASTER-INFO']);
}

if (isset($_SESSION['TOASTER-SUCCESS'])) {
    $message = $_SESSION['TOASTER-SUCCESS'];
    echo '<script>toastr.success(\'' . $message . '\')</script>';
    unset($_SESSION['TOASTER-SUCCESS']);
}

if (isset($_SESSION['TOASTER-WARNING'])) {
    $message = $_SESSION['TOASTER-WARNING'];
    echo '<script>toastr.warning(\'' . $message . '\')</script>';
    unset($_SESSION['TOASTER-WARNING']);
}

if (isset($_SESSION['TOASTER-ERROR'])) {
    $message = $_SESSION['TOASTER-ERROR'];
    echo '<script>toastr.error(\'' . $message . '\')</script>';
    unset($_SESSION['TOASTER-ERROR']);
}