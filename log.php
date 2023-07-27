<?php
require_once __DIR__ . '/bootstrap/autoload.php';
$title = 'Logs';
$main_url = "log.php";
$list_url = "log.php";

$user = new User();
$log = new Log();
$list = $log->list();
$counter = 1;
?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <!-- begin::main content -->
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>user</th>
                        <th>action</th>
                        <th>os</th>
                        <th>browser</th>
                        <th>ip</th>
                        <th>created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($record = $list->fetchObject()) {
                        ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td style="white-space: nowrap">
                                <?= $user->get($record->user_id)->name . ' ' . $user->get($record->user_id)->family ?>
                            </td>
                            <td style="white-space: nowrap">
                                <?= $record->action ?>
                            </td>
                            <td>
                                <?= $record->os ?>
                            </td>
                            <td>
                                <?= $record->browser ?>
                            </td>
                            <td>
                                <?= $record->ip ?>
                            </td>
                            <td>
                                <?= date("Y-m-d", strtotime($record->created_at))?>
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