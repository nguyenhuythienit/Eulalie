<style>
#info {
    display: none;
}

.sidebar {
    z-index: 2;
    margin-top: -4px;
    position: absolute;
    background-color: #eee;
    width: 120px;
    /* border:none; */
    opacity: 1;
    border-radius: 2px;
    box-shadow: 0px 0px 1px 1px #999999;
}

.nav-item .admin-name {
    margin-right: 38px;
}

#zindex {
    z-index: 1;
    position: absolute;
}


.admin-name .main .menu-item h5 {
    text-align: center;
    width: 100px;
}


</style>
<script>
function show() {
    var showBtn = document.getElementById('info');
    showBtn.style.display = "block";
}

function hide() {
    var showBtn = document.getElementById('info');
    showBtn.style.display = "none";
}
</script>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3> <img src="./public/img/logo11.png" style="width:70px ; margin-top:-18px;"></h3>
                    <p>Developer</p>
                    <strong>AP+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="admin.php?act=trangchu" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/6268/6268612.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Trang Chủ</span>
                            </a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard.html"
                                    class="dropdown-item">Dashboard v.1</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard-2.html"
                                    class="dropdown-item">Dashboard v.2</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/analytics.html"
                                    class="dropdown-item">Analytics</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/widgets.html"
                                    class="dropdown-item">Widgets</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="admin.php?act=addloai" data-toggle="dropdown" role="button"
                                aria-expanded="false" class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/1525/1525239.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Loại</span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/inbox.html"
                                    class="dropdown-item">Inbox</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/view-mail.html"
                                    class="dropdown-item">View Mail</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/compose-mail.html"
                                    class="dropdown-item">Compose Mail</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="admin.php?act=addsanpham" data-toggle="dropdown" role="button"
                                aria-expanded="false" class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/5742/5742764.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Sản Phẩm</span>
                            </a>
                            <div role="menu"
                                class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html"
                                    class="dropdown-item">Login</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html"
                                    class="dropdown-item">Register</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html"
                                    class="dropdown-item">Captcha</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html"
                                    class="dropdown-item">Checkout</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html"
                                    class="dropdown-item">Contacts</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html"
                                    class="dropdown-item">Review</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html"
                                    class="dropdown-item">Order</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html"
                                    class="dropdown-item">Comment</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/8364/8364522.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Tin Tức</span>
                            </a>
                            <div role="menu"
                                class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html"
                                    class="dropdown-item">Login</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html"
                                    class="dropdown-item">Register</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html"
                                    class="dropdown-item">Captcha</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html"
                                    class="dropdown-item">Checkout</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html"
                                    class="dropdown-item">Contacts</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html"
                                    class="dropdown-item">Review</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html"
                                    class="dropdown-item">Order</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html"
                                    class="dropdown-item">Comment</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/2040/2040475.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Bình Luận</span>
                            </a>
                            <div role="menu"
                                class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html"
                                    class="dropdown-item">Login</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html"
                                    class="dropdown-item">Register</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html"
                                    class="dropdown-item">Captcha</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html"
                                    class="dropdown-item">Checkout</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html"
                                    class="dropdown-item">Contacts</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html"
                                    class="dropdown-item">Review</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html"
                                    class="dropdown-item">Order</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html"
                                    class="dropdown-item">Comment</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
                                        src="https://cdn-icons-png.flaticon.com/128/8848/8848642.png" alt=""
                                        style="width:15px; height:15px;"></i> <span class="mini-dn">Khách Hàng</span>
                            </a>
                            <div role="menu"
                                class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html"
                                    class="dropdown-item">Login</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html"
                                    class="dropdown-item">Register</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html"
                                    class="dropdown-item">Captcha</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html"
                                    class="dropdown-item">Checkout</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html"
                                    class="dropdown-item">Contacts</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html"
                                    class="dropdown-item">Review</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html"
                                    class="dropdown-item">Order</a>
                                <a href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html"
                                    class="dropdown-item">Comment</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse"
                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class=""> <img src="https://cdn-icons-png.flaticon.com/128/7915/7915015.png"
                                            alt="" style="width:30px; height:30px;"></i>
                                </button>

                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="admin.php?act=trangchu" class="nav-link">Trang
                                                Chủ</a>
                                        </li>
                                        <li class="nav-item"><a href="admin.php?act=addloai" class="nav-link">Loại</a>
                                        </li>
                                        <li class="nav-item"><a href="admin.php?act=addsanpham" class="nav-link">Sản
                                                Phẩm</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle">Tin Tức </a>
                                            <div role="menu" class="dropdown-menu animated flipInX">
                                                <a href="" class="dropdown-item">Company Info</a>
                                                <a href="" class="dropdown-item">Documentation</a>
                                                <a href="" class="dropdown-item">Expert Backend</a>
                                                <a href="" class="dropdown-item">Expert FrontEnd</a>
                                                <a href="" class="dropdown-item">Contact Support</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="admin.php?act=addbl" class="nav-link">Bình Luận</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle"></a>

                                        </li>
                                        <li class="nav-item"><a href="" data-toggle="dropdown" role="button"
                                                aria-expanded="false" Advanda Cro class="nav-link dropdown-toggle"><i
                                                    class="" aria-hidden="true"></i></a>

                                        </li>
                                        <li class="nav-item">
                                            <a href="" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle ">
                                                <!-- <span class=""></span> -->
                                                <span class="admin-name">
                                                    <img src="./public/img/logo11.png" width="50px" alt="user-img"
                                                        class="img-circle user-img" id="toggle_sidebar"
                                                        onmouseover="show()" onmouseout="hide()">
                                                    <div class="main" id="info">
                                                        <ul class="sidebar" id="info2" onmouseover="show()"
                                                            onmouseout="hide()">
                                                            <li class="menu-item">
                                                                <span style="margin-left:5px;">Hi ! Admin</span>

                                                            </li>
                                                            <br>
                                                            <li class="menu-item">
                                                                <a href="change-password.php"
                                                                    style="margin-left:4px;">Change
                                                                    Password</a>
                                                            </li>
                                                            <br>
                                                            <li class="menu-item">
                                                                <a href="index.php">
                                                                    <span class=""
                                                                        style="font-size:15px; margin-left:5px;">
                                                                        Logout </span></a>
                                                            </li>



                                                        </ul>
                                                    </div>

                                            </a>


                                        </li>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================= -->
            <style>
