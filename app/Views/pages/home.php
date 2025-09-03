<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><?= $title ?></h1>
        <p class="lead"><?= $description ?></p>
        <hr class="my-4">
        <p>Get started with your learning journey today!</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>
<?= $this->endSection() ?>
