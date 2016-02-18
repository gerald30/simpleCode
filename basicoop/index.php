<?php
require 'main.php';
$main = new Main();
$main->get_start_of_site();
$main->get_title();
$main->get_description();
$main->get_keywords();
$main->get_author();
$main->get_close_header();
$main->get_content();
$main->get_close_page();