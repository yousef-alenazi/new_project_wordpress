<!DOCTYPE html>
<html <?php language_attributes('charset'); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <title><?php bloginfo('name') ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <?php show();?>
        <?php wp_head();  ?>
    </head>