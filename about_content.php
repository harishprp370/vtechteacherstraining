<?php
if (isset($_GET['section'])) {
    $section = $_GET['section'];
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
            echo "<p class='text-danger'>Invalid section requested.</p>";
    }
} else {
    echo "<p class='text-danger'>No section specified.</p>";
}
?>
