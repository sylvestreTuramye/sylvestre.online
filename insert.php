<?php
$conn=new mysqli('localhost','root','','bookstore');

if(isset($_POST['send'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $type=$_POST['type'];
    $result=mysqli_query($conn,"INSERT INTO book VALUES(NULL,'$title','$author','$type')");
         if($result){
    header("location:index.php");
}
}
?>