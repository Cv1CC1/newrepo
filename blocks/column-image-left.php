<?php

$color_picker = get_field('color_picker');
$before_title = get_field('before_title');
$title = get_field('title');
$after_title = get_field('after_title_wysiwyg');
$image = get_field('image');


?>
<div class="content-image-left-container">
    <div class="content-image-left-image">
        <img src="<?php echo $image;?>" alt="This is image">
    </div>
    <div class="text-container">
        <p style= color:<?php echo $color_picker;?>><?php echo $before_title;?></p>
        <h1 class="content-image-left-title"><?php echo $title;?></h1>
        <p class="Large-semibold"><?php echo $after_title;?></p>
    </div>
</div>