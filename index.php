<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <title>php</title>
</head>

<body>
    <div class="mainboard">
        <div class="header">
            <?php wp_nav_menu([
                'theme_location'  => 'menunav',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => 'header',
                'container_id'    => 'head',
                'menu_class'      => 'nav-menu',
                'menu_id'         => 'navigate',
                'before'          => '',
                'after'           => '',
                'echo'            => true,
                'items_wrap'      => '<ul id="navigate" class="nav-menu">%3$s</ul>',
                'fallback_cb'     => 'wp_page_menu',
            ]);
            ?>
        </div>
    </div>
</body>

</html> 