<?php 
include 'header.php'; // Assuming you have a header file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About V Tech Teacher Training Centre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <style>
        /* Custom CSS for About Page */
.container-fluid1{
    width: 80%;
    margin: 40px auto;
    padding: 20px;
    background-color: #f8f9fa;
}

#about-navigation {
    margin-top: 50px;
}

.nav-pills .nav-link {
    color: #333;
    background-color: #f8f9fa;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.nav-pills .nav-link.active {
    background-color: #007bff;
    color: white;
}

.tab-content {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

h2 {
    color: #007bff;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.team-member img {
    max-width: 250px;
    height: 250px;
    object-fit: cover;
}

@media (max-width: 768px) {
    #about-navigation {
        flex-direction: column;
    }
}
    </style>
</head>
<body>
<section class="about-us-section">
    <div class="about-us-content">
        <h2>About Us</h2>
    </div>
</section>
<style>
    .about-us-section {
    position: relative;
    background-image: url('src/images/image1.jpg'); /* Replace with your image URL */
    background-size: cover;
    background-position: center;
    height: 200px; /* Adjust height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    padding: 20px;
}

.about-us-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Adds a dark overlay for better text visibility */
    z-index: 1;
}

.about-us-content {
    position: relative;
    z-index: 2;
    max-width: 600px;
}

.about-us-content h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}

</style>
    <div class="container-fluid1 mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#vision" class="list-group-item list-group-item-action" data-bs-toggle="tab">Vision</a>
                    <a href="#mission" class="list-group-item list-group-item-action" data-bs-toggle="tab">Mission</a>
                    <a href="#about" class="list-group-item list-group-item-action" data-bs-toggle="tab">About Institution</a>
                    <a href="#team" class="list-group-item list-group-item-action" data-bs-toggle="tab">Our Team</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane" id="vision">
                        <h2>Our Vision</h2>
                        <p>To be a leading institution in transforming aspiring educators into skilled, confident, and compassionate preschool teachers who can make a significant impact in early childhood education.</p>
                        <img src="https://placehold.co/600x400" alt="Vision" class="img-fluid rounded mx-auto d-block">
                    </div>

                    <div class="tab-pane" id="mission">
                        <h2>Our Mission</h2>
                        <p>To provide comprehensive, high-quality teacher training that empowers individuals with practical skills, communication expertise, and the confidence to excel in early childhood education.</p>
                        <img src="https://placehold.co/600x400" alt="Mission" class="img-fluid rounded mx-auto d-block">
                    </div>

                    <div class="tab-pane" id="about">
                        <h2>About Institution</h2>
                        <p>V Tech Teacher Training Centre is a premier institution dedicated to nurturing the next generation of preschool educators. Established with the vision of transforming passionate individuals into skilled teachers.</p>
                        <img src="https://placehold.co/600x400" alt="Institution" class="img-fluid rounded mx-auto d-block">
                    </div>

                    <div class="tab-pane" id="team">
                        <h2>Our Team</h2>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="https://placehold.co/300X300" alt="Team Member 1" class="img-fluid rounded-circle mb-3">
                                <h4>Jane Doe</h4>
                                <p>Founder & Chief Mentor</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://placehold.co/300X300" alt="Team Member 2" class="img-fluid rounded-circle mb-3">
                                <h4>John Smith</h4>
                                <p>Academic Director</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="https://placehold.co/300X300" alt="Team Member 3" class="img-fluid rounded-circle mb-3">
                                <h4>Emily Johnson</h4>
                                <p>Training Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically open the correct tab based on URL hash
        document.addEventListener('DOMContentLoaded', function() {
            // Get the hash from the URL
            var hash = window.location.hash.substring(1);
            
            // If a valid hash exists, activate that tab
            if(['vision', 'mission', 'about', 'team'].includes(hash)) {
                var triggerEl = document.querySelector(`a[href="#${hash}"]`);
                if (triggerEl) {
                    // Activate the tab
                    var tab = new bootstrap.Tab(triggerEl);
                    tab.show();
                }
            } else {
                // If no hash or invalid hash, default to vision
                var defaultTab = document.querySelector('a[href="#vision"]');
                var tab = new bootstrap.Tab(defaultTab);
                tab.show();
            }
        });
    </script>
</body>
</html>

<?php 
include 'footer.php'; // Assuming you have a footer file
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Tab navigation functionality (though Bootstrap handles most of this)
    const tabs = document.querySelectorAll('#v-pills-tab .nav-link');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
        });
    });

    // Optional: Add smooth scrolling or additional interactions
    const navLinks = document.querySelectorAll('#about-navigation .nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Prevent default anchor behavior
            e.preventDefault();
            
            // Get the target section
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            // Scroll to section smoothly
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });
});
</script>