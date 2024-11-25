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
            <!-- Add more slides if needed -->
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

      <!-- About Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="images/tank.webp">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="images/tank2.avif" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="images/tank3.avif">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="images/water-tank.avif">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h2 class="mb-4">Welcome to CP POLYMER</h2>
                <p class="mb-4">CP POLYMER is a leading manufacturer of high-quality water tanks, committed to providing reliable and durable solutions for water storage.</p>
                <p class="mb-4">With years of experience in the industry, we aim to offer our customers innovative products that meet their needs while maintaining the highest standards of quality.</p>
                
                <a class="btn btn-primary py-3 px-5 mt-2" href="about-us.php">Read More</a> 
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <section style="background-color: rgb(237, 243, 249);" id="product-booking" class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="images/tank.webp" alt="photo">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Booking Form</h3>
                <form method="POST" action="whatsappmail.php">
    <div class="row p-3 m-4">
    <div class="col-12 col-sm-6">
            <input name="Product Name" type="text" class="form-control bg-light border-0" placeholder="Product Name" style="height: 55px;">
        </div>
        <div class="col-12 col-sm-6">
            <input name="date" type="date" class="form-control bg-light border-0" style="height: 55px;">
        </div>
        <div class="col-12 col-sm-6">
               <div class="form-floating">
                   <select class="form-control bg-light border-0" id="select1" name="select1">
                    <option value="#">Capacity in litres</option>
                     <option value="1000 Ltrs">1000 Ltrs</option>
                     <option value="1500 Ltrs">1500 Ltrs</option>
                     
                   </select>
                 </div>
         </div>
         <div class="col-12 col-sm-6">
               <div class="form-floating">
                   <select class="form-control bg-light border-0" id="select2" name="select2">
                    <option value="#">Product color</option>
                     <option value="Black (Standard)">Black (Standard)</option>
                     <option value="White (Standard)">White (Standard)</option>
                     <option value="Lvory (Standard)">Lvory (Standard)</option>
                     
                   </select>
                 </div>
         </div>
        
        <div class="col-12 col-sm-6">
            <input name="name" type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
        </div>
        <div class="col-12 col-sm-6">
            <input name="number" type="number" class="form-control bg-light border-0" placeholder="Your Number" style="height: 55px;">
        </div>
        
        <div class="col-12 col-sm-6">
            <input name="Address" type="text" class="form-control bg-light border-0" placeholder="Your Address" style="height: 55px;">
        </div>
        <div class="col-12 col-sm-6">
            <input name="message" type="text" class="form-control bg-light border-0" placeholder="Message" style="height: 55px;">
        </div>
        
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit" name="submit">Make Appointment</button>
        </div>
    </div>
</form>
            </div>
        </div>
    
    </section>
   
    
    <!-- Products Section -->
    <section class="container my-5">
        <h2 class="text-center">Related Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="images/water-tank.avif" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Water Tank Model 1</h5>
                        <p class="card-text">Description of Water Tank Model 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/tank.webp" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Water Tank Model 1</h5>
                        <p class="card-text">Description of Water Tank Model 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/water-tank.avif" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Water Tank Model 1</h5>
                        <p class="card-text">Description of Water Tank Model 1.</p>
                    </div>
                </div>
            </div>
            <!-- Add more products as needed -->
        </div>
    </section>

    <!-- Booking Form -->
    <!-- <section class="container my-5">
        <h2 class="text-center">Get a Quote</h2>
        <form action="get-quote.php" method="POST" class="form-inline justify-content-center">
            <input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="Name">
            <input type="email" name="email" class="form-control mb-2 mr-sm-2" placeholder="Email"> <br>
            <input type="number" name="number" class="form-control mb-2 mr-sm-2" placeholder="Number">
            <input type="address" name="address" class="form-control mb-2 mr-sm-2" placeholder="Address"> <br>
            <input type="text" name="product-name" class="form-control mb-2 mr-sm-2" placeholder="Product Name">
            <input type="text" name="message" class="form-control mb-2 mr-sm-2" placeholder="Message"> <br>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </section> -->

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
