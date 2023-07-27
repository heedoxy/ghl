<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <main class="main-content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
							<select class="js-example-basic-single">
								<option>انتخاب</option>
								<option value="France">ایران</option>
								<option value="Brazil">برزیل</option>
								<option value="Yemen">ایتالیا</option>
								<option value="United States">آلمان</option>
								<option value="China">چین</option>
								<option value="Argentina">آرژانتین</option>
								<option value="Bulgaria">اسپانیا</option>
							</select>
						</div>
						<p>چند انتخاب</p>
						<div class="form-group">
							<select class="js-example-basic-single" multiple>
								<option>انتخاب</option>
								<option value="France">ایران</option>
								<option selected value="Brazil">برزیل</option>
								<option selected value="Yemen">ایتالیا</option>
								<option selected value="United States">آلمان</option>
								<option value="China">چین</option>
								<option value="Argentina">آرژانتین</option>
								<option value="Bulgaria">اسپانیا</option>
							</select>
						</div>

                        <h6 class="card-title">انتخاب‌گر بازه</h6>
						<p>تنظیم مقدار حداقل، حداکثر و شروع</p>
						<div class="form-group">
							<input type="text" id="demo_1">
						</div>
						<p>تنظیم نوع به double، مشخص کردن بازه، نمایش توری، افزودن پسوند «تومان»</p>
						<div class="form-group">
							<input type="text" id="demo_2">
						</div>
						<p>اضافه کردن قدم</p>
						<div class="form-group">
							<input type="text" id="demo_3">
						</div>

                        <div class="form-group">
							<label>تاریخ</label>
							<input type="text" data-input-mask="date" class="form-control text-left" placeholder="1398/12/05" dir="ltr">
						</div>
						<div class="form-group">
							<label>زمان</label>
							<input type="text" data-input-mask="time" class="form-control text-left" placeholder="12:25:45" dir="ltr">
						</div>
						<div class="form-group">
							<label>پول</label>
							<input type="text" data-input-mask="money" class="form-control text-left" placeholder="54,28" dir="ltr">
						</div>

                        
                        
                        <input type="text" name="date-picker-shamsi-list" class="form-control text-left hasDatepicker" dir="ltr" id="dp1690183516983">
                    

                        <div class="input-group clockpicker-autoclose-demo">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control text-left" value="18:30" dir="ltr">
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Plugin scripts -->
    <script src="public/vendors/bundle.js"></script>

    <!-- Select2 -->
    <script src="public/vendors/select2/js/select2.min.js"></script>
	<script src="public/js/examples/select2.js"></script>

	<!-- Range slider -->
	<script src="public/vendors/range-slider/js/ion.rangeSlider.min.js"></script>
	<script src="public/js/examples/range-slider.js"></script>

	<!-- Input mask -->
	<script src="public/vendors/input-mask/jquery.mask.js"></script>
	<script src="public/js/examples/input-mask.js"></script>

	<!-- Tagsinput -->
	<script src="public/vendors/tagsinput/bootstrap-tagsinput.js"></script>
	<script src="public/assets/js/examples/tagsinput.js"></script>

    <!-- Datepicker -->
	<script src="public/vendors/datepicker-jalali/bootstrap-datepicker.min.js"></script>
	<script src="public/vendors/datepicker-jalali/bootstrap-datepicker.fa.min.js"></script>
    <script src="public/js/examples/datepicker.js"></script>

    <!-- Clockpicker -->
	<script src="public/vendors/clockpicker/bootstrap-clockpicker.min.js"></script>
	<script src="public/js/examples/clockpicker.js"></script>

    <!-- App scripts -->
    <script src="public/js/app.js"></script>
    
    </body>

</html>