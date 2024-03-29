<?php

// An array mapping SCSS variable to a SiteOrigin Settings variable name
return array(
	'variables' => array(
		// The fonts
		'fonts_main' => 'font__main',
		'fonts_headings' => 'font__headings',
		'fonts_details' => 'font__detail',
		'fonts_menu' => 'font__menu',

		// The page structure
		'structure_sidebar_width' => 'size__site-sidebar',

		// The accent colors used in free
		'branding_accent' => 'color__primary_accent',
		'branding_accent_dark' => 'color__primary_accent_dark',

		// The text colors
		'fonts_text_dark' => 'color__text_dark',
		'fonts_text_medium' => 'color__text_medium',
		'fonts_text_light' => 'color__text_light',
		'fonts_text_meta' => 'color__text_meta',
		'fonts_text_menu' => 'color__text_menu',
		'fonts_text_menu_hover' => 'color__text_menu_hover',
		'fonts_text_menu_current' => 'color__text_menu_current',

		// The header customizations
		'masthead_background_color' => 'masthead__background_color',
		'masthead_top_background_color' => 'masthead__top_background_color',
		'masthead_border_color' => 'masthead__border_color',
		'masthead_border_width' => 'masthead__border_width',
		'masthead_padding' => 'masthead__padding',
		'masthead_top_padding' => 'masthead__top_padding',
		'masthead_bottom_margin' => 'masthead__bottom_margin',

		// The mobile menu
		'responsive_mobile_menu_background_color' => 'mobilemenu__background_color',
		'responsive_mobile_menu_background_opacity' => 'mobilemenu__background_opacity',
		'responsive_mobile_menu_text_color' => 'mobilemenu__text_color',
		'responsive_mobile_text_color' => 'mobile__text_color',
		'responsive_mobile_icon_color' => 'mobile__icon_color',

		// The footer customizations
		'footer_background_color' => 'footer__background_color',
		'footer_border_color' => 'footer__border_color',
		'footer_border_width' => 'footer__border_width',
		'footer_top_padding' => 'footer__top_padding',
		'footer_side_padding' => 'footer__side_padding',
		'footer_top_margin' => 'footer__top_margin',

	),
	'stylesheets' => array(
		'style',
		'woocommerce'
	),
);
