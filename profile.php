<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php

$title = 'حساب کاربری';
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
                    <h6 class="card-title">نمای کلی</h6>
                    <form method="post">

                        <div class="form-group">
                            <label for="username">نام کاربری</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="نام کاربری" disabled>
                        </div>

                        <div class="form-group">
                            <label for="name">نام</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="نام">
                        </div>

                        <div class="form-group">
                            <label for="phone">شماره تماس</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="شماره تماس">
                        </div>

                        <div class="form-group">
                            <label for="email">آدرس ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="ایمیل">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">تصویر پروفایل</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <small id="emailHelp" class="form-text text-muted">
                                برای انتخاب پروفایل لطفا از تصاویر با نسبت 1 به 1 استفاده کنید.
                            </small>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary float-right">
                            ذخیره تغییرات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- end::main content -->
<?php require_once __DIR__ . '/layout/footer.php'; ?>
