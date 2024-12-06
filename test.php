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