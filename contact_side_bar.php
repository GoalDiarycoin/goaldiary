<?php 
	include 'contact_side_bar_action.php';
?>

<div class="col-md-5 col-sm-6 col-xs-6 contact-detail">
	<h3><span>Contact</span> Details</h3>
	<p style="text-align:justify;"><?php echo $contact_side_bar_about_us_breief; ?></p>
	<span><i class="fa fa-male"></i> &nbsp;<?php echo $contact_side_bar_admin_name; ?></span>
	<span><i class="icon icon-Phone2"></i><a href="tel:<?php echo $contact_side_bar_admin_phno; ?>"><?php echo $contact_side_bar_admin_phno; ?></a></span>
	<span><i class="icon icon-Mail"></i><a href="mailto:<?php echo $contact_side_bar_admin_mailid; ?>"><?php echo $contact_side_bar_admin_mailid; ?></a></span>
	<span><i class="icon icon-Pointer"></i><?php echo $contact_side_bar_street; ?>, <?php echo $contact_side_bar_city; ?>, <?php echo $contact_side_bar_state; ?>, <?php echo $contact_side_bar_pin; ?>, <?php echo $contact_side_bar_country; ?></span>
</div>