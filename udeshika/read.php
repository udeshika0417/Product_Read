<?php 
include 'connect.php';
$id=$_GET['readid'];
$sql="SELECT* FROM udeshika_list_products WHERE id=$id";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$category=$row['category'];
$status=$row['status'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-5">
        <form method="post">
        <div class="mb-3">
            <label >Name</label>
            <p class="form-control"> <?php echo $name;?></p>
            
        </div>
        <div class="mb-3">
            <label >Price</label>
            <p class="form-control"><?php echo $price;?></p>
        </div>
        <div class="mb-3">
            <label >Category</label>
            <p class="form-control"><?php echo $category;?></p>
        </div>
        <div class="mb-3">
            <label >Status</label>
            <p class="form-control"><?php echo $status;?></p>
        </div>
       
        <button class="btn btn-primary"><a class="text-light" href="display.php">Back</a></button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>