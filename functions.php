<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 12.03.17
 * Time: 15:22
 */

add_filter('wp_title', 'filterTitle');
function filterTitle($title) {
    return $title.' - Twenty Seventeen Child';
}

add_filter('the_content', 'filterTheContent');
function filterTheContent($content) {
    return $content.' - Twenty Seventeen Child';
}
