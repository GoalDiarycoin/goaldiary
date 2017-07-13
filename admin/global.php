<?php
	function curPageName() 
	{
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/admin")+7);
	}
	$page_url=curPageName();
?>

<?php
	$settings_qry=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($settings_qry);
	
	$global_title=$row['title'];
	$global_default_status=$row['default_status'];
	$global_inactive_status=$row['inactive_status'];

	$qry="select 
		name
		,id
		,(select count(*) from blog where status_id=status.id) as cnt
	from status order by name asc";
	$status_list_global=mysql_query($qry);
?>