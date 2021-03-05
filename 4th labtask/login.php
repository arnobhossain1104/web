<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Login</title>
</head>
<body>
    
    <table cellspacing="0" border="1" width="800px" align=center>

        <tr>

            <td>

                 <a href="public_home.php"><img src="logo.png" alt="Logo"></a>

            </td>

            <td align="right">

            <pre>    <a href="public_home.php">Home</a>|<a href="login.php">Login</a>|<a href="registration.php">Registration</a>   </pre>

            </td>

        </tr>

        <tr>
            
            <td colspan="2" height="300px" align="center">
                
                <form action="login.php" method="post">
                    
                    <fieldset align="left"style="font-family:Calibri;width:400px;height:200px;">
                        
                        <legend><b>LOGIN</b></legend>
                        
                        User Name&nbsp;:&nbsp;<input type="text" name="uname"><br><br>
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forget_password.php">Forgot Password</a>
                        
                    </fieldset>
                    
                </form>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>


<?php

if(isset($_REQUEST['submit']))
{
    
    if($_REQUEST['uname']==$_COOKIE['username'] and $_REQUEST['password']==$_COOKIE['password']){
        
        if(isset($_REQUEST['remember_me'])){
            setcookie('runame', $_REQUEST['uname'], time()+86400);
            setcookie('rpassword', $_REQUEST['password'], time()+86400);
        }
        
        session_start();
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['password'] = $_REQUEST['password'];
        header('location: dashboard.php');

    }
    
    else
    {
        echo "Invalid credentials!";
    }
    
}

?>