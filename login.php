<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php
$auth = new Auth();
$log = new Log();

if (! $auth->guest()) {
    go('./');
}

if (posted('submit')) {

    $username = request('username');
    $password = request('password');

    $id = $auth->check($username, $password);

    if ($id) {
        $auth->set($id);
        success("login");
        $log->add("login");
        go('./');
    }

    error("username or password is wrong");
    go('./login.php');
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="public/media/image/favicon.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="public/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="public/css/app.css" type="text/css">
</head>
<style>
    body {
        background: url(".//public/media/background.webp") white;
        direction: ltr;
        text-align: left;
        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        padding: 3rem 0;
    }

    .form-wrapper {
        background-color: white;
        padding: 3rem;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        width: 430px;
        margin: 50px auto;
        text-align: center;
    }
</style>

<body>


<div class="form-wrapper">

    <!-- logo -->
    <div class="logo">
        <img class="large-logo" src="public/media/image/logo.png" alt="image">
    </div>
    <!-- ./ logo -->


    <h5>CRM</h5>

    <!-- form -->
    <form method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="username"
                   placeholder="username, email, phone"
                   dir="ltr" required="" autocomplete="off" autofocus="">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" dir="ltr"
                   autocomplete="off" required="">
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">login</button>

    </form>
    <!-- ./ form -->

    <!-- Plugin scripts -->
    <script src="public/vendors/bundle.js"></script>
    <!-- App scripts -->
    <script src="public/js/app.js"></script>

</div>

<?php require_once __DIR__ . '/layout/error.php'; ?>

</body>
</html>