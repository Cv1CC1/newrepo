<?php

$color_picker = get_field('color_picker');
$before_title = get_field('before_title');
$title = get_field('title');
$after_title = get_field('after_title_wysiwyg');
$image = get_field('image');
$link = get_field('link');


?>
<div class="content-image-right-link-container">
    <div class="text-container">
        <p style= color:<?php echo $color_picker;?>><?php echo $before_title;?></p>
        <h1 class="content-image-right-title"><?php echo $title;?></h1>
        <p class="Large-semibold"><?php echo $after_title;?></p>
        <?php if($link):?>
            <a class="hero-link-button" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
        <?php endif;?>
    </div>
    <div class="content-image-right-image">
        <img src="<?php echo $image;?>" alt="This is image">
    </div>
</div>
</div>