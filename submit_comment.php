<?php
	include 'db.php';
	
	$user_id=$_POST['user_id'];
	$blog_id=$_POST['blog_id'];
	$comment=mysql_real_escape_string($_POST['comment']);
	
	mysql_query("insert into blog_comments (blog_id, user_id, comments) values ($blog_id, $user_id, '$comment')");
	
	$id=mysql_insert_id();
	
	$query="
		select
			(select users.name from users where id=blog_comments.user_id) as creator_name
			,timestamp
			,comments
			,(select users.image from users where id=blog_comments.user_id) as creator_image
		from
			blog_comments
		where 
			blog_id=$blog_id
		and
			id=$id
	";
	$details=mysql_query($query);
	$row=mysql_fetch_array($details);
?>

<li class="media">
	<div class="media-left">
		<a href="#" title="<?php echo $row['creator_name']; ?>">
			<?php if($row['creator_image']!="") { ?>
				<img style="max-width:111px; max-height:111px;" src="images/profiles/<?php echo $row['creator_image'];?>" alt="comment">
			<?php } else { ?>
				<img style="max-width:111px; max-height:111px;" src="images/user-46.png" alt="comment">
			<?php } ?>
		</a>
	</div>
	<div class="media-body">
		<div class="media-content">
			<h4 class="media-heading"><?php echo $row['creator_name']; ?></h4>
			<span><?php echo $row['timestamp']; ?></span>
			<p><?php echo $row['comments']; ?></p>
			<!--<a href="#" title="Reply">Reply</a>-->
		</div> 
	</div>
</li>