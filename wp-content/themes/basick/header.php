<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header>
    <div id="menu">
        <?php wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
            )
            );?>
    </div>
    <div id="burger-menu" class="hide"><span></span></div>
    <div id="logo"></div>
</header> 
    
