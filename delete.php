<?php
$conn=new mysqli('localhost','root','','bookstore');
$id=$_GET['delete_id'];
$result=mysqli_query($conn,"DELETE FROM book WHERE id='$id'");
if($result){
    header("location:index.php");
}
?>