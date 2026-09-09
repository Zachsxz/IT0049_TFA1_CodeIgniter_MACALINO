<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS Foundations') ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #222; }
        header { background: #17365d; color: white; padding: 20px; }
        nav { max-width: 1000px; margin: 0 auto; display: flex; gap: 18px; flex-wrap: wrap; }
        nav a { color: white; text-decoration: none; font-weight: bold; }
        main { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .card { background: white; padding: 28px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,.08); margin-bottom: 20px; }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 14px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #e9eef5; }
        .links { display: flex; gap: 12px; flex-wrap: wrap; }
        .button { display: inline-block; padding: 10px 16px; background: #17365d; color: white; text-decoration: none; border-radius: 6px; }
        footer { text-align: center; padding: 30px; color: #666; }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customer Accounts</a>
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>
</header>
<main>
    <?= $this->renderSection('content') ?>
</main>
<footer>IT0049 Web System Technologies | CodeIgniter 4 POS Foundations</footer>
</body>
</html>
