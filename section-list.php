<?php
require_once __DIR__ . '/bootstrap/autoload.php';
$title = 'sections';
$main_url = "section.php";
$list_url = "section-list.php";

$section = new Section();
$list = $section->list();
$counter = 1;

if (posted('remove')) {
    $id = request('remove');
    $section->remove($id);
    success_removed();
    go($list_url);
}

?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <!-- begin::main content -->
    <main class="main-content">


        <button type="button" class="btn btn-primary btn-uppercase mb-3">
            <a href="<?= $main_url ?>" class="text-white">
                <i class="ti-plus m-l-5"></i>
                add new section
            </a>
        </button>

        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>created at</th>
                        <th>manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($record = $list->fetchObject()) {
                        ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td style="white-space: nowrap">
                                <?= $record->title ?>
                            </td>
                            <td>
                                <?= date("Y-m-d", strtotime($record->created_at))?>
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