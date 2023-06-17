<?php
function themsp($tensp,$img,$gia,$iddm){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_sanpham (tensp,img,gia,iddm) VALUES ('".$tensp."','".$img."','".$gia."','".$iddm."')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }
// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tbl_sanpham SET tendm='".$tendm."' WHERE id=".$id;
//     // Prepare statement
//     $stmt = $conn->prepare($sql);
//     // execute the query
//     $stmt->execute();
// }
function getonesp($idSP){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE idSP=".$idSP);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}


// function getsp(){
//     $conn=connectdb();
//     $stmt = $conn->prepare($sql="SELECT * FROM tbl_sanpham WHERE special=1 order by id DESC");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }


function getall_sp($idloai=0){
    $conn=connectdb();
    $sql="SELECT * FROM sanpham WHERE 1";
    if($idloai>0) $sql.=" AND idloai=".$idloai;
    $sql.=" order by idsp DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_ct($idloai=0){
    $conn=connectdb();
    $stmt=$conn->prepare("SELECT * FROM sanpham limit 4");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt ->fetchALL();
    return $kq;
}
?>