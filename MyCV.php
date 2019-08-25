<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<title>My CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="ea-light-grey">

<!-- Page Container -->
<div class="ea-content ea-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="ea-row-padding">
  
    <!-- Left Column -->
    <div class="ea-third left-color">
    
      <div class=" ea-text-grey ea-card-4">
        <div class="ea-display-container">
          <img src="resumepic.jpg" style="padding-left: 20px; width:200px; height: 180px; " alt="Avatar">
          <br><br><br><br>
          <div class="ea-display-bottomleft ea-container ea-text-grey">
            <h2>Jannatul Ferdousi</h2>
          </div>
        </div>
        <div class="ea-container">
          <p><i class="fa fa-briefcase fa-fw ea-margin-right ea-large ea-text-teal"></i>Web Developer</p>
          <p><i class="fa fa-home fa-fw ea-margin-right ea-large ea-text-teal"></i>Dhaka, Bangladesh</p>
          <p><i class="fa fa-envelope fa-fw ea-margin-right ea-large ea-text-teal"></i>jannatul35-1950@diu.edu.bd</p>
          <p><i class="fa fa-phone fa-fw ea-margin-right ea-large ea-text-teal"></i>017.....</p>
          <hr>

          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Software Skills</b></p>
          <p>PowerPoint</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>

          </div>

          <p>MS Word</p>
          <div class="ea-light-grey ea-round-xlarge ea-small">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>

        

          <br>

          <p class="ea-large"><b><i class="fa fa-asterisk fa-fw ea-margin-right ea-text-teal"></i>Skills</b><a href="add.php"><i class="fa fa-plus fa-fw ea-right ea-large ea-text-teal"></i></a></p>
          <?php
          
          $sql = "SELECT * FROM `skills`" ;
          $result = mysqli_query($conn, $sql);

             while($row = mysqli_fetch_assoc($result)) {
                 echo "<p>id: " . $row["id"]. " - skills: " . $row["skillname"]. " " . $row["skilllevel"]."</p>";
                 ?>
                 <div class="ea-light-grey ea-round-xlarge ea-small">
                  <?php 


                  $sklevel = $row["skilllevel"] /10;
                  $count = 0;
                    for ($i=0; $i<10; $i++) { 
                  ?>
                  <span class="fa fa-star <?php if($count <$sklevel){ echo('checked'); $count++;} ?>"></span>

                  <?php
                    }


                   ?>
          </div>

            
          
          <?php 
                }    

                   

          ?>

          <br>
          <p class="ea-large ea-text-theme"><b><i class="fa fa-globe fa-fw ea-margin-right ea-text-teal"></i>Description</b></p>
            <?php
              $des = $_POST['description'];
            ?>

            <input type="textarea" value="<?php echo $des; ?>">

          <p class="ea-large ea-text-theme"><b><i class="fa fa-globe fa-fw ea-margin-right ea-text-teal"></i>Languages Skills</b></p>
          <p>English</p>
          <div class="ea-light-grey ea-round-xlarge">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </div>
          <p>Bengali (Mother Tongue)</p>
          <div class="ea-light-grey ea-round-xlarge">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p>Hindi</p>
          <div class="ea-light-grey ea-round-xlarge">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
        
          <br>

        </div>
      </div><br>
    </div>

    <div class="ea-twothird">
    

      <div class="ea-container right-1 ea-card ea-margin-bottom">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-certificate fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Education</h2>
        <div class="ea-container">
          <h5 class="ea-text-yellow"><b>B.Sc.</b></h5>
          <h6 class="ea-text-white"><i class="fa fa-calendar fa-fw ea-margin-right"></i>Daffodil International University (2017-2021)</h6>
          <p class="ea-text-white">Department of Software Engineering</p>
          <p class="ea-text-white">Ongoing 8th Semester</p>
          <hr>
        </div>
        <div class="ea-container">
          <h5 class="ea-text-white"><b>H.S.C</b></h5>
          <h6 class="ea-text-white"><i class="fa fa-calendar fa-fw ea-margin-right"></i>Tangail Govt. Collage(2013 - 2015)</h6>
          <p class="ea-text-white">Group: Science</p>
          <p class="ea-text-white">Board: Dhaka</p>
          <p class="ea-text-white">GPA: 5.00 out of 5.00</p>
          <hr>
        </div>
        <div class="ea-container">
          <h5 class="ea-text-yellow"><b>S.S.C</b></h5>
          <h6 class="ea-text-teal"><i class="fa fa-calendar fa-fw ea-margin-right"></i>Nagarbari High School</h6>
          <p class="ea-text-white">Group: Science</p>
          <p class="ea-text-white">Board: Dhaka</p>
          <p class="ea-text-white">GPA: 5.00 out of 5.00</p>
          <br>
        </div>
      </div>

      <br>

      <div class="ea-container right-1 ea-card ">
        <h2 class="ea-text-grey ea-padding-16"><i class="fa fa-envelope fa-fw ea-margin-right ea-xxlarge ea-text-teal"></i>Reference</h2>
        <div class="ea-container int-css">
          <p class="ea-text-white">Professor Dr. Touhid Bhuiyan</p>
          <p class="ea-text-white">Professor & Head</p>
          <p class="ea-text-white">Department of Software Engineering</p>
          <p class="ea-text-white">Daffodil International University</p>
          <p class="ea-text-white">Cell-Phone: +8801847140016</p>
          <p class="ea-text-white">Email: t.bhuiyan@daffodilvarsity.edu.bd</p>

        </div>
      </div>
      <br>






    <!-- End Right Column -->
    </div>


    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="ea-container ea-footer ea-center ea-margin-top">
  <p>####Find me on####</p>
  <a href="https://www.facebook.com/jannatul.shorna333" target="_blank" class="fa fa-facebook ea-hover-opacity" style="width: 30px"></a> 
  
</footer>
 <br>
</body>
</html>
