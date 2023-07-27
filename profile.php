<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php

$title = 'Profile';
$database = new Database();

if (isset($_POST['submit'])) {

    $name = request('name');
    dd($name);

    header("location: ./");
    die();
}

?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
<!-- begin::main content -->
<main class="main-content">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <form method="post">

                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="username" disabled>
                        </div>

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="name">
                        </div>

                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="phone">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="email">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Profile image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <small id="emailHelp" class="form-text text-muted">
                                use 1:1 aspect ratio
                            </small>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary float-left">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- end::main content -->
<?php require_once __DIR__ . '/layout/footer.php'; ?>
