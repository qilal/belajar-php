<?php
$conn = mysqli_query("localhost","root","","tokoberkah");
if($conn -> connect_errno){
    echo "tidak terhubung";
} else {
    echo "terhubung"
}
?>