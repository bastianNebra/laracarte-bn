<?php
/**
 * Created by PhpStorm.
 * User: BastianNebra
 * Date: 30/09/2018
 * Time: 08:30
 */
    if(!function_exists('page_title')){
        function page_title($title){
            $base_title = "Laracarte list of artisan";
            
            if ($title==""){
                return $base_title;
            }
            else{
                return $title."|".$base_title;
            }
        }
    }
