<?php
include "public.php" ;
//接收html通过post方式传递过来的数据($_REQUEST:可以接收两种方式的数据 )
$id= $_REQUEST['demo-id']; 
$name= $_REQUEST['demo-password'];
$str= $_REQUEST['demo-password'];
//写sql语句
$sql="INSERT INTO user (id,password) VALUES ('$name','$pass')";
//返回受影响的行数,没有值表示数据库没有变化
if ($conn->query($sql) === TRUE) {
    echo "添加成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
