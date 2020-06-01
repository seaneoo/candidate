<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title><?= get_bloginfo('name') ?></title>
</head>

<body <?php body_class() ?>>
    <?php include get_theme_file_path('/inc/templates/header.php') ?>
    <main id="main" role="main">