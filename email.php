<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php
$main_url = "email.php";
$list_url = "email-list.php";

$class = new Email();
$section = new Section();
$permission = new Permission();

$id = 0;
$edit = false;
if (posted('edit')) {
    $edit = true;
    $id = get('edit');
    $record = $class->get($id);
    if (! $record) go($list_url);
}

$title = ($edit ? 'edit' : 'add new') . ' email ';

if (posted('submit')) {

    $email = request('email');

    if ($edit) {
        $id = $class->edit($id, $email);
        success_edited();
    } else {
        $id = $class->add($email);
        success_saved();
    }

    $permissions = [];
    $permission->remove_all($id);
    if (posted('permissions')) $permissions = post('permissions', true);
    foreach ($permissions as $section_id) {
        $permission->add($id, $section_id);
    }

    go($list_url);
}


$sections = $section->list()->fetchAll();
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
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?= ($edit) ? $record->email : '' ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="permissions">access</label>
                                <select class="js-example-basic-single" name="permissions[]" id="permissions" multiple>
                                    <?php foreach ($sections as $sec) { ?>
                                        <option value="<?= $sec['id'] ?>"
                                            <?= $permission->has_permission($id, $sec['id']) ? "selected" : "" ?>>
                                            <?= $sec['title'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
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