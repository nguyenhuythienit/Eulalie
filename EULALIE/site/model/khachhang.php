<?php

function thembl($noidung,$hoten,$idpro){
    $conn=connectdb();
    $sql = "INSERT INTO binhluan (noidung,ten,masp)
    VALUES ('$noidung','$hoten','$idpro')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_bl(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM binhluan");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_bl_sp($masp){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM binhluan WHERE masp=".$masp);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}


function delbl($mabl){
    $conn=connectdb();
    $sql = "DELETE FROM binhluan WHERE mabl=".$mabl;

    // use exec() because no results are returned
    $conn->exec($sql);
}



?>