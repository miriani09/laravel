<?php
    require_once "database/dbconnection.php";
?>
<div style="width: 50%;height: 350px;border: solid 1px darkgray; margin: auto;margin-top: 20px">
    <form action="" method="post" style="margin: 35%; margin-top:20px">
        <label>
            Enter E-mail
            <input type="email" name="email">
        </label>
        <label>
            Enter Password
            <input type="password" name="password">
        </label>
        <label>
            <input type="submit" placeholder="Log In" name="submit">
        </label>
    </form>
</div>
