<?php

//To check the method used to submit the form
if(!$_POST) exit;

//Get the data that was submitted
$natid = $_POST['natid'];
$uname = $_POST['uname'];
$uname = strtolower($uname);
$uname = ucwords($uname);
$uphone = $_POST['uphone'];
$zone = $_POST['zone'];
$email = $_POST['email'];
$password = $_POST['password'];
//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Sanitize the data that was submitted
$natid = clean($natid);
$uname = clean($uname);
$uname = str_replace("'","\'",$uname);
$uphone = clean($uphone);
$email = clean($email);
$zone = clean($zone);
$zone = str_replace("'","\'",$zone);
$password = md5($password);


//Include the database connection file
include 'connect.php';


//Prepare to insert records into the table
if (isset($_POST['submit'])) {
	# code...
  $target_dir = "dhobi/photos/";
  $target_file = $target_dir . basename($_FILES["uphoto"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	//Check for duplicate records
   $sql = "SELECT * FROM user WHERE natid = '$natid'";
	 $dup = mysqli_query($con,$sql);

	if (mysqli_num_rows($dup)>0) {
	
		//Redirect to Login page
    
		echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">You are already registered, please login</h1>';
    echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },2000);
         </script>";
         		exit();
         	} 

     else {


    $check = getimagesize($_FILES["uphoto"]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    $target_file = 'http://'.$_SERVER['SERVER_NAME'].'/laundry/'.$target_file;

    $ImageName = $_FILES['uphoto']['name'];
    $fileElementName = 'uphoto';
    $path = '../dhobi/photos/'; 
    $location = $path . $_FILES['uphoto']['name']; 
    move_uploaded_file($_FILES['uphoto']['tmp_name'], $location); 

    //If not duplicate 
    $insert = "INSERT INTO user (user_type,uname,uphone,zone,email,password,natid,photo) VALUES ('Dhobi','$uname','$uphone','$zone','$email','$password','$natid','$target_file')";


	//Insert values into the table
	$query = mysqli_query($con,$insert);
 
	 //Success message after inserting to database
  if ($query) {
    # code...
    
  //Redirect to Login page
  echo '<h1 style="color:green;text-align:center;margin-top:20%;font-family:Segoe UI">Account sucesssfully created</h1>';
  echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },1000);
         </script>";

          exit();
        }

  }
	

         //If the insert process did not execute
         if (!$query) {

         	//Get the database error message
         	echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">Error on submitting your details</h1>'.mysqli_error($con);
         	
         	//Redirect to Login page
         	echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },1500);
         </script>";
         } 
 
 	//Close the database connection
   	$close = mysqli_close($con);
   	return $close;
	}
 


else {
	//If the submit process fails to execute
	echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">An error occured</h1>';
	//Redirect to Login page
	echo "<script>
            setTimeout(function() {
               window.location = '../login.php';
            },1500);
         </script>";
	}

?>