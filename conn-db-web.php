<?php
$conn = mysqli_connect("localhost","root","","tokoberkah");
if($conn -> connect_errno){
    echo "tidak terhubung";
} else {
    echo "terhubung";
}
?>