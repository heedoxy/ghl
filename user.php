<?php
require_once __DIR__ . '/bootstrap/autoload.php';
$main_url = "user.php";
$list_url = "user-list.php";

$user = new User();

$id = 0;
$record = (object)[];
$edit = false;

if (posted('edit')) {
    $edit = true;
    $id = get('edit');
    $record = $user->get($id);
    if (! $record) go($list_url);
}

$title = ($edit ? 'edit' : 'add new') . ' user ';

if (posted('submit')) {

    $name = request('name');
    $family = request('family');
    $phone = request('phone');
    $email = request('email');
    $is_active = request('is_active');

    if ($user->exist_phone($phone, $id)) {
        error("phone number is repeated");
        go('./user-list.php');
    }

    if ($user->exist_email($email, $id)) {
        error("email is repeated");
        go('./user-list.php');
    }

    $profile = $edit ? $record->profile : 'profile.jpg';

    if (posted('profile')) {
        $target_dir = config('PROFILE_DIRECTORY');
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $extensions_arr = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $extensions_arr)) {
            error('the selected file format is not allowed.');
            go("$main_url?edit=$id");
        }
        $name = token(10) . "." . $imageFileType;
        move_uploaded_file($_FILES['picture']['tmp_name'], $target_dir . $name);
        $profile = $name;
    }

    if ($edit) {
        $id = $user->edit($id, $name, $family, $email, $profile, $is_active);
        success_edited();
    } else {

        $username = request('username');
        $password = request('password');
        $password = md5($password);

        if ($user->exist_username($username, $id)) {
            error("username is repeated");
            go('./user-list.php');
        }

        $id = $user->add($name, $family, $username, $phone, $email, $password, $profile, $is_active);
        success_saved();
    }
    go("$main_url?edit=$id");
}

?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <!-- begin::main content -->
    <main class="main-content">

        <div class="row">

            <div class="col-md-6 col-sm-12">

                <div class="card">
                    <div class="card-body">
                        <form role="form" action="" method="post">

                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                       value="<?= ($edit) ? $record->username : '' ?>"
                                    <?= $edit ? "disabled" : "required" ?>>
                            </div>

                            <?php if (!$edit) { ?>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="text" class="form-control" name="password" id="password" required>
                                </div>
                            <?php } ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="<?= ($edit) ? $record->name : '' ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="family">family</label>
                                        <input type="text" class="form-control" name="family" id="family"
                                               value="<?= ($edit) ? $record->family : '' ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               value="<?= ($edit) ? $record->phone : '' ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               value="<?= ($edit) ? $record->email : '' ?>" required>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="form-group float-right">
                                <input name="is_active" id="is_active" type="checkbox"
                                       value="1" <?= $edit && $record->is_active == 0 ? "" : "checked" ?>>
                                <label for="is_active">active</label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary float-left mr-2">
                                Save
                            </button>
                            <a href="<?= $list_url ?>" class="btn btn-secondary  float-left">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end::main content -->

<?php require_once __DIR__ . '/layout/footer.php'; ?>