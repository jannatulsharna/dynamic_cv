<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }
 ?>

<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<title>My CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="ea-light-grey">

<div class="ea-content ea-margin-top" style="max-width:1400px;">


  <div class="ea-row-padding">

    <div class="ea-third left-color">
    
      <div class=" ea-text-grey ea-card-4">
  
        <div class="ea-container">
          

          </div>

        

        

          
        
          <br>

        </div>
      </div><br>

    </div>

    <div class="ea-twothird">

      <?php 

      if(isset($_POST['addskill'])){
        $name = $_POST['sname'];
        $level = $_POST['level'];
        $des = $_POST['description'];
        

        $sql = "INSERT INTO `skills` (`id`, `skillname`, `skilllevel`, `Description`) VALUES (NULL, '$name', '$level','$des')";

        if (mysqli_query($conn, $sql)){
            echo "<script> window.location='MyCV.php'; </script>";
          }
          
        
        
      }    
      //print_r($_POST);
      ?>



    
      <div class="ea-container ea-card right-1  ea-margin-bottom">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-suitcase fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Add Skill</h2>
        <div class="ea-container">
          <form class="w3-container w3-card-4" method="post">
  <p>      
  <label class="w3-text-blue"><b>Skill Name</b></label>
  <input class="w3-input w3-border" name="sname" type="text"></p>
  <p>      
  <label class="w3-text-blue"><b>Skill Level</b></label>
  <input class="w3-input w3-border" name="level" type="number"></p>
  <p>      
  <label class="w3-text-blue"><b>Description</b></label>
  <input class="w3-input w3-border" name="description" type="text"></p>
  <p>      
  <button class="w3-btn w3-blue" name="addskill">Add</button></p>
</form>
          <hr>
        </div>  
  
 <br>
</body>
</html>
