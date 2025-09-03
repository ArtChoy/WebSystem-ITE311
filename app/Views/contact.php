<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">Get in touch with us</p>
            <hr class="my-4">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Send us a Message</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="your.email@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Message subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary ms-2">Back to Home</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact Information</h5>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3">
                            <strong>Address:</strong><br>
                            123 Education Street<br>
                            Abasolo City, 1234
                        </li>
                        <li class="mb-3">
                            <strong>Email:</strong><br>
                            contact@lmsabasolo.edu
                        </li>
                        <li class="mb-3">
                            <strong>Phone:</strong><br>
                            +63 123 456 7890
                        </li>
                        <li class="mb-3">
                            <strong>Office Hours:</strong><br>
                            Monday - Friday: 8:00 AM - 5:00 PM<br>
                            Saturday: 8:00 AM - 12:00 PM
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
