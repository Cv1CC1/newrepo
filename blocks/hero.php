<?php

$color_picker = get_field('color_picker');
$before_title = get_field('before_title');
$title = get_field('title');
$after_title = get_field('after_title');
$image = get_field('image');
$button = get_field('button');
$link = get_field('link');


?>
<div class="hero-container">
    <div class="text-container">
        <p style= color:<?php echo $color_picker;?>><?php echo $before_title;?></p>
        <h1 class="hero-title"><?php echo $title;?></h1>
        <p class="XLarge"><?php echo $after_title;?></p>
    </div>
    <div class="img-container">
        <img class="hero-image" src="<?php echo $image;?>" alt="This is image">
    </div>
    <div class="learn-more">
        <?php if($link):?>
                <a class="hero-link" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
        <?php endif;?>
    </div>

</div>