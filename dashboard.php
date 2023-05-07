<?php
include("head.php");
?>
<?php
include("navbar.php");

?>
<?php

                        $sql = "SELECT *, posts.id as posts_id 
						FROM posts 
						INNER JOIN users ON users.id = posts.user_id 
						INNER JOIN categories ON categories.id = posts.category_id 
						INNER JOIN makes on makes.id = categories.make_id WHERE users.id = ".$_GET["id"]; 
                        $result = $mysqli->query($sql);
                       
					   
?>
<?php
				// prepare and bind
$stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_GET["id"]);

// set parameters and execute
$stmt->execute();

$result2 = $stmt->get_result(); // get the mysqli result
$user = $result2->fetch_assoc(); // fetch data   
?>
<div class="container" style="padding-top: 10px;">

<div style="border-top-left-radius: 54px;border-top-right-radius: 54px;    background: linear-gradient(to bottom, #bbb, transparent);display: flex;padding:4px 0;margin-bottom: 24px;;align-items:center;text-decoration: none;font-family: verdana;font-size: 51px;color: #eaeaea;position:relative;">
	<a href="settings.php"><img class="user-img" src="uploads/users/<?php echo $user["avatar_url"]; ?>" style="background:#f1dd788f;padding:5.7px;box-sizing:border-box;;width: 84px;height:84px;border-radius: 50%;object-fit: cover;">
	</a><strong style="position:absolute;left:95px;color: #fff;    font-style: ;"><?php echo $user["email"]; ?></strong>
</div>
<style>
.post-item::first-child img {margin-left:0}
.post-item:hover .post-title {display:flex;}
.post-item:hover .edit {display:flex	;}
.post-item:hover .post-image {border-color:#4be37a!important	;}
.post-title {display: none;}
.edit {display: none;}
.no-posts {font-family: tahoma;text-align: center;padding: 12px 0;display:flex;flex-direction: column;align-items:center;}
.no-posts a {display: inline-block;color: #2aadde;}
.no-posts a:hover {text-decoration: none;}
.user-img:hover {background: none!important;}
</style>
<?php if($result->num_rows > 0) { ?>
<h2 style="font-family: arial, sans-serif;text-align: center;padding: 22px 0;">Postarile...</h2>
	<div class="dashboard-post-list" style="background-color: #f1dd786b;padding: 22px 0;flex-wrap:wrap;gap: 15px;border-radius: 58px;">
	
	<?php
	while($row = $result->fetch_assoc()){
                            
                        
						?>
						<style>
						.post-item:last-child {
							margin-right: 0;
						}
						</style>
		<div class="post-item">
			<div class="post-image" style="margin-bottom: 15px;position:relative;    border: 1px solid #2aadde;
    border-radius: 50%;
    padding: 7px;
    background: #fff;">
				<a href="view_post.php?id=<?php echo $row['posts_id']; ?>">
					<img src="uploads/posts/<?php echo $row['image_url']; ?>" style="border-radius:50%;;width: 276px;height:276px;object-fit:fill;">
					
				</a>
				<div class="post-title" style="position: absolute;top:0;   
    height: 100%;
    width: 100%;
    justify-content: center;
    align-items: center;">
				<h2 style="">
					<a href="view_post.php?id=<?php echo $row['posts_id']; ?>" style="border-radius: 22px;border:1px solid #fff;    line-height: 99%;display:inline-block;text-decoration: none;font-family: arial, sans-serif;font-size: 22px;background: #eaeaea;padding: 7.5px 13px;color: #c0c0c0;">
						<?php echo $row['make_name'] . " " . $row['model_name']; ?>
					</a>
				</h2>
			</div>
	<a href="edit.php?id=<?php echo $row['posts_id']; ?>"><?php if($_SESSION["user_id"] == $user["id"]) { ?><i style="position:absolute;top: 27px;
    right: 37px;
    font-size: 40px;color:red;" class="edit fa-sharp fa-regular fa-camera-security"></i><?php } ?></a>
			</div>
			
		</div>
		<?php
		}
		?>
	</div>
<?php } else echo "<div class='no-posts'><img style='width:125px;height:125px;margin: 44px 0;' src='middle-icons/content.png'><div>Nu sunt postari... <a href='create-post.php'>Creeaza-una</a></div>	</div>"; ?>
</div>

<?php
include "footer.php";
?>