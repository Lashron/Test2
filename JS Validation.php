
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Login Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="myCSS.css">
    <script></script>
    <style>
    </style>
</head>

<body>
    <form align="center" name="LoginForm" action="ChristianSongs.php" onsubmit="return ValidateForm()" method="post">
        Login MyName: <input type="text" name="LoginName">
        Password: <input type="password" name="PwdName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<script>
function ValidateForm() {
  let Var_Login = document.forms["LoginForm"]["LoginName"].value;
  let Var_Pwd = document.forms["LoginForm"]["PwdName"].value;
  
  if (Var_Login == "") {
    alert("Please Enter Your Login name");
    return false;
  }else if(Var_Pwd == "") {
    alert("Please Enter Your Pwd name");
    return false;
  }
  if (Var_Login != "ravi" || Var_Pwd!="rosy"){
    alert("Please Enter correct Login and Password");
    return false;
  }

}
</script>