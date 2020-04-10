<?php

get_header();
echo get_post_meta($post->ID, 'head', true);

echo '<div class="container">';
	$fourseasons_default_sidebar_position = get_theme_mod('fourseasons_default_sidebar_position');
	$fourseasons_widget_areas_sidebar = get_post_meta($post->ID, 'fourseasons-widget-areas-sidebar', true);	



	//page content
		if(!empty($fourseasons_widget_areas_sidebar) && is_active_sidebar($fourseasons_widget_areas_sidebar)){
			print '<section class="content with-sidebar blogpost">';
		}else{
			print '<section class="content blogpost">';
		}

	//load blog posts		
		while(have_posts()){

            the_post();
			
			get_template_part( 'content-single' );
				
		}

	//tags						
		$posttags = get_the_tags( $post->ID );
		if ($posttags) {
			
			print '<p class="tags"><i class="fa fa-tags"></i><span>'.__('Tags: ','four-seasons').'</span>';
			
			 foreach($posttags as $tag) {
				$opt[] = '<a href="'.esc_url(get_tag_link($tag->term_id)).'">'.$tag->name.'</a>';
			}
			print implode(', ',$opt);
			
			
			print '</p>';
		}		
	
	
	
	
	//comments
		//comments_template( '', true );
	

		print '
			</section>
		';

	
get_footer();
