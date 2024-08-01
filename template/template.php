<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php page_title(); ?></title>
    <link rel="stylesheet" href="<?php site_url(); ?>/template/style.css" type="text/css">
</head>

<body>
    <header>
        nav function here
    </header>

    <main>
        <?php page_content(); ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> </br> <?php site_version() ?></p>
    </footer>
</body>

</html>