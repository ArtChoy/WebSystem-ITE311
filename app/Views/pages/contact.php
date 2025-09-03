<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1><?= $title ?></h1>
    <p class="lead"><?= $description ?></p>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Contact Information</h3>
            <p><strong>Address:</strong> Your Address Here</p>
            <p><strong>Email:</strong> contact@yourlms.com</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
