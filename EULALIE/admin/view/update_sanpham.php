
            <style>
            body {
                box-sizing: border-box;
                font-family: sans-serif;
                font-size: 0.9vw;
                background-color: rgb(255, 255, 255);

            }

            .row {
                float: left;
                width: 100%;
                margin-left: 0.5px
            }


            .mb {
                margin-bottom: 30px;
            }

            .mb1 {
                margin-bottom: 5px;
            }

            /* .mr {
        margin-right: 2%;
    } */


            .headeradmin {
                background-color: beige;
                border: 1px #ccc solid;
                color: #ff0844;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 1.5vw;
                margin-top: 20px;
            }


            .formcontent {
                padding: 20px 0;
            }

            .formdslh table {
                width: 100%;
                border-collapse: collapse;
            }

            /*  */
            .formdslh table th:nth-child(1) {
                width: 5%;
                padding: 20px 0px;
                background-color: beige;

            }

            .formdslh table th:nth-child(2) {
                width: 5%;
                background-color: beige;


            }

            .formdslh table th:nth-child(3) {
                width: 5%;
                background-color: beige;


            }

            .formdslh table th:nth-child(4) {
                width: 15%;
                background-color: beige;


            }

            .formdslh table th:nth-child(5) {
                width: 15%;
                background-color: beige;


            }

            .formdslh table th:nth-child(6) {
                width: 0%;
                background-color: beige;


            }

            .formdslh table th:nth-child(7) {
                width: 5%;
                background-color: beige;


            }

            .formdslh table th:nth-child(8) {
                width: 19%;
                background-color: beige;


            }

            .formdslh table th:nth-child(9) {
                width: 1%;
                background-color: beige;


            }

            .formdslh table th:nth-child(10) {
                width: 5%;
                background-color: beige;


            }

            .formdslh table th:nth-child(11) {
                width: 7%;
                background-color: beige;


            }



            .formdslh table td {
                padding: 10px 20px;
                border: 1px #ccc solid;
                color: red;
            }

            .formdslh table th {
                padding: 10px 20px;
                border: 1px #ccc solid;
                color: #ff0844;
            }



            .ml {
                float: left;
                width: 45%;
                margin-left: 15px;
            }

            .mr {
                float: right;
                width: 30%;
            }



            .formcontent .ml .mb1 input[type="text"] {
                width: 50%;
                border: 1px #ccc solid;
                padding: 4px 10px;
                border-radius: 5px;
            }

            .formcontent .ml .mb1 input[type="text"]:hover {
                border: 1px rgb(247, 197, 197) solid;
            }

            .formcontent .mb1 input[type="submit"] {
                width: 7%;
                border: 1px #ccc solid;
                background-color: rgb(255, 250, 250);
                margin-left: 15px;
                padding: 4px 10px;
                border-radius: 5px;
                color: #ff0844;
            }

            .formcontent .mb1 input[type="submit"]:hover {
                border: 1px rgb(247, 197, 197) solid;
                background-color: beige;
            }

            .formcontent .mb1 input[type="button"] {
                width: 7%;
                border: 1px #ccc solid;
                background-color: rgb(255, 250, 250);
                margin-left: 15px;
                padding: 4px 10px;
                border-radius: 5px;
                color: #ff0844;
            }

            .formcontent .mb1 input[type="button"]:hover {
                border: 1px rgb(247, 197, 197) solid;
                background-color: beige;
            }
            </style>

                <div class="row">
                    <div class="row headeradmin">
                        QUẢN LÝ CẬP NHẬT SẢN PHẨM
                    </div>
                    <form action="admin.php?act=update_sanpham" method="post" enctype="multipart/form-data">
                        <div class="row formcontent">
                            <div class="row mb1 ml">
                                <div class="row mb1">
                                    Id Loại <br>
                                    <select name="idloai" id="">
                                        <?php
                                        $idloaicur=$kq1[0]['idloai'];
                                        foreach ($dsaddloai as $loai) {
                                            if($loai['idloai']==$idloaicur)
                                            # code...
                                            echo'
                                            <option value=" ' .$loai['idloai']. ' " selected > '   .$loai['tenloai'].  ' </option> ';   
                                            else 
                                            echo'
                                            <option value=" ' .$loai['idloai']. ' "> '   .$loai['tenloai'].  ' </option> ';   
                                            
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="row mb1">
                                    Tên Sản Phẩm <br>
                                    <input type="text" name="tensp" id="" value="<?=$kq1[0]['tensp']?>">
                                </div>
                                <div class="row mb1">
                                    Img<br>
                                    <input type="file" name="img" id="" value=""><img
                                        src="public/img/product/imgnb/<?=$kq1[0]['img']?>" width="80px">
                                </div>
                                <div class="row mb1">
                                    Giá<br>
                                    <input type="text" name="gia" id="" value="<?=$kq1[0]['dongia']?>">
                                </div>
                                <div class="row mb1">
                                    Số Lượt Xem<br>
                                    <input type="text" name="slx" id="" value="<?=$kq1[0]['soluotxem']?>">
                                </div>
                                <div class="row mb1">
                                    Mô Tả<br>
                                    <input type="text" name="tt" id="" value="<?=$kq1[0]['mota']?>">
                                </div>

                                <div class="row mb1">
                                    Ẩn Hiện<br>
                                    <input type="text" name="role" id="" value="<?=$kq1[0]['anhien']?>">
                                </div>
                                <input type="hidden" name="idsp" id="" value="<?=$kq1[0]['idsp']?>">
                            </div>
                            <div class="row mb1">
                                <input type="submit" value="Cập Nhật" name="capnhat">
                            </div>
                        </div>
                    </form>
                    <div class="row formcontent">
                        <div class="row formcontent">

                            <div class="row mb1 formdslh">
                                <table>
                                    <tr>
                                        <th>STT</th>
                                        <th>ID Loại</th>
                                        <th>ID SP</th>
                                        <th>Tên SP</th>
                                        <th>Img</th>
                                        <th>Đơn Giá</th>
                                        <th>Số Lượt Xem</th>
                                        <th>Mô Tả</th>
                                        <th>Ẩn Hiện</th>
                                        <th width="5px; !important">Tính Năng</th>
                                    </tr>
                                    <?php 
                        $i=1;
                            foreach ($dsaddsanpham as $sanpham) {
                                $sanpham['img2']="./public/img/product/imgnb/".$sanpham['img'];
                                if(is_file( $sanpham['img2'])){
                                    $sanpham['img']="<img src='".$sanpham['img2']."'  height='45px' > ";                         
                                   }else{
                                    $sanpham['img']="Không có ảnh";
                                   }
                            echo'        
                            <tr>
                                    <td>'.$i.'</td>   
                                    <td>'.$sanpham['idloai'].'</td>
                                    <td>'.$sanpham['idsp'].'</td>
                                    <td>'.$sanpham['tensp'].'</td>           
                                    <td>'.$sanpham['img'].'</td>           
                                    <td>'.$sanpham['dongia'].'</td>           
                                    <td>'.$sanpham['soluotxem'].'</td>           
                                    <td>'.$sanpham['mota'].'</td>                 
                                    <td>'.$sanpham['anhien'].'</td>           
                                    <td>
                                        <a href="admin.php?act=update_sanpham&idsp='.$sanpham['idsp'].' "><img src="https://cdn-icons-png.flaticon.com/128/2904/2904805.png" style="width:20px; height:20px;" ></a>
                                        <a href="admin.php?act=del_sp&idsp='.$sanpham['idsp'].' "><img src="https://cdn-icons-png.flaticon.com/128/7476/7476971.png" style="width:20px; height:20px;" ></a>
                                    </td>   
                            </tr>';
                            $i++;
                            }          
                        ?>
                                </table>
                            </div>

                        </div>
                        <div class="row mb1">
                            <a href="admin.php?act=addsanpham"> <input type="button" value="Thêm Mới"
                                    name="themmoi"></a>
                        </div>

                    </div>
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