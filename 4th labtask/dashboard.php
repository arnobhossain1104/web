<?php

session_start();
$name = $_COOKIE['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Login</title>
</head>
<body>
    
    <table cellspacing="0" border="1" width="800px" align=center>

        <tr>

             <td width="200px">

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>

            </td>

            <td align="right">

                <pre>Logged in as <a href="profile.php"><?=$name?></a> | <a href="logout.php"> Logout</a>  </pre>
                
            </td>

        </tr>

        <tr>
            
            <td height="300px" valign="top">
                <pre><b>  Account</b><hr width=230px></pre>
                
                <ul>
                    
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="profile_picture.php"><li>Change Profile Picture</li></a>
                    <a href="change_password.php"><li>Change Password</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>
                              
            </td>
            
            <td valign="top" width=80%>
                <h3><b>Welcome  <u><?=$name?></u></b></h3>
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
