<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1><?= $title ?></h1>
    <p class="lead"><?= $description ?></p>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>To provide quality education through our innovative learning management system.</p>
        </div>
        <div class="col-md-6">
            <h3>Our Vision</h3>
            <p>To be the leading platform for online education and learning management.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
