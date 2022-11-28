<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>

</head>
<body>
    <header class="header">
        <div class="header_div">
            <!-- ajouter un custom logo -->
            <?php the_custom_logo() ?>
            <!-- ajouter un menu -->
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </header>
    <main class="main">


