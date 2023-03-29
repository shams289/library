<?php include 'include/DB.php'; ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bookstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
      $my_variable = $_POST['my_variable'];
      $select = "SELECT * from library.book where book_id='".$my_variable."'";
      $name = mysqli_query($connection, $select);
      
      while ($row = mysqli_fetch_assoc($name)) {
        ?> 
        <div class="card">
        <div class="card-div">
            <h5 class="card-title"><?php echo $row['title'] ?></h5>
            <p class="card-text"><?php echo $row['description'] ?></p>
        </div>
        <!-- <img src="i/a2.jpg" alt="Card image"> -->
        <?php echo '<img src="data:image;base64,' . base64_encode($row['img']) . '">' ?>        <center>
            <form action=""> <button class="btn btn-primary">داگرتن</button>

            </form>
        </center>


    </div>
      
      
        <?php }
    ?>

    
  

</body>

</html>