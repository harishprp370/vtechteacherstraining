<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | VTECH</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require "header.php" ?>
    <section class="home">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://placehold.co/200x70" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/200x70" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://placehold.co/200x70" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="about container">
        <div class="clearfix">
            <img src="src/images/books.jpg" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

            <p>
                A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
            </p>

            <p>
                As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
            </p>

            <p>
                And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
            </p>
        </div>
    </section>

    <!-- Counter Section -->
    <section id="counter-section" class="py-5" style="background: url('https://your-background-image-url') no-repeat center center/cover;">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-box p-4 bg-dark bg-opacity-75 rounded">
                        <div class="counter-number" data-count="42000">0</div>
                        <div class="counter-label mt-2">Candidates</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box p-4 bg-dark bg-opacity-75 rounded">
                        <div class="counter-number" data-count="620">0</div>
                        <div class="counter-label mt-2">Institutions</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box p-4 bg-dark bg-opacity-75 rounded">
                        <div class="counter-number" data-count="20">0</div>
                        <div class="counter-label mt-2">States</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box p-4 bg-dark bg-opacity-75 rounded">
                        <div class="counter-number" data-count="18300">0</div>
                        <div class="counter-label mt-2">Recruited</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Popular Courses-->
    <!-- Popular Courses Section -->
<section id="popular-courses" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Popular Courses</h2>
    <div class="row">
      <!-- Course 1 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course 1">
          <div class="card-body">
            <h5 class="card-title">Course Title 1</h5>
            <p class="card-text">Brief description of the course that highlights its key features and benefits.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>
      <!-- Course 2 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course 2">
          <div class="card-body">
            <h5 class="card-title">Course Title 2</h5>
            <p class="card-text">Brief description of the course that highlights its key features and benefits.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>
      <!-- Course 3 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course 3">
          <div class="card-body">
            <h5 class="card-title">Course Title 3</h5>
            <p class="card-text">Brief description of the course that highlights its key features and benefits.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>
      <!-- Course 4 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course 4">
          <div class="card-body">
            <h5 class="card-title">Course Title 4</h5>
            <p class="card-text">Brief description of the course that highlights its key features and benefits.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>
      <!-- Course 5 -->
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course 5">
          <div class="card-body">
            <h5 class="card-title">Course Title 5</h5>
            <p class="card-text">Brief description of the course that highlights its key features and benefits.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary w-100">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Explore More Button -->
    <div class="mt-4">
      <a href="#" class="btn btn-outline-primary">Explore More Courses</a>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">What Our Users Say</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="testimonial">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User 1">
            <h5>John Doe</h5>
            <p class="text-muted">"This platform has changed the way I learn. The courses are fantastic and the instructors are very knowledgeable."</p>
          </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="testimonial">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User 2">
            <h5>Jane Smith</h5>
            <p class="text-muted">"Absolutely love it! The interface is user-friendly, and I’ve gained so much knowledge."</p>
          </div>
        </div>
        <!-- Testimonial 3 -->
        <div class="carousel-item">
          <div class="testimonial">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User 3">
            <h5>Michael Brown</h5>
            <p class="text-muted">"A great experience overall. The resources and support are top-notch."</p>
          </div>
        </div>
        <!-- Testimonial 4 -->
        <div class="carousel-item">
          <div class="testimonial">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User 4">
            <h5>Lisa White</h5>
            <p class="text-muted">"I highly recommend this platform to anyone looking to improve their skills."</p>
          </div>
        </div>
        <!-- Testimonial 5 -->
        <div class="carousel-item">
          <div class="testimonial">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User 5">
            <h5>David Lee</h5>
            <p class="text-muted">"Fantastic experience! The courses are well-structured and easy to follow."</p>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>




    <?php require "footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="js/script.js"></script>

</html>