<form id="login" action="index.php?action=controller" method="post">

    <p>
        Username: <input type="text" name="username" required/>
    </p>
    <p>
        Password: <input type="password" name="pass" required/>
    </p>
    <p>
    <label> Enter Image Text </label><br>
	<input name="captcha" type="text">
	<img src="includes/captcha.php" /><br>
	</p>
    <p>
        <input type="submit" name="login" value="login" />
    </p>

</form>