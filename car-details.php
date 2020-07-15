<?php
/**
 * Single Car Details
 *
 * */
require "classes/Car_client.php";
$id = $_GET['id'];
$carData = getCar($id);

if ($carData['id'] === "null") {
    $resource = "CAR";
    // Car not found
    header("Location: 404.php?resource=".$resource);
}
else {
    $carDetails = getCar($id);
    $rtitle = "Car Details";
    $itemName = $carDetails['make']. " - ".$carDetails['model'];
}

?>
    <!--== Preloader and Header Area Start ==-->
<?php include 'templates/car-details/header.php'; ?>
    <!--== Preloader, Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2><?php  echo $carDetails['make']. " - ".$carDetails['model'];?></h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2><?php  echo $carDetails['make']. " - ".$carDetails['model'];?><span class="price">Rent: 
                        <b>Ksh. <?php  echo $carDetails['price'];?></b></span></h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="car-details-info">
                            <h4>Additional Info</h4>
                            <p><?php  echo $carDetails['description'];?></p>

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Class</th>
                                                    <td>Compact</td>
                                                </tr>
                                                <tr>
                                                    <th>Fuel</th>
                                                    <td>Petrol</td>
                                                </tr>
                                                <tr>
                                                    <th>Seatss</th>
                                                    <td><?php  echo $carDetails['seats'];?></td>
                                                </tr>
                                                <tr>
                                                    <th>GearBox</th>
                                                    <td><?php  echo $carDetails['transmision'];?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="tech-info-list">
                                            <ul>
                                                <li>ABS</li>
                                                <li>Air Bags</li>
                                                <li>Bluetooth</li>
                                                <li>Car Kit</li>
                                                <li>GPS</li>
                                                <li>Music</li>
                                                <li>Bluetooth</li>
                                                <li>ABS</li>
                                                <li>GPS</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review  Area  start-->
                            <div class="review-area">
                                <h3>Be the first to review “<?php  echo $carDetails['make']. " - ".$carDetails['model'];?>”</h3>
                                <div class="review-star">
                                    <p class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star unmark"></i>
                                        <i class="fa fa-star unmark"></i>
                                    </p>
                                </div>
                                <div class="review-form">
                                    <form action="index.html">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" placeholder="Full Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="email-input">
                                                    <input type="email" placeholder="Email Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="message-input">
                                            <textarea name="review" cols="30" rows="5" placeholder="Write Your Feedback Here!"></textarea>
                                        </div>

                                        <div class="input-submit">
                                            <button type="submit">Submit</button>
                                            <button type="reset">Clear</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <?php include 'templates/car-details/sidebar.php'; ?>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

    <!--== Footer Area Start ==-->
    <?php include 'templates/car-details/footer.php'; ?>
    <!--== Footer Area End ==-->

    <!--Scripts here -->

</body>

</html>