<?php
require_once __DIR__ . '/bootstrap/autoload.php';
$title = 'کاربران سیستم';
$main_url = "user.php";
$list_url = "user-list.php";

$user = new User();
$list = $user->list();
$counter = 1;

if (posted('remove')) {
    $id = request('remove');
    $user->remove($id);
    success_removed();
    go($list_url);
}

$directory = config('PROFILE_DIRECTORY');

?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <!-- begin::main content -->
    <main class="main-content">


        <button type="button" class="btn btn-primary btn-uppercase mb-3">
            <a href="<?= $main_url ?>" class="text-white"><i class="ti-plus m-r-5"></i> ثبت کاربر جدید</a>
        </button>

        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>شماره موبایل</th>
                        <th>ایمیل</th>
                        <th>مدیریت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($record = $list->fetchObject()) {
                        ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td style="white-space: nowrap">
                                <figure
                                    class="avatar avatar-state-<?= $record->is_active == 1 ? "success" : "danger" ?> avatar-sm">
                                    <img src="<?= $directory ?>/<?= $record->profile ?>" class="rounded-circle">
                                </figure>

                                <?= $record->name . " " . $record->family ?>
                            </td>
                            <td>
                                <?= $record->phone ?>
                            </td>
                            <td>
                                <?= $record->email ?>
                            </td>

                            <td style="white-space: nowrap">
                                <a href="<?= $main_url ?>?edit=<?= $record->id ?>">
                                    <button type="button" class="btn btn-outline-info btn-floating">
                                        <i class='ti-pencil-alt'></i>
                                    </button>
                                </a>
                                <a href="<?= $list_url ?>?remove=<?= $record->id ?>">
                                    <button type="button" class="btn btn-outline-danger btn-floating">
                                        <i class="ti-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>

    </main>
    <!-- end::main content -->

<?php require_once __DIR__ . '/layout/footer.php'; ?>