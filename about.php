<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Main Content -->
    <div class="container my-5">
        <div id="aboutContent" class="text-center">
            <?php
            // Check if 'section' parameter exists in the query string
            if (isset($_GET['section']) && !empty($_GET['section'])) {
                $section = strtolower(trim($_GET['section'])); // Convert to lowercase for consistency
                switch ($section) {
                    case 'vision':
                        echo "<h3>Our Vision</h3><p>To be a leader in providing quality education and fostering innovation.</p>";
                        break;
                    case 'mission':
                        echo "<h3>Our Mission</h3><p>Empowering individuals through exceptional education, ethical practices, and community service.</p>";
                        break;
                    case 'team':
                        echo "<h3>Our Team</h3><p>We have a dedicated team of professionals passionate about education and innovation.</p>";
                        break;
                    case 'institution':
                        echo "<h3>About Institution</h3><p>Our institution was established to provide holistic development and foster leadership skills in students.</p>";
                        break;
                    default:
                        echo "<h3>Welcome to About Us</h3><p>Please select a valid section from the 'About Us' dropdown menu.</p>";
                }
            } else {
                echo "<h3>Welcome to About Us</h3><p>Please select an option from the 'About Us' dropdown menu to learn more about us.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
