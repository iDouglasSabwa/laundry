<?php

//To check the method used to submit the form
if(!$_POST) exit;

//Get the data that was submitted
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
$email = clean($email);
$password = trim($password);
$password = md5($password);

//Include the database connection file
include 'connect.php';


//Prepare to insert records into the the table
if (isset($_POST['submit'])) {
	# code...

	//Check for duplicate records
   $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	 $sql = mysqli_query($con,$sql);

	if (mysqli_num_rows($sql)>0) {


    foreach ($sql as $key => $value) {
      # code...
      $uid = $value['id'];
      $user_type = $value['user_type'];
      $uname = $value['uname'];
      $natid = $value['natid'];
      $uphone = $value['uphone'];
      $zone = $value['zone'];
      $email = $value['email'];
      $photo = $value['photo'];

      session_start();
      $_SESSION['uid'] = $uid;
      $_SESSION['user_type'] = $user_type;
      $_SESSION['uname'] = $uname;
      $_SESSION['natid'] = $natid;
      $_SESSION['uphone'] = $uphone;
      $_SESSION['zone'] = $zone;
      $_SESSION['email'] = $email;
      $_SESSION['photo'] = $photo;


    }
	
          //Redirect to Home page 

          if ($user_type == 'Client') {
            # code...
            echo "<script>
                  setTimeout(function() {
                     window.location = '../client/dhobis.php';
                  },0);
               </script>";
                 
          } elseif ($user_type == 'Dhobi') {

             echo "<script>
                  setTimeout(function() {
                     window.location = '../dhobi/order_requests.php?id=$uid';
                  },0);
               </script>";

          }

    
      } 

     else {

    //User does not exist
      echo '<h1 style="color:red;text-align:center;margin-top:20%;font-family:Segoe UI">Incorrect login details</h1>';
      echo  "<script>
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
	//Redirect to  Login page
	echo "<script>
            setTimeout(function() {
             window.location = '../login.php';
            },2000);
         </script>";
	}

?>