<?php
function artDanceLab_block_categories($categories)
{
	$category_slugs = wp_list_pluck($categories, 'slug');
	return in_array('artDanceLab', $category_slugs, true) ? $categories : array_merge(
		$categories,
		array(
			array(
				'slug'  => 'artDanceLab',
				'title' => __('Theme Name Blocks', 'artDanceLab'),
				'icon'  => null,
			),
		)
	);
}
add_filter('block_categories', 'artDanceLab_block_categories');




if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

	
	acf_register_block_type(array(
		'name'				=> 'about',
		'title'				=> __('About'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/about.php',
		'category'			=> 'artDanceLab',
		'icon'				=> 'nametag',
    ));

    acf_register_block_type(array(
		'name'				=> 'instructors',
		'title'				=> __('Instructors'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/instructors.php',
		'category'			=> 'artDanceLab',
		'icon'				=> 'nametag',
    ));

     acf_register_block_type(array(
		'name'				=> 'news',
		'title'				=> __('news'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/news.php',
		'category'			=> 'artDanceLab',
		'icon'				=> 'nametag',
    ));
     acf_register_block_type(array(
		'name'				=> 'schedule',
		'title'				=> __('schedule'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/schedule.php',
		'category'			=> 'artDanceLab',
		'icon'				=> 'nametag',
    ));
     acf_register_block_type(array(
		'name'				=> 'pricings',
		'title'				=> __('pricings'),
		'description'		=> __(''),
		'render_template'	=> 'parts/blocks/pricings.php',
		'category'			=> 'artDanceLab',
		'icon'				=> 'nametag',
    ));
}