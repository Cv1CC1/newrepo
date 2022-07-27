<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="basic-theme/css/typography.css">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

</head>


<body <?php body_class();?>>


<header class="main">

    <div>
        <img href="http://lukas-playground.local/" class="header-image" src="http://lukas-playground.local/wp-content/uploads/2022/07/logo.png" alt="Logo">
    </div>

    
    <div class="desktop-menu">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'top-menu',
        ));
    ?>
    </div>

    <div class="mobile-menu">
        <?php
             wp_nav_menu(array(
                'theme_location' => 'mobile-menu',
            ));
        ?>
    </div> 

</header>