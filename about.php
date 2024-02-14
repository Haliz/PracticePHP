<?php
require 'funcs.php';
$title = 'My Blog :: About';
$posts = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi, earum facilis fuga iste
                        magnam nobis sequi vitae. A aperiam ducimus eligendi necessitatibus numquam odit officia 
                        similique temporibus voluptatem. Eligendi?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi, earum facilis fuga iste
                        magnam nobis sequi vitae. A aperiam ducimus eligendi necessitatibus numquam odit officia 
                        similique temporibus voluptatem. Eligendi?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi, earum facilis fuga iste
                        magnam nobis sequi vitae. A aperiam ducimus eligendi necessitatibus numquam odit officia 
                        similique temporibus voluptatem. Eligendi?</p>';
$recent_posts = [
1 => [
'title' => 'An item',
'slug' => lcfirst(str_ireplace(' ', '-', 'An item'))
],
2 => [
'title' => 'A second item',
'slug' => lcfirst(str_ireplace(' ', '-', 'A second item'))
],
3 => [
'title' => 'A third item',
'slug' => lcfirst(str_ireplace(' ', '-', 'A third item'))
],
4 => [
'title' => 'A fourth item',
'slug' => lcfirst(str_ireplace(' ', '-', 'A fourth item'))
],
5 => [
'title' => 'And a fifth one',
'slug' => lcfirst(str_ireplace(' ', '-', 'And a fifth one'))
],
];
require_once 'app/views/about.tpl.php';