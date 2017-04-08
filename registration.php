<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="form_valid.js"></script>

  <title>Online CV Builder - Home</title>
  <link rel="stylesheet" href="styles.css" type="text/css" />
  <link rel="icon" href="images/favicon.ico" />
  
    </head>



  <body class="container-fluid" style="background-image:url('http://content.planit.com/cv/Texture_Gallery/Corian/imagepages/image16.html')">
<?php
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $country=$_POST['country'];
    $gender=$_POST['gender'];
    $LinkedIn=$_POST['LinkedIn'];
    $Skype=$_POST['Skype'];
    $address=$_POST['add'];
    $email=$_POST['email'];
    $mob_no=$_POST['mob_no'];
    $mob_no2=$_POST['mob_no2'];
    $marks10=$_POST['marks10'];
    $marks12=$_POST['marks12'];
    $board10=$_POST['board1'];
    $board12=$_POST['board2'];
    $Stream=$_POST['stream'];
    $UGPA=$_POST['UGPA'];
    $PGPA=$_POST['PGPA'];
    $ac=$_POST['ac'];
    $in=$_POST['in'];
    $re=$_POST['re'];
    $ao=$_POST['ao'];

?>
<div id="container">

    <header>
  <div class="width">
        <h1><a href="Actual_CV.html">CV Maker</a></h1>

        <nav>
  
          <ul>
          <li class="selected"><a href="Actual_CV.html">Home</a></li>
            <li><a href="services.html">Services</a>
           
            </li>
       <li><a href="about.html">About Us</a></li>
              
        
            <li><a href="contact.html">Contact</a></li>
            
       <li> <a href="loginform.php" class="button"/>login/Signup</a></li>   
        </ul>
  
          </nav>
        </div>

  <div class="clear"></div>

    <div id="slides-container" class="slides-container width">
        <div id="slides">
            <div>
                <br><br>
              <h2> Create beautiful, professional resumes in minutes, free.</h2>
              <h3>Easily create Beautiful and Awesome CV and Impress Everyone!</h3>
          </div>
    </div>
          
       
    </div>
    </header>
  <div id="body" class="width">
  <center><h2>Your CV</h2></center>



      <div id="container">
      <div id="body" class="width">
      <div class="width">
      <form style="background-image:url('http://content.planit.com/cv/Texture_Gallery/Corian/imagepages/image16.html')">
      <div class="form-group" >
      <table cellpadding="10"><center>
      <h3>Personal Information</h3>

      <tr><td><?php echo "$firstname" ?></td>
      <td><?php echo "$middlename" ?></td>
      <td><?php echo "$lastname" ?></td></tr>

      <tr><td><?php echo "$dob" ?></td></tr>

      <tr><td><?php echo "$country" ?></td></tr>

      <tr><td><?php echo "$gender" ?></td></tr>

      <tr><td><?php echo "$LinkedIn" ?></td></tr>

      <tr><td><?php echo "$Skype" ?></td></tr>

      <tr><td><?php echo "$address" ?></td></tr>

      <tr><td><?php echo "$email" ?></td></tr>

      <tr><td><?php echo "$mob_no" ?></td></tr>

      <tr><td><?php echo "$mob_no2" ?></td></tr>
      </center></table>

      <table cellpadding="10"><center>
      <h3>Educational Qualifications</h3>
      <tr><td><?php echo "$board10" ?></td></tr>
      <tr><td><?php echo "$marks10" ?></td></tr>

      <tr><td><?php echo "$board12" ?></td></tr>
      <tr><td><?php echo "$marks12" ?></td></tr>

      <tr><td><?php echo "$Stream" ?></td></tr>
      <tr><td><?php echo "$UGPA" ?></td></tr>
      <tr><td><?php echo "$PGPA" ?></td></tr>
      </center></table>

      <table cellpadding="10"><center>
      <h3>Achievements and Awards </h3>
      <tr><td><?php echo "$ac" ?></td></tr>
      </center></table>

      <table cellpadding="10"><center>
      <h3>Interests and Hobbies </h3>
      <tr><td><?php echo "$in" ?></td></tr>
      </center></table>

      <table cellpadding="10"><center>
      <h3>References </h3>
      <tr><td><?php echo "$re" ?></td></tr>
      </center></table>

      <table cellpadding="10"><center>
      <h3>Any other Details</h3>
      <tr><td><?php echo "$ao" ?></td></tr>
      </center></table>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Save as PDF" onClick="window.print()"> <br/></br>
      </form>
      </div>
      </div>
      </div>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="students";

    // Create connection
    $conn = new mysqli($servername, $username, $password , $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";


    $sql = "INSERT INTO CV VALUES ('$firstname', '$dob', '$email' , '$gender' , $marks10, $marks12, $UGPA)";

    if ($conn->query($sql) === TRUE) 
    {
        echo "\n\nNew record created successfully";
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>


<footer class="footer" style="text-align:right;"> Copyright &copy;<a href="https://www.facebook.com/arnab.saha">&nbspArnab Saha , Aditya Narayen Pandey</a></footer></br>


</body>
</html>