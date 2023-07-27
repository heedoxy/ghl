<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php
$main_url = "section.php";
$list_url = "section-list.php";

$section = new Section();

$id = 0;
$edit = false;
if (posted('edit')) {
    $edit = true;
    $id = get('edit');
    $record = $section->get($id);
    if (! $record) go($list_url);
}

$title = ($edit ? 'edit' : 'add new') . ' section ';

if (posted('submit')) {

    $title = request('title');
    $code = request('code');

    if ($edit) {
        $id = $section->edit($id, $title, $code);
        success_edited();
    } else {
        $id = $section->add( $title, $code);
        success_saved();
    }

    go($list_url);
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
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                       value="<?= ($edit) ? $record->title : '' ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="code">code</label>
                                <textarea type="text" class="form-control" name="code" id="code"
                                          rows="10"
                                          required><?= ($edit) ? $record->code : '' ?></textarea>
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