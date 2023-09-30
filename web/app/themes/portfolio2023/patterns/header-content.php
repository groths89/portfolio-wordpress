<?php
/**
 * Title: Header Section
 * Slug: portfolio2023/header-content
 * Categories: header
 */
?>

<div class="header-content">
    <div class="left-header">
        <div class="h-shape"></div>
        <div class="image">
            <?php $image = get_field('hero_image'); ?>
            <?php if ($image): ?>
                <img src="<?php the_field('hero_image'); ?>" alt="Hero Image" />
            <?php endif; ?>
        </div>
    </div>
    <div class="right-header">
        <div class="h-shape"></div>
        <div class="text">
            <?php the_field('hero_text'); ?>
            <div class="btns">
                <?php if (get_field('hero_file')): ?>
                    <a href="<?php the_field('hero_file'); ?>" class="btn">
                        <span class="btn-text">Download CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>