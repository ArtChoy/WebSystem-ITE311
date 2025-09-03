<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">About Us</h1>
            <p class="lead">Learn more about LMS Abasolo</p>
            <hr class="my-4">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>To provide quality education through an innovative learning management system that empowers both students and instructors.</p>
            
            <h3 class="mt-4">Our Vision</h3>
            <p>To be the leading platform for online education and learning management, fostering a community of lifelong learners.</p>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Why Choose Us?</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">✓ Experienced Instructors</li>
                        <li class="mb-3">✓ Flexible Learning</li>
                        <li class="mb-3">✓ Interactive Content</li>
                        <li class="mb-3">✓ Comprehensive Resources</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="<?= base_url('contact') ?>" class="btn btn-primary">Get in Touch</a>
                <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary ms-2">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
