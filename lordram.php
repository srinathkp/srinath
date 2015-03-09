<?php echo "<!doctype html>
<html>
<head>

<style>
body {
background-image: url(/srinath/What1-300x261.png);
background-color: #CCCCFF;
background-repeat: no-repeat;
background-position: 23% 14px;

}
table1{
margin:0 0 0 160px;
}
</style>
<title>
Log in &nbsp;|&nbsp;Calteta
</title>
</head>
<body>
<br />
<br /><br /><br />
<center><h3> 
<form method=post><table><tr><td>
<b>Username:</b></td>
<td>
<input type=text name=id > </td>
</tr>
<tr><td>
<b><font color=red>Password:</font></b></td>
<td>
<input type=password name=password></td>
</tr>
</table>
<br /><table><tr>
<i>Remember Me</i>
<input type=checkbox name=rem></tr>
</table>
<br /><table1 value=table1 name=table1>         <tr><td>

<input type=submit value=Log in name=login color=red></td>&nbsp;&nbsp;&nbsp;<td>

<input type=reset value=Reset name=reset></td>&nbsp;&nbsp;&nbsp;<td>
<b><em>Forgot password.? </em></b></td>

</tr></table>
</form><br /><br />Don't have an account?
<b><em>Sign up now </em></b>to discover amazing features

</tr>
</h3></center><br /><br /><br /><br /><br /><br /><br /><br /><marquee behavior=alternate bgcolor=skyblue scrollamount=20><font color=white><b><i><u>CaLtEtA</u></i></b></font></marquee>
</body>
</html>";
if($this->password=="pass")
   echo "ok"; ?>