.main-admin{
    width: 95%;
    background-color:beige;
    margin:20px auto;
    padding:20px;
    border: 1px solid gray;
    border-radius: 5px;
}
table{
    margin:0px auto;
    width: 90%;
}
.main-admin h2{
    text-align: center;
}
</style>
<div class="main-admin">
    <h2>BÌNH LUẬN</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Họ Và Tên</th>
            <th>Hình</th>
            <th>Nội Dung Bình Luận</th>
        </tr>
        <?php
        // var_dump($kq);
        
        ?>

        <?php

            $i=1;
            foreach ($dsbl as $bl) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$bl['ten'].'</td>
                        <td>'.$bl['hinh'].'</td>
                        <td>'.$bl['noidung'].'</td>
                        <td><a href="admin.php?act=delbl&mabl='.$bl['mabl'].'">xóa</a></td>
                    </tr>';
                    $i++;
            }
        
        
        ?>
        
    </table>


</div>
        


            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Chart" href="">Trang Chủ<span
                                                    class=""></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard.html">Dashboard
                                                        v.1</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard-2.html">Dashboard
                                                        v.2</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/analytics.html">Analytics</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/widgets.html">Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="">Loại <span
                                                    class=""></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/inbox.html">Inbox</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/view-mail.html">View
                                                        Mail</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/compose-mail.html">Compose
                                                        Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="">Sản Phẩm<span
                                                    class=""></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/profile.html">Profile</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact-client.html">Contact
                                                        Client</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact-client-v.1.html">Contact
                                                        Client v.1</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/project-list.html">Project
                                                        List</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/project-details.html">Project
                                                        Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="">Tin Tức
                                                <span class=""></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/google-map.html">Google
                                                        Map</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/data-maps.html">Data
                                                        Maps</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/pdf-viewer.html">Pdf
                                                        Viewer</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/code-editor.html">Code
                                                        Editor</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tree-view.html">Tree
                                                        View</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/preloader.html">Preloader</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/images-cropper.html">Images
                                                        Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="">Bình Luận<span
                                                    class=""></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/bar-charts.html">Bar
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/line-charts.html">Line
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/area-charts.html">Area
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/rounded-chart.html">Rounded
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/c3.html">C3
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/sparkline.html">Sparkline
                                                        Charts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/peity.html">Peity
                                                        Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="">Khách Hàng
                                                <span class=""></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/static-table.html">Static
                                                        Table</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/data-table.html">Data
                                                        Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="">Bình Luận <span
                                                    class=""></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/basic-form-element.html">Basic
                                                        Form Elements</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/advance-form-element.html">Advanced
                                                        Form Elements</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/password-meter.html">Password
                                                        Meter</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/multi-upload.html">Multi
                                                        Upload</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tinymc.html">Text
                                                        Editor</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dual-list-box.html">Dual
                                                        List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="">App views <span
                                                    class=""></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/basic-form-element.html">Basic
                                                        Form Elements</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/advance-form-element.html">Advanced
                                                        Form Elements</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/password-meter.html">Password
                                                        Meter</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/multi-upload.html">Multi
                                                        Upload</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/tinymc.html">Text
                                                        Editor</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dual-list-box.html">Dual
                                                        List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="">Pages <span
                                                    class=""></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/login.html">Login</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/register.html">Register</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/captcha.html">Captcha</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/checkout.html">Checkout</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/contact.html">Contacts</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/review.html">Review</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/order.html">Order</a>
                                                </li>
                                                <li><a
                                                        href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>