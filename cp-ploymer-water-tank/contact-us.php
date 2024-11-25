<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CP POLYMER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Include Navbar -->
    <?php include 'includes/header.php'; ?>

    <!-- Contact Us Section -->
    <section class="container my-5">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">We would love to hear from you! If you have any questions, need more information about our products, or want to place an order, feel free to reach out to us.</p>

        <div class="row">
            <div class="col-md-6">
                <h3>Get In Touch</h3>
                <p>Email: info@cppolymer.com</p>
                <p>Phone: +91 8102774032</p>
                <p>Address: Narshingh Nagar Society, Gali No.-6, Shankarpur, Hazaribagh-825301, Jharkhand</p>
            </div>

            <div class="col-md-6">
                <h3>Contact Form</h3>
                <form action="contact-us.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
