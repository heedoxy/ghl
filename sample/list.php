<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>

<?php
$title = "";

$main_url = ".php";
$list_url = "-list.php";
$item = "";//flter as string for pegination

$class = new Database();

$search = 0;
if (isset($_GET['search'])) {
    $array[] = 0;
    $search = trim(request('search'));
    $result = request($search);

    while ($row = $result->fetch_object()) {
        $array[] = $row->id;

    }
}

$counter = 1;
if (!$search) {
    $result = $class->list();
}

// ----------- pages ------------------------------------------------------------------------------------------------
if (!isset ($_GET['page'])) {
    $page = 1;
} else {
    $page = request('page');
}
$results_per_page = 10;
$page_first_result = ($page - 1) * $results_per_page;
$number_of_result = $result->num_rows;
$number_of_page = ceil($number_of_result / $results_per_page);
$counter = ((($page - 1)) * 10) + 1;
if ($search) {
    $result = $class->search_limit_list($page_first_result, $results_per_page, $array);

} else {
    $result = $class->limit_list($page_first_result, $results_per_page);
}
// ----------- pages ------------------------------------------------------------------------------------------------

if (isset($_GET['remove'])) {
    $id = request('remove');
    $_SESSION['error'] = !$class->remove($id);
    header("Location: $list_url");
    return;
}

// ----------- change status -------------------------------------------------------------------------------------------
if (isset($_GET['status'])) {
    $id = request('status');
    $_SESSION['error'] = !$class->status($id);
    header("Location: $list_url");
    return;
}
// ----------- change status -------------------------------------------------------------------------------------------

// ----------- start html :) ------------------------------------------------------------------------------------------
?>

<?php require_once __DIR__ . '/layout/header.php'; ?>

    <!-- begin::main content -->
    <main class="main-content">

        <div class="card">
            <div class="card-body">
                <div class="col-md-3 m-t-b-20">
                    <button type="button" class="btn btn-primary btn-uppercase">
                        <a href="<?= $main_url ?>"><i class="ti-plus m-r-5"></i> ثبت </a>
                    </button>
                </div>

                <!-- ----------- search ---------------------------------------------------------------------- -->
                <form action="<?= $list_url ?>" method="get">
                    <div class="form-row justify-content-end">

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <input type="text" name="search" class="form-control"
                                       id="inlineFormInputGroup">
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">جست و جو</button>
                        </div>
                    </div>
                </form>

                <!-- ----------- search  ---------------------------------------------------------------------- -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>موقعیت</th>
                            <th>دفتر</th>
                            <th>سن</th>
                            <th>تاریخ شروع</th>
                            <th>حقوق</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php //while ($row = $result->fetchObject()) { ?>
                        <tr>
                            <td>روی هارپر</td>
                            <td>پشتیبان مشتری</td>
                            <td>تبریز</td>
                            <td>27</td>
                            <td>1391/01/25</td>
                            <td>112,000 تومان</td>
                        </tr>
                        <?php //}?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>موقعیت</th>
                            <th>دفتر</th>
                            <th>سن</th>
                            <th>تاریخ شروع</th>
                            <th>حقوق</th>
                        </tr>
                        </tfoot>
                    </table>
                    <?php require_once __DIR__ . './layout/pagination.php'; ?>
                </div>
            </div>
        </div>
    </main>
    <!-- end::main content -->
<?php require_once __DIR__ . '/layout/footer.php'; ?>