<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <h1>Point-of-Sale System</h1>

    <p>Welcome to the first version of our CodeIgniter POS application.</p>

    <p>This project demonstrates routing, controllers, views, and static PHP arrays.</p>

    <p>Welcome: Mathew</p>

    <div class="links">
        <a class="button" href="<?= site_url('customers') ?>">View Customers</a>
        <a class="button" href="<?= site_url('users') ?>">View Users</a>
    </div>
</div>

<?= $this->endSection() ?>