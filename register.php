<?php
include("head.php");
if(!empty($_SESSION["user_id"]) && is_numeric($_SESSION["user_id"])) {
	header("Location: dashboard.php?id=".$_SESSION["user_id"]);
}
?>
<?php
include("navbar.php");

?>
<style>
.container.login {height: calc(100% - 130px);display: flex;flex-direction: column;align-items:center;justify-content: center;padding-bottom: 222px;}
.login {font-family: arial;}
.login h1 {padding: 18px 0;}
.login form {display: flex;flex-direction: column;align-items:center;justify-content: center}
.login form input {height: 42px;font-size: calc(22px - 3px);padding: 22px 7px;border-radius: 11px;border: 1px solid #ccc;}
.mb-7{margin-bottom: 7px;}
.mb-15{margin-bottom: 15px;}
.login button {box-shadow: 0 5px 7px grey;border: 1px solid grey;background:#666;color: white;padding:  22px;font-size: 22px;cursor:pointer;border-radius:15px;}
.login button:hover{background: white;color:#666}
</style>
<div class="container login">
<h1>Inregistrare</h1>
<form method="post" action="register_post.php">
<input placeholder="Email" name="email" class="mb-7">
<input placeholder="Password" name="password" type="password" class="mb-15">
<button type="submit" value="Submit">Submit</button>
</form>
</div>

<?php
include "footer.php";
?>