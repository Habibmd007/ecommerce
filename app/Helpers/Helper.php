<?php

namespace App\Helpers;

class Helper {
    
    public static function catch_first_image($post) 
    {
        $first_img = '';

        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);

        if(!empty($matches[1][0]))
        $first_img = $matches [1] [0];

        if(empty($first_img)){ //Defines a default image

            $first_img = "/images/noimg.jpg";

        }

        return $first_img;
    }
}