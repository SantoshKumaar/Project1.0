<?php
   function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
        $result;
        if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat))
        {
        $result = true;
    }
    else {
        $result = false;
    
    }
    return $result;
}
function invalidUid($username){
   
    // if (preg_match("[a-zA-Z0-9]*", $username)){
    $result = true; 
// }
// else {
//     $result = false;

// }
return $result;
}
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true; 
}
else {
    $result = false;

}
return $result;
}
function pwdMatch($pwd, $pwdrepeat){
    $result;
    if ($pwd !== $pwdrepeat){
    $result = true; 
}
else {
    $result = false;

}
return $result;
}
function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM `users` WHERE `userUid` = ? OR `usersEmail` = ?;";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed1+'$pwd'");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);
 
  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
        return $row;
  }

else {
    $result = false;
    return $result;
}
mysqli_stmt_close($stmt);

return $result;
}
function createuser($conn, $name, $email, $username, $pwd){echo "<script>alert(\"check\");</script>";
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location: ../signup.php?error=stmtfailed2");
      exit();
    }
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
  }