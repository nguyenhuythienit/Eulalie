<?php

function checkuser($user,$pass){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
}

function themtk($ten,$diachi,$email,$user,$pass){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_user (ten,diachi,email,user,pass)
    VALUES ('$ten', '$diachi', '$email','$user','$pass')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getall_tk(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}




// function themdm($tendm){
//     $conn=connectdb();
//     $sql = "INSERT INTO tbl_danhmuc (tendm)
//     VALUES ('".$tendm."')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
// }


// function updatedm($id,$tendm){
//     $conn=connectdb();
//     $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;

//     // Prepare statement
//     $stmt = $conn->prepare($sql);
  
//     // execute the query
//     $stmt->execute();
// }

// function getonedm($id){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

// function deldm($id){
//     $conn=connectdb();
//     $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;

//     // use exec() because no results are returned
//     $conn->exec($sql);
// }

// function getall_dm(){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq=$stmt->fetchAll();
//     return $kq;
// }

?>