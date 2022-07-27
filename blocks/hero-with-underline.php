<?php

$color_picker = get_field('color_picker');
$before_title = get_field('before_title');
$title = get_field('title');
$after_title = get_field('after_title');
$image = get_field('image');


?>
<div class="hero-container-link">
    <div class="text-container-link">
        <p style= color:<?php echo $color_picker;?>><?php echo $before_title;?></p>
        <h1 class="hero-title-link"><?php echo $title;?></h1>
        <p class="XLarge"><?php echo $after_title;?></p>
    </div>
    <div class="img-container-hero-link">
        <img src="<?php echo $image;?>" alt="This is image">
    </div>

</div>