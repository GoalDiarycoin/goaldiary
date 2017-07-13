<?php
	function curPageName() 
	{
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	$page_url=curPageName();
	
?>

<?php
	$settings_qry=mysql_query("select * from settings where id=1");
	$row=mysql_fetch_array($settings_qry);
	
	$global_title=$row['title'];
	$global_default_status=$row['default_status'];
	$global_inactive_status=$row['inactive_status'];
	$global_ad_c_link=$row['ad_c_link'];
	$global_ad_r_link=$row['ad_r_link'];
	$global_ad_c_type=$row['ad_c_type'];
	$global_ad_r_type=$row['ad_r_type'];
	$global_ad_c_iframe=$row['ad_c_iframe'];
	$global_ad_r_iframe=$row['ad_r_iframe'];
	$global_about_us_breief=$row['about_us_breif'];
	$global_footer_plugin=$row['footer_plugin'];
	$global_facebook=$row['facebook'];
	$global_twitter=$row['twitter'];
	$global_googleplus=$row['googleplus'];
	$global_head_css_js=$row['head_css_js'];
	$global_footer_css_js=$row['footer_css_js'];
	
	$category_list_query_for_menu=mysql_query("select * from category order by name asc");
	
	$quicklinks_for_footer=mysql_query("select * from quicklinks order by name asc");
?>