<?php

global $post;

get_header();

?>
<main class="single-seaweed">
    <div class="mb-100">
        <div>
            <img class="banner_image" src="<?= the_field("single_page_image") ?>">
        </div>
    </div>
    <div class="mb-100">
        <div class="grid-row">
            <div class="col seaweed-content">
                <h2><?= get_the_title($post) ?></h2>
                <?= get_the_content_feed() ?>
            </div>
            <div class="col thumbnail-container">
                <div class="background-container">
                    <img src="<?= get_the_post_thumbnail_url() ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-100">
        <div class="grid-row">
            <div class="listing-grid">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    ?>
                    <div class="listing-item seaweed-recipe-listing-item">
                        <div class="image-container">
                            <img src="<?= get_stylesheet_directory_uri() . "/assets/img/seaweed-and-sunlight.png"?>">
                        </div>
                        <div class="content-container">
                            <h3>Dit is een recept</h3>
                            <p>Makkelijk - 20 min | Vegan - Snel</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque leo morbi eleifend arcu. Est id integer dolor nec risus convallis mattis. Justo, nulla lorem sit in morbi neque. Ornare gravida enim bibendum varius. Diam pretium etiam lacus semper sit ipsum.</p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php require("seaweed-box-section.php"); ?>
</main>
<?php

get_footer();