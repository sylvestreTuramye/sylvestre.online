<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap JavaScript (including Popper.js) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <style>

        
.navigation{
        border-bottom: 1px  solid  silver;
        border-right: 1px  solid  silver;
        width: 80%;
        height: 6rem;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 5px  5px  5px   silver;
        margin: 3% 10%;
     }
    
     .content-left{
         display: flex;
         gap: 80px;
     }
     .content-left span:nth-child(1){
         color: rgb(72, 141, 219);
         font-size: 26px;
         display: flex;
     }
     .content-left span a{

text-decoration: none;
color: rgb(72, 141, 219);
}
     .content-left span:nth-child(2){
         color: silver;
         font-size: 16px;
     }
     .content-right p{       
         border: 1px solid  silver;
         width: 50px;
         height: 50px;
         border-radius: 50%;
         text-align: center;
     }
     .content-right{
         padding-left: 60%;
     }
     .main-content{
        width: 78%;
        margin: 1% 10%;
        border: 1px solid silver;
        margin-top: -2.5%;
     }


     .form{
            display: flex;
            padding-top: 17px;
          
        
        }
        .form input,select{
            border-radius: 5px;
            height: 30px;
            width: 300px;
            text-align: center;
        }
        .form button{
            background-color: rgb(45, 98, 212) ;
            color:white;
        }
        .footer{
            width:auto;
            background-color: skyblue;
            height: fit-content;
            text-align: center;

        }
        .main{
            border: 1px solid silver;
            margin: 3% 10%;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="navigation">
<div class="content-left">

<span><a href="index.php">Bookstore  CMS</a></span>
<span>Book CATEGORIES</span>
</div>
<div class="content-right">

<span><img src="user.png" width="30px" height="30px"></span>

</div>
</div>  
<div  class="main">
<div class="form">
    <?php
    $conn=new mysqli('localhost','root','','bookstore');
    $id=$_GET['edit_id'];
    $result=mysqli_query($conn,"SELECT * FROM book WHERE id='$id'");
    while($record=mysqli_fetch_array($result)):?>
<form action="update_code.php" method="POST">
    <input type="number" name="id" value="<?php echo $record['id']?>" hidden>
    <input type="text" name="title" value="<?php echo $record['title']?>" required>
    <input type="text" name="author" value="<?php echo $record['author']?>" required>
  <input type="text" name="type" value="<?php echo $record['type']?>" required>
    <button type="submit" name="update">UPDATE BOOK</button>
</form>
</div>
<div class="footer">
    &copy;sylestreturamye752@gmail.com
    <a href="https://stylvestreblog.com">TachOn Blog</a>
    </div>
</div>
<?php endwhile; ?>
</body>
</html>