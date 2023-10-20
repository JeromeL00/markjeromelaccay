<?php

function wpPortfolio_assets(){
    wp_enqueue_style('wpPortfolio-css', get_template_directory_uri() . '/css/output.css' , microtime());


}


add_action('wp_enqueue_scripts', 'wpPortfolio_assets');


?>
