<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `registry` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
   $name=$row['name'];
   $last_name=$row['last_name'];
   $P1=$row['P1'];
   $P2=$row['P2'];
   $P3=$row['P3'];
   $final=$row['final'];

if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $last_name=$_POST['last_name'];
   $P1=$_POST['P1'];
   $P2=$_POST['P2'];
   $P3=$_POST['P3'];

   $sql="update `registry` set id=$id,name='$name',
   last_name='$last_name',P1='$P1',P2='$P2',P3='$P3'
   where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
    //echo "Data inserted successfully";
    header('location:index.php');
   }else{
     die(mysqli_error($con));
   }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

    <title>Students</title>
  </head>


          <div class= "margin">
        <div class="box-part text-center" >
      
      <div class= "image">
      
       <a href="index.php">
        
         <img src="back2.png" alt="Button Image" style="position: absolute; top: 70px; left: 450px;">
       
      </a>
      <img src="logo_ugc2.png" width="310" height="120"> <br>


    </div>

      <figure class="text-center"> <h1>Grades: Sixth Semester </h1><h2>Administrative informatics</h2> 
     

    </div>

    <body>
    <div class= "container my-5">
    
    <form method= "post">
  
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name= "name" autocomplete="off"
     value=<?php echo $name;?>>
    
   </div>

 <div class="form-group">
    <label >Last name</label>
    <input type="text" class="form-control" placeholder="Enter your last name" name= "last_name" autocomplete="off" value=<?php echo $last_name;?>>
    
  </div>

  <div class="form-group">
    <label >P1</label>
    <input type="number" class="form-control" placeholder="Enter P1 grade" name= "P1" autocomplete="off" value=<?php echo $P1;?>>
    
  </div>

 <div class="form-group">
    <label >P2</label>
    <input type="number" class="form-control" placeholder="Enter P2 grade" name= "P2" autocomplete="off"value=<?php echo $P2;?>>
    
  </div>

   <div class="form-group">
    <label >P3</label>
    <input type="number" class="form-control" placeholder="Enter P3 grade" name= "P3" autocomplete="off" value=<?php echo $P3;?>>
    
  </div>

<div class="box-part text-center" >
  <button type="submit" class="my-button" name= "submit">Update</button>
</form>

    </div>

  </body>
</html>