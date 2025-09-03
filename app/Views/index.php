<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-4">Welcome to LMS Abasolo</h1>
            <p class="lead">Your comprehensive Learning Management System</p>
            <hr class="my-4">
            <p>Start your learning journey today with our wide range of courses and experienced instructors.</p>
            <div class="mt-4">
                <a href="<?= base_url('about') ?>" class="btn btn-primary me-3">Learn More</a>
                <a href="<?= base_url('contact') ?>" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('about') ?>" class="text-decoration-none">→ About Us</a></li>
                        <li class="mt-2"><a href="<?= base_url('contact') ?>" class="text-decoration-none">→ Contact Us</a></li>
                        <li class="mt-2"><a href="#" class="text-decoration-none">→ Courses</a></li>
                        <li class="mt-2"><a href="#" class="text-decoration-none">→ Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
