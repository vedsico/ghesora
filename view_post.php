<?php
include("head.php");

?>
<?php
include("navbar.php");

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="rate.css">
<?php

                        $sql = "SELECT *, users.id as users_id,users.*, makes.id as makes_id, users.id as users_id, posts.id as posts_id, categories.id as categories_id 
						FROM posts 
						INNER JOIN users ON users.id = posts.user_id 
						INNER JOIN categories ON categories.id = posts.category_id 
						INNER JOIN makes on makes.id = categories.make_id
						where posts.id = " . $_GET["id"]; 
						$sql2 = "SELECT p.*, p.id as posts_id, COUNT(r.rating_number) as rating_num, FORMAT((SUM(r.rating_number) / COUNT(r.rating_number)),1) as average_rating FROM posts as p LEFT JOIN rating as r ON r.post_id = p.id WHERE p.id = ".$_GET["id"]." GROUP BY (r.post_id)";
                        $result = $mysqli->query($sql);
						$result2 = $mysqli->query($sql2);
						//var_dump($result2);die();
						
						
						
						// insert views
						$sql3 = "UPDATE posts SET views = views + 1 WHERE id = " . $_GET["id"];
						$result3 = $mysqli->query($sql3);
                        
?>
<div>
<?php
	
	while($row = $result->fetch_assoc()){
                            
                        
						?>
	<div class="post-container" style="margin-top:15px;font-family: arial;">
	
		<div class="post-cover">
			<div class="post-user" style="display: flex;">
				<div class="post-short-title">
					<a href="same_posts.php?id=<?php echo $row['makes_id']; ?>" 
						class="btn-same-posts" 
						style="border-bottom: 6px solid #f1dd788f;font-size:24px;text-decoration:none;font-family:verdana,sans-serif;padding: 15px;background-color: #fafafa;color:#ccc;" 
						><?php echo $row['make_name'] . " " . $row["model_name"]; ?>
					</a>
					
				</div>
				<?php if(isset($_SESSION["user_id"])) { ?>
				<div style="display:flex;align-items:center;">
					<div style="margin-left: 22px;">
						<a style="text-decoration: none;" href="edit.php?id=<?php echo $_GET["id"]; ?>">
						<i class="fa-solid fa-wrench" style="border-radius: 50%;cursor:pointer;color:orange;border: 1px solid #ccc;padding: 7.5px;"></i>
					</a></div>
				</div>
	<?php } ?>
			</div>
			<?php if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] === $row["users_id"]) { ?>
			<div class="post-user">
				<div class="post-short-title">
					<a class="btn-same-posts" style="color: yellow;background: #666;" href="edit.php?id=<?php echo $row['posts_id']; ?>">
						Edit
					</a>
				</div>
			</div>
			
			<?php } ?>
			<div class="post-header">
				<div class="header-author-anchor">
					<div class="author-title" style="margin-right: 20px;">
						<a href="dashboard.php?id=<?php echo $row["users_id"] ?>" style="border-radius:%;padding:7px 17px;background:#2aadde;color: black;font-family: verdana;font-size: 14px;font-weight:bold;text-decoration: none;">
							<?php echo $row["email"] ?>
						</a>
					</div>
					<div class="author-icon">
						<a href="dashboard.php?id=<?php echo $row["users_id"] ?>">
							<img src="uploads/users/<?php echo $row["avatar_url"] ?>" style="height: 50px;width: 50px;object-fit:cover;border-radius: 50%;" />
						</a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="post-content" style="padding-top:30px;">
			<div class="content-first" style="padding: 15px 15px 15px 0;">
				<div>
					<img src="uploads/posts/<?php echo $row["image_url"]; ?>" style="border-radius:50%;;max-width:none;width: 464px;height: 464px;object-fit:fill;">
				</div>
			</div>
			<div class="content-last" style="padding-right: 30px;">
				<div class="content-title-description-detailed">
					<h1>Pe scurt</h1>
					<ul style="margin: 15px 0;">
						<li>Make: <strong><?php echo $row['make_name']; ?></strong></li>
						<li>Model: <strong><?php echo $row['model_name']; ?></strong></li>
						<li>Color: <strong><?php echo $row['color'] ?? "<em>nu are</em>"; ?></strong></li>
					</ul>
					<div class="rating-voting-election-s">
					<?php while($row2 = $result2->fetch_assoc()){ ?>
						<div class="rate">
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
				<div class="content-short-description" style="margin-top:30px;background:#fff;">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
				</div>
			</div>
		</div>
		<div class="post-description-detailed">
		<h1 style="margin-bottom: 15px;">Despre postare</h1>
			<p style="text-indent: 22px;background: #fff;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
		</div>
		<hr style="margin: 22px;">
		<div class="post-footer">
		<style>
				.footer-count, .footer-created-at {border-radius:22px;padding: 7px 11px;;display:flex;flex-direction:column;align-items:center;border: 1px solid #000;}
				.footer-count a, .footer-created-at a {text-decoration: none;color: green;}
				.count-title, .created-title {display:flex;flex-direction:column;align-items:center;}
			</style>
			<div class="footer-count">
			
				<div class="count-title">
					<a href="#" class="count-icon">
						Vizualizari
					</a>
					<a href="#" class="icon-font-awesome">
						<i class="fa fa-eye"></i>
					</a>
				</div>
				<div class="count-content">
					<a href="#">
						<?php echo $row['views']; ?>
					</a>
				</div>
			</div>
			<div class="footer-created-at">
				<div class="created-title">
					<a href="#" class="title-icon">
						Creata
					</a>
					<a href="#" class="icon-font-awesome">
						<i class="fa fa-clock"></i>
					</a>
				</div>
				<div class="created-content">
					<a href="#">
						<?php echo $row['created']; ?>
					</a>
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
	<style>.comments {font-family:arial;font-size: 15px;}</style>
	<div class="comments">
		<h3>No comments...</h3>
	</div>
</div>


<?php
include "footer.php";
?>