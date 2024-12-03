<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | V Tech Teacher Training Centre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .course-img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; // Include header ?>

    <!-- Hero Section -->
    <div class="bg-primary text-white text-center py-5">
        <h1>Spoken English and Nursery Teacher Training (NTT)</h1>
        <p>Admissions Open for NTT (Nursery Teacher Training)</p>
    </div>

    <!-- Courses Offered Section -->
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Programs Offered</h2>
        </div>
        <div class="row g-4">
            <!-- Course 1 -->
            <div class="col-md-6">
                <div class="card border-primary">
                    <img src="https://via.placeholder.com/300x200   " alt="1-Year Diploma in NTT" class="card-img-top course-img">
                    <div class="card-body">
                        <h4 class="card-title">1-Year Diploma in Nursery Teacher Training (NTT)</h4>
                        <ul class="list-unstyled">
                            <li>✔ Comprehensive training in early childhood education.</li>
                            <li>✔ Hands-on teaching methodologies and practical exposure.</li>
                            <li>✔ Includes FREE Spoken English and Basic Computer Classes.</li>
                        </ul>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enrollModal" data-course="1-Year Diploma in Nursery Teacher Training (NTT)">Enroll Now</button>
                    </div>
                </div>
            </div>
            <!-- Course 2 -->
            <div class="col-md-6">
                <div class="card border-primary">
                    <img src="https://via.placeholder.com/300x200" alt="2-Year Advanced NTT" class="card-img-top course-img">
                    <div class="card-body">
                        <h4 class="card-title">2-Year Advanced Nursery Teacher Training Program</h4>
                        <ul class="list-unstyled">
                            <li>✔ In-depth program focusing on advanced teaching techniques.</li>
                            <li>✔ Practical classroom training and enhanced learning modules.</li>
                        </ul>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enrollModal" data-course="2-Year Advanced Nursery Teacher Training Program">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enrollment Modal -->
    <div class="modal fade" id="enrollModal" tabindex="-1" aria-labelledby="enrollModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollModalLabel">Enroll Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="enroll.php" method="POST" id="enrollmentForm">
                        <input type="hidden" name="course_name" id="courseNameInput">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message (Optional)</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; // Include footer ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Populate course name in modal
        const enrollButtons = document.querySelectorAll('[data-bs-target="#enrollModal"]');
        const courseNameInput = document.getElementById('courseNameInput');
        enrollButtons.forEach(button => {
            button.addEventListener('click', () => {
                const courseName = button.getAttribute('data-course');
                courseNameInput.value = courseName;
            });
        });
    </script>
</body>
</html>
