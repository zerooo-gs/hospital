<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">Quality healthcare close to home. Provincial General Hospital, Badulla. Caring for your health, your community, and your family.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>PGH, Bandarawela Rd, Badulla.</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+94 55 222 22 61</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                        <a class="text-light mb-2" href="login.php"><i class="fa fa-angle-right me-2"></i>Login</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="index.php" method="POST">
                        <?php print $subscription; ?>
                        <div class="input-group">
                            <input type="text" name="email" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary" name="signup">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Ayesha</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="#">Ayesha Sumudu Erandathi </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>