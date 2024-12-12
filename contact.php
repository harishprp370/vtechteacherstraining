<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<div class="contact-section">
    <div class="container">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-6 contact-info">
                <h2>You Can Contact With Us</h2>
                <p>V TECH TEACHERS TRAINING</p>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt"></i> Bengaluru, Karnataka, India</p>
                    <p><i class="fas fa-phone"></i> Phone: 9739561697, 9739561299</p>
                    <p><i class="fas fa-globe"></i> Web: <a href="http://www.vtechteachertraining.org" target="_blank"></a>www.vtechteachertraining.org</p>
                </div>
                <h4>Also Can Find Us</h4>
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
            </div>

            <!-- Right Section -->
            <div class="col-md-6 contact-form">
                <h2>SEND YOUR MESSAGE</h2>
                <form>
                    <input type="text" placeholder="Enter Name" class="form-control mb-3" required>
                    <input type="text" placeholder="Enter Phone" class="form-control mb-3" required>
                    <input type="email" placeholder="Enter Email" class="form-control mb-3" required>
                    <textarea placeholder="Enter Message" class="form-control mb-3" rows="5" required></textarea>
                    <button type="submit" class="btn btn-primary">SEND EMAIL</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <script>
        // JavaScript validation (additional layer)
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !phone || !message) {
                e.preventDefault();
                alert("All fields are required!");
            } else if (!/^[0-9]{10}$/.test(phone)) {
                e.preventDefault();
                alert("Enter a valid 10-digit phone number.");
            }
        });
    </script>
</body>
</html>
<?php include 'footer.php' ?>