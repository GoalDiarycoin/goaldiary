<?php	
	$query="
		select
			id
			,(select users.name from users where id=story_comments.user_id) as creator_name
			,timestamp
			,comments
			,story_id
			,(select title from story where id=story_comments.story_id) as story_title
			,(select users.image from users where id=story_comments.user_id) as creator_image
		from
			story_comments
		order by timestamp desc
	";
	$list = mysql_query($query);
?>