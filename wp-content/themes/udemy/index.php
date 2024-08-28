<!-- this was for learning, no longer used at the moment because doing full site editing-->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset");?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class("example"); ?>>
    <p>Hello World!</p>
    <?php wp_body_open(); ?>

    <?php wp_footer(); ?>
</body>
</html>