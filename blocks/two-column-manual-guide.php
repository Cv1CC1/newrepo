<?php

$manuals_title = get_field('manuals_title');
$guides_title = get_field('guides_title');

?>
<div class="manual-guides-container">
    <div class="manual-container">
        <h1 class="manuals-title"><?php echo $manuals_title;?><h1>
        <div class="manuals-title-after"></div>
        <?php if(have_rows('manuals')):?>
            <?php while( have_rows('manuals')): the_row();
            
            $manuals_sub_title = get_sub_field('manuals_sub_title');
            $manuals_content = get_sub_field('manuals_content');
            $manuals_link = get_sub_field('manuals_link');
            
            ?>
            
                <h3 class="sub-title"><?php echo $manuals_sub_title;?></h3>
                <h4 class="sub-content"><?php echo $manuals_content;?></h4>
                <?php if($manuals_link):?>
                    <a class="manuals-link-button" href="<?php echo $manuals_link['url']?>" target="<?php echo $manuals_link['target']?>"><?php echo $manuals_link['title']?></a>
                <?php endif;?>
            <?php endwhile;?>
        <?php endif;?>

    </div>

    <div class="guides-container">
        <h1 class="guides-title"><?php echo $guides_title;?><h1>
        <div class="manuals-title-after"></div>
        <?php if(have_rows('guides')):?>
            <?php while( have_rows('guides')): the_row();
            
            $guides_sub_title = get_sub_field('guides_sub_title');
            $guides_content = get_sub_field('guides_content');
            $guides_link = get_sub_field('guides_link');
            
            ?>
            
                <h3 class="sub-title"><?php echo $guides_sub_title;?></h3>
                <h4 clas="sub-content"><?php echo $guides_content;?></h4>
                <?php if($guides_link):?>
                    <a class="guides-link-button" href="<?php echo $guides_link['url']?>" target="<?php echo $guides_link['target']?>"><?php echo $guides_link['title']?></a>
                <?php endif;?>
            <?php endwhile;?>
        <?php endif;?>

    </div>


</div>