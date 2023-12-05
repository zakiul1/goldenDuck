<?php

/*

* 

*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_footer() ?>

    <div class="  w-full  bg-blue-300  ">
        <div class="container flex justify-between m-auto items-center h-16">
            <div><a href="<?php ?>">
                    <img class="h-9 w-9" src="<?php echo get_theme_mod('goldenDuck_logo') ?>" alt="logo">
                </a></div>
            <div>
                <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                ]); ?>
            </div>
        </div>
    </div>
</body>

</html>