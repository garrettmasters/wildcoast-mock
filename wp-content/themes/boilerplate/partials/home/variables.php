<?php

$title  = $section['title'] ??   null;
$link_text  = $section['link_text'] ??   null;
$link_url  = $section['link_url']   ??   null;
$image  = wp_get_attachment_url($section['image'])  ??   null;
$content  = $section['subtitle']    ??   null;
$open_text  = $section['opentext']  ??   null;
