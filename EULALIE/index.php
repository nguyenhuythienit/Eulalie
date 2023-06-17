<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    include "site/model/connectdb.php"; 
    include "site/model/sanpham.php"; 
    include "site/view/header.php";
    include "site/model/tintuc.php"; 
    include "admin/model/binhluan.php";
    
    $spnb=getall_sp(3,"");
    $spyt=getall_sp(5,"");
    $spmoi=getall_sp(4,"");
    $spnam=getall_sp(13,"");
    $spnu=getall_sp(14,"");
    $dsbc=getall_sp();
    $spctnb=getall_ct(4,"");
    $dstintuc=getall_tintuc(4,"");

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){  
            case'addcart':
                

               

                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                  }
                  
                  if (isset($_GET['idsp'])) {
                  
                    $idsp = $_GET['idsp'];
                    


                 
                    $spct=getonesp($idsp);
                    
                     $spct=$spct['0'];
                  
                    extract($spct);

                   

                    $soluong = 1;
                    $found = false;
                  

                    $i = 0;
                    if (isset($_SESSION['cart']) && (count($_SESSION['cart'])) > 0) {
                      foreach ($_SESSION['cart'] as $item) {
                  
                        if ($item['id'] == $idsp) {
                          
                          $soluong += $item['soluong'];
                          $found = true;
                          $_SESSION['cart'][$i]['soluong'] = $soluong;
                  
                          break;
                        }
                        $i++;
                      }
                    }
                  
                  
                    if (!$found) {
                  
                      $new_product = ['id' => $idsp, 'img' => $img, 'tensp' => $tensp, 'dongia' => $dongia, 'soluong' =>
                       $soluong, 'mota' =>  $mota];
                      array_push($_SESSION['cart'], $new_product);
                    }
                  }
                  

                  

            
                  include "site/view/cart.php";   
                  
                
               
                break;
            case'delcart':
                if(isset($_SESSION['cart'])) 
                unset($_SESSION['cart']);
                header('location: index.php');
               
                // include "site/view/cart.php";
                break;
            case'delonecart':
                 if(isset($_SESSION['cart'])){
                    if(isset($_GET['id'])){
                        array_splice($_SESSION['cart'],$_GET['id'],1);
                    }else{
                        unset($_SESSION['cart']);
                    }
                }
            
                if(count($_SESSION['cart'])>0){
                    header('location: index.php?act=giohang');
                }else{
                    header('location: index.php');
                }
                break;    
            case'giohang':
                $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
                $sl= (isset($_GET['sl'])) ? $_GET['sl'] : 1;
                if($action == 'update'){
                    $_SESSION['cart'][$idsp]['sl'] = $sl;
                }
                include "site/view/cart.php";             
                break;
            case 'chitiet':
                $masp = $_GET['id'];
                $dsbl = getall_bl_byid($masp);
                include "site/view/chitiet.php";
                break;
            
                case 'addbl':
                    // nhận dữ liệu và xử lý
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $idsp = $_POST['idsp'];
                        $ten=$_POST['ten'];                         
                        $noidung=$_POST['noidung'];  
                        thembl($idsp,$ten,$noidung);
                        $masp = $_GET['id'];
                        $dsbl = getall_bl_byid($idsp);
                    }
                    include "site/view/chitiet.php";
                    break;
            case 'nuochoanam':  
                    include "site/view/nuochoanam.php";
                    break;
            case 'nuochoanu':
                    include "site/view/nuochoanu.php";
                    break;
            case 'lienhe':
                    include "site/view/lienhe.php";
                    break;
        case 'thanhtoan':
            
              


                if(isset($_POST['dat_hang'])){


                    die(print_r($_POST));
                }



                include "site/view/thanhtoan.php";
                break;
            case 'login';
            include "site/view/login.php";
            break;
            default: 
                include "site/view/home.php";
                break;
                

            }
     }else{
        include "site/view/home.php";
     }
        include "site/view/footer.php";