<?php
/**
 * Plugin Name: WineGenius Slider
 * Description: Beautiful Slider.
 * Version: The WineGenius Slider Version 1.0
 * Author: Abhishek Saini
 */

class winegenius_slider {
    
    public function __construct() {
        /** Create Slider Post type and setup a shortcode to show the slider **/
        add_action( 'init', array($this, 'winegenius_slider_post_type') );
        //add_action( 'add_meta_boxes', array($this, 'winegenius_add_meta_box') );
        add_shortcode( 'winegenius_slider', array($this, 'show_winegenius_slider') );

    }
    
    /** Setup Slider Post Type **/
    function winegenius_slider_post_type() {
            register_post_type( 'winegenius_slider',
                    array(
                            'labels' => array(
                                    'name' => __( 'Slider' ),
                                    'singular_name' => __( 'Slider' ),
                                    'add_new_item' => 'Add New Slide',
                            ),
                            'public' => true,
                            'has_archive' => true,
                            'show_ui' => true, 
                            'show_in_menu' => true, 
                            'rewrite' => array('slug' => 'slider'),
                            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields')
                    )
            );
    }
    
    /** Show the WineGenius Slider **/
    function show_winegenius_slider( $atts ) {
            
         $markup = '';
         $slides = get_posts(array(
             'post_type'        => 'winegenius_slider',
             'post_status'      => 'publish',
             'posts_per_page' => -1
         ));
         
         if($slides) {
            $markup = '<div class="flexslider" ><ul class="slides">';
            foreach($slides as $slide) {
                
                $links = get_post_custom($slide->ID);
                
                if(!empty($links['Image Link'][0]))
                    $thumb = '<a href="'. $links['Image Link'][0] .'">'.get_the_post_thumbnail( $slide->ID, 'slider-image' ).'</a>';
                else
                    $thumb = get_the_post_thumbnail( $slide->ID, 'slider-image' );
                    
                $markup .= '<li>'. $thumb;
                
                if($slide->post_content)
                    $markup .= '<p class="flex-caption">'. $slide->post_content .'</p>';
                    
                
                $markup .= '</li>';
            }
            $markup .= '</ul></div>';
         }
         
         return $markup;
    }
    
}

new winegenius_slider();

