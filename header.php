<?php
include("head.php");

?>
<?php
include("navbar.php");

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="rate.css">
<?php

                        $sql = "SELECT *, posts.id as posts_id, categories.id as categories_id, users.*, users.id as users_id
						FROM posts 
						INNER JOIN users ON users.id = posts.user_id 
						INNER JOIN categories ON categories.id = posts.category_id 
						INNER JOIN makes on makes.id = categories.make_id 
						limit 1"; 
                        $result = $mysqli->query($sql);
						
						//var_dump($result2);die();
                        
?>
<div>
<?php
	
	while($row = $result->fetch_assoc()){
                            $sql2 = "SELECT p.*, p.id as posts_id, COUNT(r.rating_number) as rating_num, FORMAT((SUM(r.rating_number) / COUNT(r.rating_number)),1) as average_rating FROM posts as p LEFT JOIN rating as r ON r.post_id = p.id WHERE p.id = ". $row["posts_id"] ." GROUP BY (r.post_id)";
						$result2 = $mysqli->query($sql2);
                        
						?>
						<style>.post-container a {text-decoration: none;}</style>
	<div class="post-container" style="width: ;">
	
		<div class="post-cover">
			<div class="post-header" style="display: flex;align-items:center;justify-content:space-between;width:100%">
				<div class="header-author-anchor">
					<div class="author-icon">
						<a href="dashboard.php?id=<?php echo $row['users_id']; ?>" style="    margin-bottom: -1px;background-color:#f1dd788f;padding: 7.5px;border:1px solid #ccc;border-radius: 44px;border-bottom-right-radius: ;">
							<img src="uploads/users/<?php echo $row['avatar_url']; ?>" style="width: 50px;height:50px;object-fit:cover;border-radius:50%;" />
						</a>
					</div>
					<style>
						.author-title a:hover {
							text-decoration: underline;
						}
					</style>
					<div class="author-title" style="margin-left: 22px;">
						<a href="dashboard.php?id=<?php echo $row['users_id']; ?>" style="    border-top-left-radius: 19%;
    border-top-right-radius: 19%;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
padding:7px 17px;;background:#f1dd788f;font-family: arial;font-size:17px;color: grey;text-decoration: none;">
							<?php echo $row['email']; ?>
						</a>
					</div>
				</div>
				
				<div style="display: flex;justify-content:end;align-items:center;">
				<div style="display: flex;flex-direction:column;justify-content:space-between;">
						
						<style>.rate:not(:checked) > label {font-size: 28px;line-height:100%}.rate {height:auto;}</style>
						<div class="rating-voting-election-s">
					<?php while($row2 = $result2->fetch_assoc()){ ?>
						<div class="rate" style="padding-top: ;">
        <input type="radio" id="star5" name="rating" value="5" <?php echo ($row2['average_rating'] >= 5)?'checked="checked"':''; ?>>
        <label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4" <?php echo ($row2['average_rating'] >= 4)?'checked="checked"':''; ?>>
        <label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3" <?php echo ($row2['average_rating'] >= 3)?'checked="checked"':''; ?>>
        <label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2" <?php echo ($row2['average_rating'] >= 2)?'checked="checked"':''; ?>>
        <label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1" <?php echo ($row2['average_rating'] >= 1)?'checked="checked"':''; ?>>
        <label for="star1"></label>
    </div>
    <!--<div class="overall-rating">
        (Average Rating <span id="avgrat"><?php echo $row2['average_rating']; ?></span>
        Based on <span id="totalrat"><?php echo $row2['rating_num']; ?></span> rating)</span>
    </div>
	
    <div class="content"><?php echo $row2['content']; ?></div>-->
					<?php } ?>
					</div>
						</div>
						<i style="color: #ccc;margin: 0 11px;" class="fa-solid fa-calendar-days"></i>
						<span style="color: #000;text-decoration:none;font-family: tahoma;font-size: 12px;">2023-03-08, 12:04</span>
						</div>
			</div>
		</div>
		<div class="post-content" style="flex-direction: column;">
			<div class="content-first">
				<div>
				<div style="margin-left: ;background: #ffffff61;border-radius:48px;">
					<a href="view_post.php?id=<?php echo $row['posts_id']; ?>" style="">
					<style>
					.post-img:hover {background: #2aadde!important;}
					</style>
						<img class="post-img" src="uploads/posts/<?php echo $row['image_url']; ?>" style="width:465px;height:465px;object-fit:cover;padding:7.5px;background-color:#f1dd788f;border:1px solid #ccc;margin: 0 auto;border-radius: 50%;">
						
					</a>
					
</div>
<style>
					.cat a {color: green;background: lime;padding: 7px 15px;display: inline-block;border-radius: 11px;}
					</style>
					<div class="cat">
						<a href="#" title="Categoria">
							Blue
						</a>
					</div>
					<h2 style="color: black;padding-top: 11px;text-decoration:underline;"><a style="color: black;" href="view_post.php?id=<?php echo $row['posts_id']; ?>"><?php echo $row['make_name']; ?> 
						<?php echo $row['model_name']; ?></a></h2>
						
				</div>
			</div>
			<div class="content-last" style="font-family: verdana;">
				<div class="content-title-description-detailed">
					
				</div>


			</div>
		</div>
	</div>
	
	
	<script>
$(function() {
    $('.rate input').on('click', function(){
        var postID = <?php echo $row['posts_id']; ?>;
        var ratingNum = $(this).val();
		
        $.ajax({
            type: 'POST',
            url: 'rating.php',
            data: 'postID='+postID+'&ratingNum='+ratingNum,
            dataType: 'json',
            success : function(resp) {
                if(resp.status == 1){
                    $('#avgrat').text(resp.data.average_rating);
                    $('#totalrat').text(resp.data.rating_num);
					
                    alert('Thanks! You have rated '+ratingNum+' to "<?php echo $row['title']; ?>"');
                }else if(resp.status == 2){
                    alert('You have already rated to "<?php echo $row['title']; ?>"');
                }
				
                $( ".rate input" ).each(function() {
                    if($(this).val() <= parseInt(resp.data.average_rating)){
                        $(this).attr('checked', 'checked');
                    }else{
                        $(this).prop( "checked", false );
                    }
                });
            }
        });
    });
});
</script>
	
	
	
	<?php } ?>
</div>

<script src="index.js"></script>

<div class="container global">
	<style>
		.global a, .global h2 {font-size:500%;}
	</style>
	<?php
		$sql_posts_lists = "SELECT posts.*, posts.id as posts_id, makes.*, categories.*, users.id as users_id, users.* FROM posts
				INNER JOIN users ON users.id = posts.user_id 
				INNER JOIN categories ON categories.id = posts.category_id 
				INNER JOIN makes on makes.id = categories.make_id 
			"; 
		$result_posts_lists = $mysqli->query($sql_posts_lists);
	?>
	<div>
		<h2>Lista de postari globale</h2>
		<?php while($row = $result_posts_lists->fetch_assoc()) { ?>
		<div>
			<a href="view_post.php?id=<?php echo $row["posts_id"]; ?>"><?php echo $row["make_name"]; ?> <?php echo $row["model_name"]; ?></a>
			 de 
			<a style="font-size: 13px;display:inline-block;" href="dashboard.php?id=<?php echo $row["users_id"]; ?>"><?php echo $row["email"]; ?></a>
			
		</div>
		<?php } ?>
	</div>
</div>

<div class="container global">
	<?php
		$sql_users_lists = "SELECT * FROM users 
			"; 
		$result_users_lists = $mysqli->query($sql_users_lists);
	?>
	<div>
		<h2>Lista de utilizatori globali</h2>
		<?php while($row = $result_users_lists->fetch_assoc()) { ?>
		<div>
			<a href="dashboard.php?id=<?php echo $row["id"]; ?>"><?php echo $row["email"]; ?></a>
		</div>
		<?php } ?>
	</div>
</div>
<?php
include "footer.php";
?>