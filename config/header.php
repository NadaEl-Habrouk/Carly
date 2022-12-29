<div class="container">
        <div class="nav">
            <div class="logo">
                <p>carly</p>
            </div>
            <div class="links">
                <ul>
                    <li><a href="#searchacar">Search A Car</a></li>
                    <li><a href="#Whychooseus">Why choose us</a></li>
                    <li><a href="#PopularRentalDeals">Popular Rental Deals</a></li>
                    <li><a href="cars.php">All Cars</a></li>
                    <li><a href="cars.php">Book A Car</a></li>
                    <li><a href="feedback.php" target="_blank">Feedback</a></li>
                </ul>
                <?php if(isset($_SESSION['id'])) : ?>
                <div class="logout"><a href="logout.php">Log Out</a></div>
                <?php endif; ?>
                <?php if(!isset($_SESSION['id'])) : ?>
                <div class="register"><a href="register.php" style= " background-color: #256BF3;
    padding: 5px 10px;
    border-radius: 10px;
    color: #FFFDFD;
    font-weight: 400;
    font-size: 14px;">Register</a></div>
                <div class="ligin"><a href="login.php">Log In</a></div>
                <?php endif; ?>

            </div>
        </div>
    </div>