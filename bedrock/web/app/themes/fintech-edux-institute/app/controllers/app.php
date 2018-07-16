<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    function cursosLoop()
    {
        $cursos = get_posts([
            'post_type' => 'cursos',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $cursos);
    }
    function talleresLoop()
    {
        $talleres = get_posts([
            'posts_per_page'=>'6',
            'post_type' => 'talleres',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $talleres);
    }
    function serviciosLoop()
    {
        $servicios = get_posts([
            'posts_per_page'=>'5',
            'post_type' => 'servicios',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $servicios);
    }
    function noticiasLoop()
    {
        $noticias = get_posts([
            'posts_per_page'=>'4',
            'post_type' => 'post',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID),
                'date' => get_the_date( 'l F j, Y' ) 
            ];
        }, $noticias);
    }
}
