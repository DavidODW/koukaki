<?php

get_header();
?>

    <main id="primary" class="site-main"> <!-- ajout des class section-hidden pour faire disparaitre les elements à animer et de section_up et title_appear pour le ciblage du script-->
        <section class="banner section-hidden">
            <video id="background-video" autoplay loop muted>
                <source src="<?php echo get_theme_file_uri() . '/assets/videos/Studio+Koukaki-vidéo+header+sans+son+.mp4'; ?> " alt="video avec des chats animés" type="video/mp4">
            </video>
            <div class="banner__parallax">
            <img class="banner_img"src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="#story" class="story section-hidden">
            <h2 > <div class="title_appear">L'histoire </div> </h2> <!--mise en place div pour éviter le décalage des élément ::before du css-->
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
        <!-- remplacement section characters -->
        <?php get_template_part( '/template-parts/section_characters' ); ?> 
            <article id="place" class="section-hidden">
            <img class="place-cloud place_img_big "src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?> " alt="gros nuage">
            <img class="place-cloud place_img_small "src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?> " alt="petit nuage">
                <div>
                    <h3><div class="title_appear">Le <span>Lieu</span> </div></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="section-hidden">
            <h2><div class="title_appear">Studio <span>Koukaki </div></span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    <!-- ajout section nomination -->
    <?php get_template_part( '/template-parts/section_nomination' ); ?> 
    </main><!-- #main -->

<?php
get_footer();
