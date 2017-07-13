		<!-- jQuery 2.0.2 -->
        <script src="<?php echo $site_root; ?>/assets/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $site_root; ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo $site_root; ?>/assets/js/AdminLTE/app.js" type="text/javascript"></script>
		
		<?php if($page_url=='qns/list.php' || $page_url=='subcategory/list.php' || $page_url=='subject/list.php' || $page_url=='membership/list.php' || $page_url=='users/list.php' || $page_url=='newsletter/list.php' || $page_url=='blog/comments.php' || $page_url=='pages/list.php' || $page_url=='slide_show/list.php' || $page_url=='tags/list.php' || $page_url=='quicklinks/list.php' || $page_url=='task/my_tasks.php' || $page_url=='task/moderated_tasks.php' || $page_url=='story/list.php' || $page_url=='status/list.php' || $page_url=='story/comments.php' || $page_url=='blog/list.php' || $page_url=='category/list.php' || $page_url=='team/list.php' || $page_url=='slideshow/list.php') { ?>
			<!-- DATA TABES SCRIPT -->
			<?php if($page_url=='qn_sets/list.php') { ?>
				<script src="<?php echo $site_root; ?>/assets/js/plugins/datatables/qn_sets_jquery.dataTables.js" type="text/javascript"></script>
			<?php } else { ?>
	        	<script src="<?php echo $site_root; ?>/assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
			<?php } ?>
	        <script src="<?php echo $site_root; ?>/assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() 
				{
	                $("#example1").dataTable();
					/*
	                $('#example1').dataTable(
					{
	                    "bPaginate": true,
	                    "bLengthChange": false,
	                    "bFilter": false,
	                    "bSort": true,
	                    "bInfo": true,
	                    "bAutoWidth": false
	                });
					*/
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='task/list.php' || $page_url=='task/my_tasks.php'){  ?>
			<script>
				$(function() 
				{
					$('.option_th').css('width','150px');
				});
			</script>
		<?php } ?>
		
		
		<?php if($page_url=='qn_sets/add_qns.php' || $page_url=='qn_sets/edit_qns.php' || $page_url=='sample_qns/add.php' || $page_url=='sample_qns/edit.php') { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('qn');
					CKEDITOR.replace('explanation');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='settings/about_us.php' ) { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('about_us_detailed');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='category/add.php' || $page_url=='category/edit.php' ) { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('details');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='story/add.php' || $page_url=='story/edit.php' ) { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('story');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='blog/add.php' || $page_url=='blog/edit.php' ) { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('blog',{height: '800px'});
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='pages/add.php' || $page_url=='pages/edit.php') { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('page');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='settings/sample.php') { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('sample_rules');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='newsletter/add.php') { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('news');
	            });
	        </script>
		<?php } ?>
		<?php if($page_url=='settings/note.php') { ?>
			<script src="<?php echo $site_root; ?>/assets/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script type="text/javascript">
	            $(function() {
	                CKEDITOR.replace('note_text');
	            });
	        </script>
		<?php } ?>
    </body>
</html>
