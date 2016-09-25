<?php
    //Connect to MySQL
require_once("../database/connect.php");
$quser = "";
$qpassword = "";
$panelColor = "";
if (isset($_POST["submitlogin"])) {	
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT UserID, LastName, FirstName, Address, Image, Contact, 
    TypeID, Password, Username, Email, DateRegistered FROM User WHERE Username='$username' AND Password='$password';";
    
    //Execute query
    $result = $conn->query($query);     //result set is returned in an associative array
    
    if ($result->num_rows) {		
      while ($row = mysqli_fetch_assoc($result)) {
         $qid = $row['UserID'];
         $qtd = $row['TypeID'];
         $quser = $row['Username'];
         $qpassword = $row['Password'];
     }
 }
 
 
 if ($_POST['username'] == $quser && 
    $_POST['password'] == $qpassword) {
    $_SESSION['loggedin'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $quser;

$userQuery = "select userid, lastname, firstname from user where userid='$qid'";

    //Execute query
    $result = $conn->query($userQuery);     //result set is returned in an associative array
    if ($result->num_rows) {
        while ($row = mysqli_fetch_assoc($result)) {  
            $qfirstname = $row['firstname'];
            $qlastname = $row['lastname'];
            $userid = $row['userid'];
        }
    }
    
    $_SESSION['displayName'] = $qfirstname." ".$qlastname;
    $_SESSION['firstName'] = $qfirstname;
    $_SESSION['lastName'] = $qlastname;
    $_SESSION['userid'] = $userid;
    $_SESSION['qtd'] = $qtd;

    if($qtd == '1'){
        ?>
        <script>
            window.location.href='../admin/profile.php';
        </script>
        <?php
    }elseif($qtd == '2'){
        ?>
        <script>
            window.location.href='../index.php';
        </script>
        <?php
    }elseif($qtd != '1'|| $qtd != '2') {
        session_destroy();
        ?>
        <script>
            alert('Invalid username.');
            window.location.href='../login.php';
        </script>
        <?php
    }
}else {
    session_destroy();
    ?>
    <script>
        alert('Incorrect username or password.');
        window.location.href='../login.php';
    </script>
    <?php
}
}
?>