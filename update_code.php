<?php
$conn=new mysqli('localhost','root','','bookstore');

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $type=$_POST['type'];
    $result=mysqli_query($conn,"UPDATE book SET title='$title', author='$author' , `type`='$type' WHERE id='$id'");
    if($result){
        header("location:index.php");
    }
}
?>