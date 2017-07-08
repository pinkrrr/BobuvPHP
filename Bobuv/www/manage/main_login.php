<style>
.loginwindow
{
    margin-top: 0%;
    border-style: solid;
    border-color: black;
    font-family: Helvetica;
    border-collapse: collapse;
}
</style>

<div align="center" style="margin-top: 10%;">
<img src="../images/admin_logo.png"/><br /><br />
<table border="3" align="center" cellspacing="0" class="loginwindow">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Авторизация</strong></td>
</tr>
<tr>
<td>Логин:</td>
<td><input name="myusername" type="text" id="myusername"/></td>
</tr>
<tr>
<td>Пароль:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td colspan="2" style="text-align: right;"><input type="submit" name="Submit" value="Войти"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>