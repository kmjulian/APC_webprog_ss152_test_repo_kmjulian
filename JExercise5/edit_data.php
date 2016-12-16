<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
$Err = $first_nameErr = $last_nameErr = $nicknameErr = $emailErr = $user_cityErr = $genderErr = $mobileErr = $comentErr = "";
if(isset($_POST['btn-update'])){
 // variables for input data

  $fname = test_input($_POST["first_name"]);

  // check if fname only contains letters and numbers
  if (!preg_match("/^[a-zA-Z0-9 ]*$/", $first_name)) {
    $first_name = "Only letters and numbers allowed";
    $Err = "Err";
  }

  $lname = test_input($_POST["last_name"]);

  // check if lname only contains letters and numbers
  if (!preg_match("/^[a-zA-Z0-9 ]*$/",  $last_name)) {
     $last_name = "Only letters and numbers allowed";
    $Err = "Err";
  }

  $nickname = test_input($_POST["nickname"]);

  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
    $nicknameErr = "Only letters and white space allowed";
    $Err = "Err";
  }
  $email = test_input($_POST["email"]);

  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    $Err = "Err";
  }
   $user_city = test_input($_POST["user_city"]);

  // check if homeAdd only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$user_city)) {
    $user_cityErr = "Only letters and white space allowed";
    $Err = "Err";
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Input gender";
    $Err = "Err";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  $mobile = test_input($_POST["mobile"]);

  // check if phoneNum only contains numbers
  if (!preg_match("/^[0-9]*$/",$mobile)) {
    $mobileErr = "Only numbers are allowed";
    $Err = "Err";
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 // sql query for update data into database
  if($Err != "Err"){
    $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',nickname='$nickname',email='$email',user_city='$user_city',gender='$gender',mobile='$mobile',comment='$comment' WHERE user_id=".$_GET['edit_id'];
  }
  if(mysql_query($sql_query) && $Err != "Err"){
    ?>
    <script type="text/javascript">
    alert('Data Are Updated Successfully');
    window.location.href='index.php';
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
    <?php
  }
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
   <form method="post">
         <table align = "center">
           <tr align="center">
             <td><a href = "index.php"> Back to Main Page </a></td>
           </tr>

           <tr>
             <td>
               <input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required />
               <span class="error">* <br><?php echo first_nameErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required />
               <span class="error">* <br><?php echo $last_nameErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required />
               <span class="error">* <br><?php echo $nicknameErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
               <span class="error">* <br><?php echo $emailErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <input type="text" name="user_city" placeholder="Address" value="<?php echo $fetched_row['user_city']; ?>" />
               <span class="error">* <br><?php echo $user_cityErr;?></span>
             </td>
           </tr>

           </tr>
             <td>
               Gender:
               <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
               <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male
               <span class="error">* <br><?php echo $genderErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $fetched_row['mobile']; ?>" required />
               <span class="error">* <br><?php echo $mobileErr;?></span>
             </td>
           </tr>

           <tr>
             <td>
               <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $fetched_row['comment']; ?>"></textarea>
             </td>
           </tr>

           <td>
             <p><span class="error">* required field </span></p>
             <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
             <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
           </td>
           </tr>
         </table>
       </form>
    </div>
</div>

</center>
</body>
</html>
