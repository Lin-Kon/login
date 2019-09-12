<?php
// $connection = mysql_connect("localhost", "root", "");
// $db = mysql_select_db("theatershow", $connection);
// session_start();
// $user_check=$_SESSION['login_user'];
// $ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
// $row = mysql_fetch_assoc($ses_sql);
// $login_session =$row['username'];
// if(!isset($login_session)){
// mysql_close($connection); 
// header('Location: index.php'); 


    // include 'connection.php';
    // $conn = new loginDashboard();

    // // if ($mysqli->connect_errno) {
    // //     printf("Connect failed: %s\n", $mysqli->connect_error);
    // //     exit();
    // // }
    // // session_start();
    // if(isset($_SESSION))
    // {
    //     $user_check=$_SESSION['login_user'];
    //     $ses_sql=mysqli_query($conn->link, "select username from admin where username='$user_check'");
    //    $row = mysqli_fetch_assoc($ses_sql);
    //    $login_session =$row['username'];
    //    if(!isset($login_session)){
    //        mysql_close($connection); 
    //        header('Location: dashboard.php'); 
    //    }
    //    else{
    //    header('Location: index.php');
    //    echo "not logged in";
    //    }
    // }
    // else
    // {
    //     header('Location: index.php');
    //    echo "not logged in";

    // }

    // session_start();
 
define( "_SECRET_", "-set-this-to-make-sessions-secure-" );
define( "_KEY_", "sess_" . md5(__DIR__ . _SECRET_) );
 
class Session {
  public function __set($name,$value) {
    $_SESSION[_KEY_][$name] = $value;
  }
  public function & __get($name) {
    return $_SESSION[_KEY_][$name];
  }
  public function __toString() {
    return isset($_SESSION[_KEY_]) ? print_r($_SESSION[_KEY_],true) : "null";
  }
  public function __isset($name) {
    return isset($_SESSION[_KEY_][$name]);
  }
  public function __unset($name) {
    unset($_SESSION[_KEY_][$name]);
  }
  public function unsetAll() {
    unset($_SESSION[_KEY_]);
  }

?>