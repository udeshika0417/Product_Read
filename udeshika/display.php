<?php

 include 'connect.php';
 
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
   </head>
  <body>
    <div class="container pt-5" >
      <h1>Read Products</h1>
     
      <button class="btn btn-primary my-5 float-right"><a href="addProduct.php" class="text-light">
          <i class="fa-solid fa-plus"></i>Create Product</a></button>
    
     
        <table class="table table-bordered m-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
   <?php 
   $sql= "SELECT * FROM udeshika_list_products";
   $result=mysqli_query($con,$sql);

   if($result)
   {
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['name'];
      $price=$row['price'];
      $category=$row['category'];

      echo '<tr>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td>'.$category.'</td>
      <td>
      <button class="border-0"><a class ="btn btn-primary" href="read.php?readid='.$id.'">
          <i class="fa-solid fa-eye" style="color:white"></i>Read</a></button>
      <button class="border-0"><a class ="btn btn-info" href="update.php?updateid='.$id.'">
      <i class="fa-solid fa-pen-to-square"></i>Edit</a></button>
      <button class="border-0 "><a class ="btn btn-danger" href="delete.php?deleteid='.$id.'">
      <i class="fa-solid fa-trash-can"></i>Delete</a></button>
    </td>
      </tr>';

    }
   }
   
   ?>
  

  </tbody>
</table>

    </div>
     </body>
</html>