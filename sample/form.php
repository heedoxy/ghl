<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php
$title = " ";
$main_url = ".php";
$list_url = "-list.php";

$class = new Database();

$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = request('edit');
    $row = $class->get($id);
}

if (isset($_POST['submit'])) {


    if ($_FILES["picture"]["name"]) {

        $target_dir = "image/device/pic/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $extensions_arr = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $extensions_arr)) {
            $name = token(10) . "." . $imageFileType;
            move_uploaded_file($_FILES['picture']['tmp_name'], $target_dir . $name);
            $picture = $name;
        }
    }

    if ($edit) {
        $command = $class->edit();
    } else {
        $command = $class->add();
    }

    // check errors
    if ($command) {
        $_SESSION['error'] = 0;
    } else {
        $_SESSION['error'] = 1;
    }

    // bye bye :)
    header("Location: $main_url?edit=$command");

}
?>

<?php require_once __DIR__ . '/layout/header.php'; ?>

    <!-- begin::main content -->
    <main class="main-content">

        <div class="row">

            <div class="col-md-6 col-sm-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= ($edit) ? "ویرایش" : "ثبت" ?> نام صفحه </h5>

                        <form method="post" enctype="multipart/form-data">

                            <a href="<?= $list_url ?>" class="btn btn-warning text-white  mr-2">
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                بازگشت به لیست</a>
                            <button type="submit" name="submit" class="btn bg-info px-4">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </main>
    <!-- end::main content -->

<?php require_once __DIR__ . '/layout/footer.php'; ?>