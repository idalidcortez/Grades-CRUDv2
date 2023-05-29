<?php 

include 'connect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="index.css">


     <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">

      <img src="logo_ugc2.png" width="310" height="120"> <br>

    </div>

      <figure class="text-center"> <h1>Grades: Sixth Semester </h1><h2>Administrative informatics</h2> 
      </figure>

    </div>

    <body>

      <div class="container">

        <div class="box-part text-center">

        <button class="my-button my-2" align-items="center"> <a href= "student.php" class= text-light> Add student </a></button>

  
        </div>

    <table class="container text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Last name</th>
      <th scope="col">P1</th>
      <th scope="col">P2</th>
      <th scope="col">P3</th>
      <th scope="col">Final</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>

<?php
 
 $sql="Select * from `registry`";
 $result=mysqli_query($con,$sql);
 if($result){
  while($row=mysqli_fetch_assoc($result)){
   $id=$row['id'];
   $name=$row['name'];
   $last_name=$row['last_name'];
   $P1=$row['P1'];
   $P2=$row['P2'];
   $P3=$row['P3'];
   $final=$row['final'];

   echo '<tr>

      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$last_name.'</td>
      <td>'.$P1.'</td>
      <td>'.$P2.'</td>
      <td>'.$P3.'</td>
      <td>'.$final.'</td>
      <td> <button class="btn btn-primary"> <a href="update.php? updateid='.$id.'" class= "text-light">Update</a></button>
      <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'" class= "text-light">Delete</a></button> </td>
      
      </tr>';

  }

 }

?>



  </tbody>
</table> 
      </div>
    </body>
 
  </html>