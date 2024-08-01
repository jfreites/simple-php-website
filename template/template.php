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
        <?php render_menu(); ?>
    </header>

    <main>
        <?php page_content(); ?>
    </main>

    <footer>
        <p><small>&copy; <?php echo date('Y'); ?> <?php site_name() ?> - <?php site_version() ?></small></p>
    </footer>
</body>

</html>