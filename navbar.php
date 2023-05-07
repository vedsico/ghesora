<?php
include("db_config.php");
?>
<style>
	.header-language {
		
	}
	.header-language a {
		text-decoration: none;
		padding: 5px;
		min-width: 30px;
		color: #ffffff;
		text-align: center;
		font-size: 12px;
		line-height: 20px;
		font-family: tahoma, sans-serif;
		justify-content: center;
	}
	.header-language a:hover, .header-language li.active {
		background: #13c54b;
	}
	.header-top {
		display:flex;
		justify-content: space-between;
		align-items: center;
	}
	.header-top .bookmarks a:hover {
		color: white;/*#13c54b*/
		
	}
	.header-nav {
		    background: linear-gradient(to bottom, #f8f9fb 37%, transparent);
		height: 100px;
		justify-content: space-between;
		box-shadow: 0 5px 5px -5px rgba(0,0,0,.1)
	}
	.header-nav, .logo {
			display: flex;
	}
	.logo {
		align-items: center;
	}
	.logo img {
		margin-right: 4px;
	}
</style>
<div>
<div style="height: 100%;
    position: absolute;
    width: 100%;
    background: #ffffffbf;
    z-index: -1;"></div>
<?php

				// prepare and bind
$stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION["user_id"]);

// set parameters and execute
$stmt->execute();

$result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch data 
?>
	<div class="" style="height: 30px;width:100%;background:#4be37a;color:#fff;">
		<div class="container header-top">
			<div style="" class="header-language">
				<ul style="display:flex;">
				<li class="active">
						<a href="#">
							Ro
						</a>
						
					</li>
					<li class="">
						<a href="#">
							En
						</a>
					</li>
					<li>
						<a href="#">
							Fr
						</a>
					</li>
					<li>
						<a href="#">
							De
						</a>
					</li>
					<li>
						<a href="#">
							It
						</a>
					</li>
				</ul>
			</div>
			<style>
				.bookmarks a {
					color: white;
					text-decoration: none;
					font-family: tahoma, sans-serif;
					    font-size: 12px;
				}
				/*.bookmarks li::before {list-style-type: circle;}*/
				.dropdown-menu {display: none;z-index:55555;;padding-top:13px;border-radius: 12px;	}
				.dropdown:hover .dropdown-menu {width:100%;;display:block;position:absolute;color:black;}.dropdown {position:relative;}
				.dropdown:hover .dropdown-menu a {color: #000;justify-content: center;;}
				.dropdown .dropdown-menu a:hover {color:#2aadde;;}
				/*..dropdown-menu li:last-child {box-shadow: inset 0 	-7px 0  #000;}*/
				.dropdown-menu > div > div:hover{background: #ccc!important;color:#2aadde;}
				.dropdown-menu div.active {background: #ccc!important;color:#2aadde;}
			</style>
			<div class="bookmarks">
				<div style="display:flex;">
						<?php 
			
  
if(isset($_SESSION["user_id"])) {
	
			?>
			<div class="dropdown">
			
				<a style="align-items:center;" href="dashboard.php?id=<?php echo $_SESSION["user_id"];?>">
					<i style="font-size: 18px;color:#eaeaea;margin-right: 7.5px;" class="fa-solid fa-grid"></i><?php echo $user["email"] ?? ""; ?>
				</a>
				<div class="dropdown-menu">
				<div style="box-shadow: 0 13px 22px  #5e5757;">
					<div <?php if($_SERVER["SCRIPT_NAME"] == "/dashboard.php"){  ?>class="active" <?php } ?> style="padding:7px;background:#fff"><a  href="dashboard.php?id=<?php echo $_SESSION["user_id"];?>">Profil</a></div>
					<div <?php if($_SERVER["SCRIPT_NAME"] == "/create-post.php"){  ?>class="active" <?php } ?> style="padding:7px;background:#fff"><a href="create-post.php">Creare postare</a></div>
					<div style="padding:7px;background:#fff"><a href="#">Salvate</a></div>
					<div <?php if($_SERVER["SCRIPT_NAME"] == "/settings.php"){  ?>class="active" <?php } ?> style="padding:7px;background:#fff"><a href="settings.php">Setari</a></div>
					<div style="padding:7px;background:#fff"><a href="#">Adaugare cont</a></div>
				</div>
				</div>
			</div>
			<?php 
}  ?>
					</li>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.logo a {
		text-decoration: none;
		font-family: sans-serif;
	}
	.logo h3, .logo p {
		text-transform: uppercase;
	}
	.logo h3 {
		font-size: 24px;
		color: #303030;
		letter-spacing: 2px;
		    line-height: 0.9;
			padding: 3px 0px;
	}
	.logo p span {
		color: #b9b9b9;
		font-size: 12px;
		font-style: italic;
		background: #f8f9fb;
		display: inline-block;
		    padding: 3px 7px;
	}
</style>
<div class="header-nav">
	<div class="container header-nav">
		<div class="logo">
			<div>
				<a href="header.php" style="align-items: center;">
					<img src="middle-icons/logo.jpg" style="max-height: 56px;">
					<div style="display: flex;flex-direction: column;">
						<h3>Ghesora</h3>
						<p><span>Drive Portal<span></p>
					</div>
				</a>
			</div>
		</div>
		
		<div class="navbar">
		<style>
			.navbar-items a {
				    color: #808080;
					text-decoration: none;
					position: relative;
    display: block;
    padding: 0 5px;
    border-bottom: 3px solid transparent;
    font-size: 16px;
    line-height: 100px;
    height: 100px;
	font-size: 16px;
	font-family: tahoma, sans-serif;
			}
			.navbar-items a:hover {
				    color: #2aadde;
					    border-bottom-color: #2aadde;
			}
			.navbar-items a.active {
				    color: #2aadde!important;
					    border-bottom-color: #2aadde;
						font-weight: normal!important;
			}
			.ml25 {
				margin-left: 25px;
			}
		</style>
			<ul class="navbar-items">
			<li class="">
				<a <?php if($_SERVER["REQUEST_URI"] == "/header.php"){  ?>class="active" <?php } ?> href="header.php">
					Principala
				</a>
			</li>
			<?php if(empty($_SESSION["user_id"])){ ?>
			<li class="ml25">
				<a <?php if($_SERVER["REQUEST_URI"] == "/login.php"){  ?>class="active" <?php } ?> href="login.php">
					Logare
				</a>
			</li>
			<li class="ml25">
				<a <?php if($_SERVER["REQUEST_URI"] == "/register.php"){  ?>class="active" <?php } ?> style="color: 	#4be37a;font-weight:bold;" href="register.php">
					Inregistrare
				</a>
			</li>
			<?php } ?>
			<?php if(!empty($_SESSION["user_id"])){ ?>

			

			<li class="ml25">
				<a href="logout.php">
					Iesire
				</a>
			</li>
			<?php 
} ?>
		</ul>
		</div>
	</div>
</div>




<div class="navbar">
	<div class="navbar-container">
		
	</div>
</div>