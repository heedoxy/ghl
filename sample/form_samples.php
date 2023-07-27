<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php
$title = " ";
$main_url = ".php";
$list_url = "-list.php";

$edit = false;
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

                            <div class="form-group">
								<label for="exampleInputEmail1">آدرس ایمیل</label>
								<input type="email" class="form-control text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل" dir="ltr">
								<small id="emailHelp" class="form-text text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
								</small>
							</div>

                            <div class="form-group">
								<label for="exampleFormControlSelect1">نمونه انتخاب</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
                            
                            <div class="form-group">
								<label for="exampleFormControlTextarea1">ناحیه متنی نمونه</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>

                            <div class="form-group">
								<label for="exampleFormControlFile1">ورودی فایل نمونه</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    چک باکس
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" checked="">
                                    <label class="custom-control-label" for="customCheck">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</label>
                                </div>
                            </div>
                            <div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="customSwitch" checked="">
								<label class="custom-control-label" for="customSwitch">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</label>
							</div>

                            <div class="form-row">
								<div class="col-7">
									<input type="text" class="form-control" placeholder="شهر">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="استان">
								</div>
								<div class="col">
									<input type="text" class="form-control text-left" placeholder="کد پستی" dir="ltr">
								</div>
							</div>
                            <br>
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