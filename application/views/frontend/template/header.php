<!DOCTYPE html>
<html class="no-js" lang="en">

<?php

$webInfo    = web_info();
$notifications = $this->database->userNotification();

$count = 0;

foreach ($notifications as $notification) {
    if ($notification['is_seen'] == 0) {
        $count += 1;
    }
}

?>

<head>
    <meta charset="utf-8" />
    <title><?= ($count > 0) ? "($count)" : ''; ?> <?= (isset($title)) ? $title . ' | ' : ''; ?><?= $webInfo['name']; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $webInfo['description']; ?>" />
    <meta name="keywords" content="<?= $webInfo['keyword']; ?>" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>favicon.ico">
    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/signericafat.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/cerebrisans.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/elegant.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/vendor/linear-icon.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/easyzoom.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/plugins/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/frontend/style.css">

    <!-- Croppie -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/croppie/croppie.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/select2.min.css">

    <style>
    .dropdown-toggle::after {
        display: none !important;
    }
    </style>

</head>

<body>