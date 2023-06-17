<?php

function checkuser($hoten,$matkhau){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE hoten='".$hoten."' AND matkhau='".$matkhau."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['chucvu'];
    else return 0;
}

?>