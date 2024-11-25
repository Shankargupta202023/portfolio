<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CP POLYMER - Water Tanks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Include Navbar -->
    <?php include 'includes/header.php'; ?>

    <!-- Slider Section -->
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/water-tank.avif" class="d-block w-100" alt="Slider Image 1">
                <div class="carousel-caption">
                    <h3>Quality Water Tanks</h3>
                    <p>Durable and Reliable Solutions</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/tank.webp" class="d-block w-100" alt="Slider Image 2">
                <div class="carousel-caption">
                    <h3>Quality Water Tanks</h3>
                    <p>Durable and Reliable Solutions</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Section -->
    <div class="container-xxl py-5">
        <!-- About content -->
    </div>

    <!-- Product Booking Section -->
    <section id="product-booking" class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="images/tank.webp" alt="Water Tank">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Booking Form</h3>
                <form method="POST" action="whatsappmail.php">
                    <div class="row p-3 m-4">
                        <div class="col-12 col-sm-6">
                            <input id="product-name" name="product_name" type="text" class="form-control bg-light border-0" placeholder="Product Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input name="date" type="date" class="form-control bg-light border-0" style="height: 55px;">
                        </div>
                        <!-- Other fields -->
                        <div class="col-12">
                            <button class="btn btn-dark w-100 py-3" type="submit" name="submit">Make Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="container my-5">
        <h2 class="text-center">Related Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card product-card" data-product-name="Water Tank Model 1">
                    <img src="images/water-tank.avif" class="card-img-top" alt="Water Tank Model 1">
                    <div class="card-body">
                        <h5 class="card-title">Water Tank Model 1</h5>
                        <p class="card-text">Description of Water Tank Model 1.</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card product-card" data-product-name="Water Tank Model 2">
                    <img src="images/tank.webp" class="card-img-top" alt="Water Tank Model 2">
                    <div class="card-body">
                        <h5 class="card-title">Water Tank Model 2</h5>
                        <p class="card-text">Description of Water Tank Model 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.product-card').on('click', function() {
                // Get the product name from data attribute
                var productName = $(this).data('product-name');
                // Set the product name in the booking form
                $('#product-name').val(productName);
            });
        });
    </script>
</body>
</html>
