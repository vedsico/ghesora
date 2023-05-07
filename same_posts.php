<?php
include("head.php");
include("navbar.php");
$sql = "SELECT *, posts.id as posts_id, users.*, users.id as users_id
		FROM posts 
		INNER JOIN categories ON categories.id = posts.category_id 
		INNER JOIN makes on makes.id = categories.make_id 
		INNER JOIN users ON users.id = posts.user_id
		WHERE categories.make_id = " . $_GET["id"]; 
		$result = $mysqli->query($sql);
		
		$sql2 = "SELECT p.*, p.id as posts_id, COUNT(r.rating_number) as rating_num, FORMAT((SUM(r.rating_number) / COUNT(r.rating_number)),1) as average_rating FROM posts as p LEFT JOIN rating as r ON r.post_id = p.id WHERE p.id = 2 GROUP BY (r.post_id)";
                        $result2 = $mysqli->query($sql2);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="rate.css">
<div class="container" style="padding-top: 22px;    background: #ffffff8f;
    border-radius: 44px;">
<style>
.same-post a {color:#4be37a;text-decoration: none;padding: 11px 0;font-family: verdana, sans-serif;font-size: 15px;}
.same-post a:hover{color: #2aadde;}
.same-post img {border-radius: 50%;border: 1px solid transparent;padding: 7px;}
.same-post img:hover {border: 1px solid #2aadde}
</style>
<?php
	while($row = $result->fetch_assoc()){
                            
                        
						?>
						
<div class="same-post" style="display: flex;flex-direction:column;align-items:center;">
	<div>
		<h3>
			<a href="dashboard.php?id=<?php echo $row['users_id']; ?>">
				<?php echo $row['email']; ?>
			</a>
		</h3>
	</div>
	<div style="">
		<a href="view_post.php?id=<?php echo $row['posts_id']; ?>">
			<img src="uploads/posts/<?php echo $row['image_url']; ?> " style="height: 465px;object-fit: cover;width:465px;	">
		</a>
	</div>
</div>		
						
						
	<?php } ?>
	</div>
	
	<?php

?>

<?php include "footer.php"; ?>