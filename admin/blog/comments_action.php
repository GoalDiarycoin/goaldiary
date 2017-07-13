<?php	
	$query="
		select
			id
			,(select users.name from users where id=blog_comments.user_id) as creator_name
			,timestamp
			,comments
			,blog_id
			,(select title from blog where id=blog_comments.blog_id) as blog_title
			,(select users.image from users where id=blog_comments.user_id) as creator_image
		from
			blog_comments
		order by timestamp desc
	";
	$list = mysql_query($query);
?>