<?php
add_action('admin_head', function () {
	$color = get_field('global_theme_color', 'options');

	if ($color) : ?>
		<style>
			.notice-info {
				display: none
			}

			#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,
			#adminmenu .wp-menu-arrow,
			#adminmenu .wp-menu-arrow div,
			#adminmenu li.current a.menu-top,
			#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
			.folded #adminmenu li.current.menu-top,
			.folded #adminmenu li.wp-has-current-submenu {
				background: <?= $color ?>;
			}

			.wp-core-ui .button-primary {
				background: <?= $color ?>;
				border-color: <?= $color ?>;
				text-shadow: 0 -1px 1px <?= $color ?>, 1px 0 1px <?= $color ?>, 0 1px 1px <?= $color ?>, -1px 0 1px <?= $color ?>;
			}

			.wp-core-ui .button.button-primary.button-hero {
				box-shadow: 0 2px 0 <?= $color ?>;
			}

			.wp-core-ui .button-primary.focus,
			.wp-core-ui .button-primary.hover,
			.wp-core-ui .button-primary:focus,
			.wp-core-ui .button-primary:hover {
				background: <?= $color ?>;
				border-color: <?= $color ?>;
			}

			.wp-core-ui .button-primary.active,
			.wp-core-ui .button-primary.active:focus,
			.wp-core-ui .button-primary.active:hover,
			.wp-core-ui .button-primary:active {
				background: <?= $color ?>;
				border-color: <?= $color ?>;
				box-shadow: inset 0 2px 0 <?= $color ?>;
				vertical-align: top;
			}

			.wp-core-ui .button-primary-disabled,
			.wp-core-ui .button-primary.disabled,
			.wp-core-ui .button-primary:disabled,
			.wp-core-ui .button-primary[disabled] {
				background: <?= $color ?> !important;
				border-color: <?= $color ?> !important;
				box-shadow: none !important;
				text-shadow: 0 -1px 0 #0000001a !important;
				cursor: default;
			}

			#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a,
			#wpadminbar .quicklinks .menupop ul li a:focus,
			#wpadminbar .quicklinks .menupop ul li a:focus strong,
			#wpadminbar .quicklinks .menupop ul li a:hover,
			#wpadminbar .quicklinks .menupop ul li a:hover strong,
			#wpadminbar .quicklinks .menupop.hover ul li a:focus,
			#wpadminbar .quicklinks .menupop.hover ul li a:hover,
			#wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:focus,
			#wpadminbar .quicklinks .menupop.hover ul li div[tabindex]:hover,
			#wpadminbar li #adminbarsearch.adminbar-focused::before,
			#wpadminbar li .ab-item:focus .ab-icon::before,
			#wpadminbar li .ab-item:focus::before,
			#wpadminbar li a:focus .ab-icon::before,
			#wpadminbar li.hover .ab-icon::before,
			#wpadminbar li.hover .ab-item::before,
			#wpadminbar li:hover #adminbarsearch::before,
			#wpadminbar li:hover .ab-icon::before,
			#wpadminbar li:hover .ab-item::before,
			#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,
			#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
			#wpadminbar:not(.mobile)>#wp-toolbar a:focus span.ab-label,
			#wpadminbar:not(.mobile)>#wp-toolbar li:hover span.ab-label,
			#wpadminbar>#wp-toolbar li.hover span.ab-label,
			#adminmenu .wp-submenu a:focus,
			#adminmenu .wp-submenu a:hover,
			#adminmenu a:hover,
			#adminmenu li.menu-top>a:focus,
			#adminmenu li a:focus div.wp-menu-image::before,
			#adminmenu li.opensub div.wp-menu-image::before,
			#adminmenu li:hover div.wp-menu-image::before,
			#collapse-button:focus,
			#collapse-button:hover,
			#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover>a .blavatar,
			#wpadminbar .quicklinks li a:focus .blavatar,
			#wpadminbar .quicklinks li a:hover .blavatar,
			#wpadminbar .ab-top-menu>li.hover>.ab-item,
			#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,
			#wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,
			#wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus,
			#wpadminbar .ab-top-menu>li.hover>.ab-item {
				color: <?= $color ?>;
			}

			#adminmenu li.menu-top:hover,
			#adminmenu li.opensub>a.menu-top,
			#adminmenu li>a.menu-top:focus {
				position: relative;
				color: <?= $color ?>;
			}
		</style>
<?php
	endif;
});

add_action('init', function () {
	acf_add_options_sub_page([
		'page_title' 	=> 'Theme colors',
		'menu_title'	=> 'Theme colors',
		'parent_slug'	=> 'themes.php',
	]);

	acf_add_local_field_group(array(
		'key' => 'group_61f128fbbc4ee',
		'title' => 'Color theme',
		'fields' => array(
			array(
				'key' => 'field_61f129183214a',
				'label' => 'Color',
				'name' => 'global_theme_color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-theme-colors',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
});
