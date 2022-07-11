
<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $status=$_POST['status'];

    $sql ="INSERT INTO udeshika_list_products (name,price,category,status) 
    values('$name','$price','$category','$status')";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
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
            <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" >
            
        </div>
        <div class="mb-3">
            <label >Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Price" autocomplete="off">
        </div>
        <div class="mb-3">
            <label >Category</label>
            <input type="text" class="form-control" name="category" placeholder="Enter Category" autocomplete="off">
        </div>
        <div class="mb-3">
            <label >Status</label>
            <input type="text" class="form-control" name="status" placeholder="Enter Status" autocomplete="off">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>