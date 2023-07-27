<?php require_once __DIR__ . '/bootstrap/autoload.php'; ?>
<?php require_once __DIR__ . '/layout/header.php'; ?>
    <main class="main-content">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-secondary" role="alert">
                            یک اعلان ساده ثانویه. بررسی کنید!
                        </div>

                        <div class="alert alert-success alert-with-border alert-dismissible" role="alert">
                            <i class="ti-check m-r-10"></i> یک اعلان ساده موفقیت. بررسی کنید!
                            <button type="button" class="close" data-dismiss="alert" aria-label="بستن">
                                <i class="ti-close"></i>
                            </button>
                        </div>

                        <div class="alert alert-danger" role="alert">
                            لورم ایپسوم متن ساختگی با تولید <a href="#" class="alert-link">یک لینک نمایشی</a> لورم ایپسوم متن ساختگی با تولید سادگی
                        </div>
                           
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row text-center justify-content-md-center">
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-dark btn-badge">
                                    اعلان ها <span class="badge badge-primary">4</span>
                                </button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-facebook btn-badge">
                                    <i class="fa fa-facebook-square m-r-5"></i> فیسبوک <span class="badge badge-light">16.5M</span>
                                </button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
								<span class="badge badge-primary">اولیه</span>
							</div>
                            <div class="col-md-3 m-t-b-20">
								<span class="badge badge-pill badge-primary">اولیه</span>
							</div>
                            <div class="col-md-12 m-t-b-20">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        لورم ایپسوم متن
                                        <span class="badge badge-danger badge-pill">1</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        لورم ایپسوم متن
                                        <span class="badge badge-warning badge-pill">14</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-primary">اولیه</button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-outline-primary">اولیه</button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-primary btn-rounded">اولیه</button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-outline-secondary btn-uppercase">
                                    <i class="ti-plus m-r-5"></i> ایجاد کاربر
                                </button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="ti-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-warning btn-floating">
                                    <i class="ti-settings"></i>
                                </button>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <button type="button" class="btn btn-outline-danger btn-floating">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                            
                            <div class="col-lg-3 col-sm-6 m-t-b-20">
                                <button class="btn btn-primary" type="button" disabled="">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span class="sr-only">در حال بارگذاری ...</span>
                                </button>
                            </div>
                            <div class="col-lg-3 col-sm-6 m-t-b-20">
                                <button class="btn btn-primary btn-floating" type="button" disabled="">
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <span class="sr-only">در حال بارگذاری ...</span>
                                </button>
                            </div>
                            <div class="col-lg-3 col-sm-6 m-t-b-20">
						<button class="btn btn-outline-primary" type="button" disabled="">
							<span class="spinner-grow spinner-grow-sm mr-2" role="status" aria-hidden="true"></span>
							در حال بارگذاری ...
						</button>
					</div>

                            <div class="col-md-3 m-t-b-20">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        اولیه
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(69px, 30px, 0px);">
                                        <a class="dropdown-item" href="#">عمل</a>
                                        <a class="dropdown-item" href="#">عمل دیگر</a>
                                        <a class="dropdown-item" href="#">یک عمل دیگر</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 m-t-b-20">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">اولیه</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">نمایش منوی کشویی</span>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 36px, 0px);">
                                        <a class="dropdown-item" href="#">عمل</a>
                                        <a class="dropdown-item" href="#">عمل دیگر</a>
                                        <a class="dropdown-item" href="#">یک عمل دیگر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">لینک جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h6 class="card-title">گروه دکمه ها</h6>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-dark">راست</button>
                                    <button type="button" class="btn btn-dark">وسط</button>
                                    <button type="button" class="btn btn-dark">چپ</button>
                                </div>
                                <hr>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-dark">1</button>
                                        <button type="button" class="btn btn-dark">2</button>
                                        <button type="button" class="btn btn-dark">3</button>
                                        <button type="button" class="btn btn-dark">4</button>
                                    </div>
                                    
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-dark">8</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-dark">1</button>
                                    <button type="button" class="btn btn-dark">2</button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            منوی کشویی
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">لینک منوی کشویی</a>
                                            <a class="dropdown-item" href="#">لینک منوی کشویی</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="btn-group-vertical mr-3 mb-3" role="group" aria-label="Vertical button group">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-cloud-upload"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-database"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-share"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2 <span class="sr-only">(کنونی)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">بعدی</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-rounded pagination-sm mb-3">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(کنونی)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                            <div class="col-md-12">
                                <nav aria-label="Page navigation example" class="mb-3">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">بعدی</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="accordion" id="accordionExample">

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link primary-font collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                آیتم قابل بستن 1
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <button class="btn btn-link primary-font collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                آیتم قابل بستن 2
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <button class="btn btn-link primary-font collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                آیتم قابل بستن 3
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="accordion accordion-primary custom-accordion">

                                    <div class="accordion-row open">
                                        <a href="#" class="accordion-header">
                                            <span>باز و بسته شونده 1</span>
                                            <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                            <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                        </a>
                                        <div class="accordion-body">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
                                            <div class="row m-b-15">
                                                <div class="col-md-6">
                                                    <img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
                                                </div>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                        </div>
                                    </div>

                                    <div class="accordion-row">
                                        <a href="#" class="accordion-header">
                                            <span>باز و بسته شونده 2</span>
                                            <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                            <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                        </a>
                                        <div class="accordion-body">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                        </div>
                                    </div>

                                    <div class="accordion-row">
                                    <a href="#" class="accordion-header">
                                        <span>باز و بسته شونده 3</span>
                                        <i class="accordion-status-icon close fa fa-chevron-up"></i>
                                        <i class="accordion-status-icon open fa fa-chevron-down"></i>
                                    </a>
                                    <div class="accordion-body">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
                                    </div>
                                </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>    
            </div>


        </div>


    </main>


<?php require_once __DIR__ . '/layout/footer.php'; ?>