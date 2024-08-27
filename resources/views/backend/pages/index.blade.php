@extends('layout.backend')

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Quản trị</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản trị</li>
                </ol>
            </div>
            {{-- <div class="col-md-7 col-4 align-self-center">
                <a href="javascript:void(0)" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Download Now</a>
            </div> --}}
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Tổng quản</h3>
                                        <h6 class="card-subtitle">A</h6> </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline">
                                            <li>
                                                <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Ample</h6> </li>
                                            <li>
                                                <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Pixel</h6> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="amp-pxl" style="height: 360px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Thống kê truy cập </h3>
                        <h6 class="card-subtitle">Thiết bị truy cập</h6>
                        <div id="visitor" style="height:290px; width:100%;"></div>
                    </div>
                    <div>
                        <hr class="m-t-0 m-b-0">
                    </div>
                    <div class="card-block text-center ">
                        <ul class="list-inline m-b-0">
                            <li>
                                <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Điện thoại di động</h6> </li>
                            <li>
                                <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Máy tính</h6> </li>
                            <li>
                                <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Máy tính bảng</h6> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <!-- Column -->
                <div class="card">
                    <img class="card-img-top" src="/backend/template/assets/images/background/profile-bg.jpg" alt="Card image cap">
                    <div class="card-block little-profile text-center">
                        <div class="pro-img"><img src="/backend/template/assets/images/users/author.jpg" alt="user" /></div>
                        <h3 class="m-b-0">Admin</h3>
                        <p>Website tin tức</p>
                        <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Theo dõi</a>
                        <div class="row text-center m-t-20">
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">999,999</h3><small>Bài đăng</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">999,999</h3><small>Người theo dõi</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">999,999</h3><small>Đang theo dõi</small></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card">
                    <div class="card-block bg-info">
                        <h4 class="text-white card-title">Liên hệ</h4>
                        <h6 class="card-subtitle text-white m-b-0 op-5">Xem các liên hệ tại</h6>
                    </div>
                    <div class="card-block">
                        <div class="message-box contact-box">
                            <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                            <div class="message-widget contact-widget">
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="/backend/template/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Admin</h5> <span class="mail-desc">admin@gmail.com</span></div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="/backend/template/assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Admin</h5> <span class="mail-desc">admin@gmail.com</span></div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Admin</h5> <span class="mail-desc">admin@gmail.com</span></div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="user-img"> <img src="/backend/template/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Admin</h5> <span class="mail-desc">admin@gmail.com</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Bài đăng</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Hồ sơ</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Cài đặt</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-block">
                                <div class="profiletimeline">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/backend/template/assets/images/users/1.jpg" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">Admin</a> <span class="sl-date">10 phút trước</span>
                                                <p>Chào mừng bạn đến với <a href="#"> Thế Giới 24h</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                                </div>
                                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">999,999 Bình luận</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 999,999 Tương tác</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/backend/template/assets/images/users/2.jpg" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">Admin</a> <span class="sl-date">10 phút trước</span>
                                                <p>Chào mừng bạn đến với <a href="#"> Thế Giới 24h</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                                </div>
                                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">999,999 Bình luận</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 999,999 Tương tác</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/backend/template/assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">Admin</a> <span class="sl-date">10 phút trước</span>
                                                <p>Chào mừng bạn đến với <a href="#"> Thế Giới 24h</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                                </div>
                                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">999,999 Bình luận</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 999,999 Tương tác</a> </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="/backend/template/assets/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">Admin</a> <span class="sl-date">10 phút trước</span>
                                                <p>Chào mừng bạn đến với <a href="#"> Thế Giới 24h</a></p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img2.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img3.jpg" alt="user" class="img-responsive radius"></div>
                                                    <div class="col-lg-3 col-md-6 m-b-20"><img src="/backend/template/assets/images/big/img4.jpg" alt="user" class="img-responsive radius"></div>
                                                </div>
                                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">999,999 Bình luận</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 999,999 Tương tác</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Họ và tên</strong>
                                        <br>
                                        <p class="text-muted">Admin</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Số điện thoại</strong>
                                        <br>
                                        <p class="text-muted">(+84) 123 456 789</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">admin@gmail.com</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Địa chỉ</strong>
                                        <br>
                                        <p class="text-muted">Việt Nam</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <h4 class="font-medium m-t-30">Skill Set</h4>
                                <hr>
                                <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Họ và tên</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Admin" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="admin@gmail.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số điện thoại</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tin nhắn</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Lựa chọn quốc gia</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>Anh Quốc</option>
                                                <option>Hàn Quốc</option>
                                                <option>Mỹ</option>
                                                <option>Canada</option>
                                                <option>Thái Lan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" disabled>Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
@stop