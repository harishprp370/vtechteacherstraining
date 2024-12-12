<style>
    nav{
        padding: 1em;
    }
    .navbar-nav .nav-item{
        margin: 0 60px;
        font-family: 'Times New Roman', Times, serif;
        font-size: 1rem;
        color: #42f593;
    }

    .nav-item :hover{
        color: #42f593;
    }
    .dropdown-menu{
        background-color: #fff;
        -webkit-text-fill-color: black;
    }
</style>
<div class="py-3 border-bottom" style="background-color: #bf282f;">
    <div class="container-fluid d-flex align-items-center justify-content-space-around">
        <div class="logo">
            <img src="src/images/logo.jpg" alt="College Logo" class="img-fluid" style="max-width: 100px;">
        </div>
        <div class="col-md text-center text-white">
            <h1 class="title" style="font-family: Arial-bold;">V TECH TEACHERS TRAINING CENTER</h1>
            <p class="mb-0">Spoken English and Nursery Teacher Training (NTT)</p>
        </div>
    </div>
</div>

<!-- Third Bar (Navigation Bar) -->
<nav class="navbar navbar-expand-lg navbar-light border-top border-danger"  style="background-color: #e8af75;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase fw-bold" href="about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.php#vision">Vision</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about.php#mission">Mission</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about.php#team">Our Team</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="about.php#about">About Institution</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="courses.php">Programs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>