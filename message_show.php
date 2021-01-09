<?php
include "public.php" ;
//接收html通过post方式传递过来的数据($_REQUEST:可以接收两种方式的数据 )
$sql = "SELECT * FROM message";
/* 定义变量sql, "SELECT * FROM abc"是一个SQL语句,意思是读取表abc中的数据 */
$jarr = array();
$res = $conn->query($sql);
if ($res->num_rows > 0) {// 输出数据
    while($row = $res->fetch_assoc()) {
        array_push($jarr,$row);
    }
} else {
    echo "0 结果";
}
echo $str=json_encode($jarr);//将数组进行json编码
?>