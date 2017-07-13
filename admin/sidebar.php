<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="<?php if($page_url=='' || $page_url=='index.php') {echo 'active';}?>">
                <a href="<?php echo $site_root; ?>/index.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
			
			
			<li class="treeview <?php if($page_url=='category/add.php' || $page_url=='category/edit.php' || $page_url=='category/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Category</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/category/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/category/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='subcategory/add.php' || $page_url=='subcategory/edit.php' || $page_url=='subcategory/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Sub Category</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/subcategory/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/subcategory/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li> 
			<li class="treeview <?php if($page_url=='blog/add.php' || $page_url=='blog/edit.php' || $page_url=='blog/list.php' || $page_url=='blog/list_by_users.php' || $page_url=='blog/my_tasks.php' || $page_url=='blog/moderated_tasks.php' || $page_url=='blog/comments.php' || $page_url=='blog/view.php' || $page_url=='blog/edit_user.php' ) {echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Blog</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" >
                    <li><a href="<?php echo $site_root; ?>/blog/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
                    <li><a href="<?php echo $site_root; ?>/blog/list.php"><i class="fa fa-angle-double-right"></i>List All</a></li>
					<li><a href="<?php echo $site_root; ?>/blog/comments.php"><i class="fa fa-angle-double-right"></i>Comments</a></li>
					<?php while($row = mysql_fetch_array($status_list_global)) { ?>
						<li><a href="<?php echo $site_root; ?>/blog/list.php?status_id=<?php echo $row['id']; ?>"><i class="fa fa-angle-double-right"></i><?php echo $row['name']; ?> Blogs</a></li>
					<?php } ?>
                </ul>
            </li> 
			<li class="treeview <?php if($page_url=='story/add.php' || $page_url=='story/edit.php' || $page_url=='story/list.php' || $page_url=='story/comments.php' || $page_url=='story/view.php' || $page_url=='story/edit_user.php' ) {echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Story</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" >
                    <li><a href="<?php echo $site_root; ?>/story/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
                    <li><a href="<?php echo $site_root; ?>/story/list.php"><i class="fa fa-angle-double-right"></i>List All</a></li>
					<li><a href="<?php echo $site_root; ?>/story/comments.php"><i class="fa fa-angle-double-right"></i>Comments</a></li>
                </ul>
            </li> 
			<li class="treeview <?php if($page_url=='pages/add.php' || $page_url=='pages/edit.php' || $page_url=='pages/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Pages</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/pages/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/pages/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li> 
			<li class="treeview <?php if($page_url=='users/add.php' || $page_url=='users/add2.php' || $page_url=='users/edit.php' || $page_url=='users/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Users</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/users/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/users/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>			
			<li class="treeview <?php if($page_url=='settings/settings.php' || $page_url=='settings/defaults.php' || $page_url=='settings/images.php' || $page_url=='settings/about_us.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Settings</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/settings/settings.php"><i class="fa fa-angle-double-right"></i>General</a></li>
					<li><a href="<?php echo $site_root; ?>/settings/defaults.php"><i class="fa fa-angle-double-right"></i>Defaults</a></li>
					<li><a href="<?php echo $site_root; ?>/settings/images.php"><i class="fa fa-angle-double-right"></i>Images</a></li>
					<li><a href="<?php echo $site_root; ?>/settings/about_us.php"><i class="fa fa-angle-double-right"></i>About Us</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='slideshow/add.php' || $page_url=='slideshow/edit.php' || $page_url=='slideshow/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Slideshow</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/slideshow/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/slideshow/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='status/add.php' || $page_url=='status/edit.php' || $page_url=='status/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Status</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/status/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/status/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='team/add.php' || $page_url=='team/edit.php' || $page_url=='team/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Team</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/team/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/team/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='quicklinks/add.php' || $page_url=='quicklinks/edit.php' || $page_url=='quicklinks/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Quick Links</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/quicklinks/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/quicklinks/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='newsletter/add.php' || $page_url=='newsletter/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Newsletter</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/newsletter/add.php"><i class="fa fa-angle-double-right"></i>Send News</a></li>
					<li><a href="<?php echo $site_root; ?>/newsletter/list.php"><i class="fa fa-angle-double-right"></i>Subscribers</a></li>
				</ul>
			</li>
			<li class="treeview <?php if($page_url=='tags/add.php' || $page_url=='tags/edit.php' || $page_url=='tags/list.php') {echo 'active';}?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Tags</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu" >
					<li><a href="<?php echo $site_root; ?>/tags/add.php"><i class="fa fa-angle-double-right"></i>Add</a></li>
					<li><a href="<?php echo $site_root; ?>/tags/list.php"><i class="fa fa-angle-double-right"></i>List</a></li>
				</ul>
			</li>
			<li class="<?php if($page_url=='ads/ads.php') {echo 'active';}?>">
                <a href="<?php echo $site_root; ?>/ads/ads.php">
                    <i class="fa fa-table"></i> <span>Ads</span>
				</a>
            </li> 
			<li class="<?php if($page_url=='profile/view.php') {echo 'active';}?>">
                <a href="<?php echo $site_root; ?>/profile/view.php">
                    <i class="fa fa-table"></i> <span>My Account</span>
				</a>
            </li> 
			<li>
                <a href="<?php echo $site_root; ?>/../" target='_blank'>
                    <i class="fa fa-table"></i> <span>Front end</span>
				</a>
            </li> 
			<li>
                <a href="<?php echo $site_root; ?>/login/logout.php">
                    <i class="fa fa-table"></i> <span>Logout</span>
				</a>
            </li> 
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>