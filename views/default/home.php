<?php defined('BASEPATH') or exit('No direct access allowed');
get_head(array(
	'title'=>'Title here',
	'ogtitle'=>'og title here',
	'description'=>'description here',
	'ogdescription'=>'og description',
	'canonical'=>'https://example.com',
));
get_template('header');
?>
	
	<!-- ##### CONTENT START ##### -->
	
		<p>Home Page Content</p>

	<!-- ##### CONTENT END ##### -->

<?php get_footer(); ?>