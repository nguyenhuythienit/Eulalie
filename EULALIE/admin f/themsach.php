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


#zindex {
    z-index: 1;
    position: absolute;
}

.img-circle {
    margin-right: 35px;
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
                        <li class="nav-item"><a href="admin.php?act=addloai" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
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

                        <li class="nav-item"><a href="admin.php?act=addsanpham" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link dropdown-toggle"><i class=""><img
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
                                <div class="admin-logo logo-wrap-pro">
                                    <a href=""><img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/log.png"
                                            alt="">
                                    </a>
                                </div>
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
                                        <li class="nav-item"><a href="" class="nav-link">Bình Luận</a>
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
                                            <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                                <div class="message-single-top">
                                                    <h1>Message</h1>
                                                </div>
                                                <ul class="message-menu">
                                                    <li>
                                                        <a href="">
                                                            <div class="message-img">
                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>ELALIE </h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="message-img">
                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/4.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="message-img">
                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="message-img">Advanda Cro
                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/2.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="message-view">
                                                    <a href="">View All Messages</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="" data-toggle="dropdown" role="button"
                                                aria-expanded="false" Advanda Cro class="nav-link dropdown-toggle"><i
                                                    class="" aria-hidden="true"></i></a>
                                            <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-checked-pro"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="notification-icon">
                                                                <span
                                                                    class="adminpro-icon adminpro-cloud-computing-down"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="notification-icon">
                                                                <span class="adminpro-icon adminpro-shield"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="notification-icon">
                                                                <span
                                                                    class="adminpro-icon adminpro-analytics-arrow"></span>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notification-view">
                                                    <a href="">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php" data-toggle="dropdown" role="button"
                                                aria-expanded="false" class="nav-link dropdown-toggle">
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


                                            <ul role="menu"
                                                class="dropdown-header-top author-log dropdown-menu animated flipInX">



                                                <li><a href=""><span
                                                            class="adminpro-icon adminpro-home-admin author-log-ic"></span>My
                                                        Account</a>
                                                </li>
                                                <li><a href=""><span
                                                            class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My
                                                        Profile</a>
                                                </li>
                                                <li><a href=""><span
                                                            class="adminpro-icon adminpro-money author-log-ic"></span>User
                                                        Billing</a>
                                                </li>
                                                <li><a href=""><span
                                                            class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href=""><span
                                                            class="adminpro-icon adminpro-locked author-log-ic"></span>Log
                                                        Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <div role="menu"
                                            class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
                                            <ul class="nav nav-tabs custon-set-tab">
                                                <li class="active"><a data-toggle="tab" href="Notes">Notes</a>
                                                </li>
                                                <li><a data-toggle="tab" href="Projects">Projects</a>
                                                </li>
                                                <li><a data-toggle="tab" href="Settings">Settings</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="Notes" class="tab-pane fade in active">
                                                    <div class="notes-area-wrap">
                                                        <div class="note-heading-indicate">
                                                            <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                            <p>You have 10 new message.</p>
                                                        </div>
                                                        <div class="notes-list-area notes-menu-scrollbar">
                                                            <ul class="notes-menu-list">
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/5.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/1(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/2(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/3(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/4(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/5.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/6.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/1(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/2(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="notes-list-flow">
                                                                            <div class="notes-img">
                                                                                <img src="./Dashboard v.1.0 _ Adminpro - Admin Template_files/3(1).jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="notes-content">
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more-or-less normal.
                                                                                </p>
                                                                                <span>Yesterday 2:45 pm</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="Projects" class="tab-pane fade">
                                                    <div class="projects-settings-wrap">
                                                        <div class="note-heading-indicate">
                                                            <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                            <p> You have 20 projects. 5 not completed.</p>
                                                        </div>
                                                        <div class="project-st-list-area project-st-menu-scrollbar">
                                                            <ul class="projects-st-menu-list">
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Web Development</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">1 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div class="projects-st-content">
                                                                                <p>Completion with: 28%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 28%;"
                                                                                        class="progress-bar progress-bar-danger">
                                                                                    </div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Software Development</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">2 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div
                                                                                class="projects-st-content project-rating-cl">
                                                                                <p>Completion with: 68%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 68%;"
                                                                                        class="progress-bar"></div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Graphic Design</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">3 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div class="projects-st-content">
                                                                                <p>Completion with: 78%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 78%;"
                                                                                        class="progress-bar"></div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Web Design</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">4 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div
                                                                                class="projects-st-content project-rating-cl2">
                                                                                <p>Completion with: 38%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 38%;"
                                                                                        class="progress-bar progress-bar-danger">
                                                                                    </div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Business Card</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">5 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div class="projects-st-content">
                                                                                <p>Completion with: 28%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 28%;"
                                                                                        class="progress-bar progress-bar-danger">
                                                                                    </div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Ecommerce Business</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">6 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div
                                                                                class="projects-st-content project-rating-cl">
                                                                                <p>Completion with: 68%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 68%;"
                                                                                        class="progress-bar"></div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Woocommerce Plugin</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">7 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div class="projects-st-content">
                                                                                <p>Completion with: 78%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 78%;"
                                                                                        class="progress-bar"></div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="">
                                                                        <div class="project-list-flow">
                                                                            <div class="projects-st-heading">
                                                                                <h2>Wordpress Theme</h2>
                                                                                <p> The point of using Lorem Ipsum is
                                                                                    that it has a more or less normal.
                                                                                </p>
                                                                                <span class="project-st-time">9 hours
                                                                                    ago</span>
                                                                            </div>
                                                                            <div
                                                                                class="projects-st-content project-rating-cl2">
                                                                                <p>Completion with: 38%</p>
                                                                                <div class="progress progress-mini">
                                                                                    <div style="width: 38%;"
                                                                                        class="progress-bar progress-bar-danger">
                                                                                    </div>
                                                                                </div>
                                                                                <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="Settings" class="tab-pane fade">
                                                    <div class="setting-panel-area">
                                                        <div class="note-heading-indicate">
                                                            <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                            <p> You have 20 Settings. 5 not completed.</p>
                                                        </div>
                                                        <ul class="setting-panel-list">
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Show notifications</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu"
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Disable Chat</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu"
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example3">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example3">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Enable history</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu"
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example4">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example4">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Show charts</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu"
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example7">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example7">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Update everyday</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu" checked=""
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example2">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example2">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Global search</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu" checked=""
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example6">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example6">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="checkbox-setting-pro">
                                                                    <div class="checkbox-title-pro">
                                                                        <h2>Offline users</h2>
                                                                        <div class="ts-custom-check">
                                                                            <div class="onoffswitch">
                                                                                <input type="checkbox"
                                                                                    name="collapsemenu" checked=""
                                                                                    class="onoffswitch-checkbox"
                                                                                    id="example5">
                                                                                <label class="onoffswitch-label"
                                                                                    for="example5">
                                                                                    <span
                                                                                        class="onoffswitch-inner"></span>
                                                                                    <span
                                                                                        class="onoffswitch-switch"></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================= -->

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <title>Giao diện trang thêm loại (admin)</title>
     <!-- Summernote css -->
     <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

<!-- Select2 -->
<link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

<!-- Jquery filer css -->
<link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
<link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

<!-- App css -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="../stylesheet" href="../plugins/switchery/switchery.min.css">
<script src="../assets/js/modernizr.min.js"></script>
<script>
    function getSubCat(val) {
        $.ajax({
            type: "POST",
            url: "get_subcategory.php",
            data: 'catid=' + val,
            success: function (data) {
                $("#subcategory").html(data);
            }
        });
    }
</script>
</head>
<style>
    
* {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.9vw;
}

.row {
    float: left;
    width: 100%; 
    margin-right: -10px;
    margin-left: -10px;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    padding-left: 10px;
    padding-right: 10px;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
    display: table;
    content: " ";
}
.headeradmin{
        background-color: beige;
        border: 1px #ccc solid;
        color:#ff0844;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1.5vw;
        margin-top: 20px;
}
.form-control {
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    padding: 7px 12px;
    height: 38px;
    max-width: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
}
.card-box {
    padding: 20px;
    border: 2px solid #f3f3f3;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    background-clip: padding-box;
    margin-bottom: 20px;
    background-color: #ffffff;
}
.note-editor.note-frame .note-editing-area .note-editable {
    padding: 10px;
    overflow: auto;
    color: #000;
    background-color: #fff;
}
.note-editor .note-editing-area .note-editable {
    outline: 0;
}
.mota{
    width: 100%;
}
</style>

<body>
    
<div class="row">
    <div class="row headeradmin">
        QUẢN LÝ TIN TỨC
    </div>
    <form action="">
    <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Thêm Bài Viết </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Bài Viết</a>
                                    </li>
                                    <li>
                                        <a href="#">Thêm Bài Viết</a>
                                    </li>
                                    <li class="active">
                                        Thêm Bài Viết
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-6">
                            <!---Success Message--->

                            <!---Error Message--->


                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form name="addpost" method="post" enctype="multipart/form-data">
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Tiêu Đề Bài Viết</label>
                                            <input type="text" class="form-control" id="posttitle" name="posttitle"
                                                placeholder="Enter title" required>
                                        </div>



                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Danh Mục</label>
                                            <select class="form-control" name="category" id="category"
                                                onChange="getSubCat(this.value);" required>
                                                <option value="">Chọn Danh Mục </option>
                                                <option value="2">Bollywood</option>
                                                <option value="3">Sports</option>
                                                <option value="5">Entertainment</option>
                                                <option value="6">Politics</option>
                                                <option value="7">Business</option>

                                            </select>
                                        </div>



                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Chi tiết bài đăng</b></h4>
                                                    <textarea id="mota" class="mota" name="postdescription" rows="10"
                                                        required></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
    
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Ảnh Nổi Bật</b></h4>
                                                    <input type="file" class="form-control" id="postimage"
                                                        name="postimage" required>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="submit"
                                            class="btn btn-success waves-effect waves-light">Lưu Và Đăng Bài</button>
                                        <button type="button"
                                            class="btn btn-danger waves-effect waves-light">Loại Bỏ</button>
                                    </form>
                                </div>
                            </div> <!-- end p-20 -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                    <script src="ckeditor5/ckeditor.js"></script>
                        <script>
                             ClassicEditor
                               .create( document.querySelector( '#mota' ) )                     
                                .then( editor => {                    
                                } )                    
                                 .catch( error => {                   
                                 console.error( error );                       
                                } );                                               
                                 </script>                                                  
                </div> <!-- container -->
                    
            </div> <!-- content -->

        </div>
    </form>
    
</div>

</body>
</html>


            <!-- =========================================== -->


            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Chart" href="">Home <span
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
                                        <li><a data-toggle="collapse" data-target="#demo" href="">Products <span
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
                                        <li><a data-toggle="collapse" data-target="#others" href="">Pages<span
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
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="">Interface
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
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="">Charts <span
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
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="">Tables <span
                                                    class=""></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="">Forms <span
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


            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a
                                                    href="https://colorlib.com/polygon/adminpro/adminpro/gradient-design/dashboard.html"><i
                                                        class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <!-- <li><a href="">Home</a> <span class="bread-slash">/</span> -->
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>