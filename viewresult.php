<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store  System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap JavaScript (including Popper.js) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <style>
          .navigation{
            border-bottom: 1px  solid  silver;
            border-right : 1px  solid  silver;
            width:80%;
            gap: 60%;
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
        .content-right{       
            border: 1px solid  silver;
            width: 40px;
            height: 40px;
            font-size: 28px;
            border-radius: 50%;
            text-align: center;
        }
        .chapter button{
            background-color: rgb(45, 98, 212) ;
            color:white;
            font-size: 17px;
            border: 0px solid   rgb(72, 125, 223);
            border-radius: 5px;
            cursor: pointer;
            justify-content: center;

        }
.container{
        width: 80%;
        height: auto;
        padding: 0px 20px;
        margin-top: 2%;
        border-radius: 8px;
        gap: 200px;
        margin-left: 9%;
        display: flex;
        border: 1px  solid silver;
        align-items: center;

    }
    .action{
        display: flex;
        flex-direction: column;


    }
    .action span:nth-child(1){
        color: grey;
        padding-bottom: 20px;
        font-size: 20px;
    }
    .action span:nth-child(2){
        color:black;
        padding-bottom: 20px;
        font-size: 30px;
    }
    .action span:nth-child(3){
        color:skyblue;
        padding-bottom: 20px;
        font-size: 16px;
    }

    .progress{
        display: flex;
        
    }
    .circle{
        display: flex;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 5px  solid rgb(79, 127, 216) ;
        border-left-color: silver;
        
    
        }
        .parcentage{
            display: flex;
            font-size:60px;
            
        }
        .chapter button{
            background-color: rgb(45, 98, 212) ;
            color:white;
            font-size: 17px;
            border: 0px solid   rgb(72, 125, 223);
            border-radius: 5px;
            cursor: pointer;
            justify-content: center;

        }

    </style>
</head>
<body>
</div>
<div class="navigation">
            <div class="content-left">
                <span><a href="index.php">Bookstore  CMS</a></span>
                <span>Book CATEGORIES</span>
            </div>
            <div class="content-right">
                <span><img src="user.png" width="30px" height="30px"></span>
            </div>
            </div> 
<?php 
    $conn=new mysqli('localhost','root','','bookstore');
    if(isset($_POST['send'])){
    $saerch=$_POST['saerch'];
    $result=mysqli_query($conn,"SELECT * FROM book WHERE title LIKE'%$saerch%' OR author LIKE'%$saerch%' OR `type` LIKE'%$saerch%'");
    }
    while($fetch=mysqli_fetch_array($result)){
    ?>
<div class="container">
      <div class="action">
        <span>Action</span>
        <span><?php echo  $fetch['title']?></span> 
        <span><?php echo  $fetch['author']?></span>
          <p class="comment">
            <label >Comment</label> 
            <label ><a href="delete.php?delete_id=<?php echo $fetch['id']?>">Remove</a></label> 
            <label ><a href=" update.php?edit_id=<?php echo $fetch['id']?>">Edit</a></label> 
        </p>
        </div>
    

      <div  class="progrees">
        <span class="circle"></span>
        <span class="parcentage">75%</span>
        <span class="complite">completed </span>
      </div>
        <div class="chapter">
        <p>CURRENT CHAPTER</p>
        <p><?php echo  $fetch['type']?></p>
        <button>UPDATE PROGRESS</button>
          </div>
    </div>
    <?php } ?>
    
</body>
</html>