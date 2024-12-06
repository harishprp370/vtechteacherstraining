<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V Tech - Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }
        .course-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .course-image {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<section class="about-us-section">
    <div class="about-us-content">
        <h2>PROGRAMS WE OFFER</h2>
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
    <div class="container py-5">        
        <div class="row">
            <!-- 1 Year NTT Diploma Course -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="src/images/course1.jpg" class="card-img-top course-image" alt="1 Year NTT Diploma">
                    <div class="card-body">
                        <h5 class="card-title">1-Year Nursery Teacher Training Diploma</h5>
                        <p class="card-text">Comprehensive training for aspiring preschool teachers with practical exposure.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">Duration: 1 Year</span>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#courseModal1">More Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 Year Advanced NTT Program -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="src/images/course2.jpg" class="card-img-top course-image" alt="2 Year Advanced NTT">
                    <div class="card-body">
                        <h5 class="card-title">2-Year Advanced Nursery Teacher Training Program</h5>
                        <p class="card-text">In-depth program focusing on advanced teaching techniques and comprehensive skills.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">Duration: 2 Years</span>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#courseModal2">More Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spoken English Course -->
            <div class="col-md-4">
                <div class="card course-card">
                    <img src="src/images/course3.jpg" class="card-img-top course-image" alt="Spoken English">
                    <div class="card-body">
                        <h5 class="card-title">Spoken English Mastery Program</h5>
                        <p class="card-text">Enhance your communication skills with our comprehensive English speaking course.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">Duration: 6 Months</span>
                            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#courseModal3">More Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Detail Modals -->
    <!-- 1 Year NTT Diploma Modal -->
    <div class="modal fade" id="courseModal1" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">1-Year Nursery Teacher Training Diploma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="src/images/course1.jpg" class="img-fluid mb-3" alt="Course Details">
                        </div>
                        <div class="col-md-6">
                            <h6>Course Highlights:</h6>
                            <ul>
                                <li>Comprehensive early childhood education training</li>
                                <li>Practical classroom exposure</li>
                                <li>Free computer basics classes</li>
                                <li>Complimentary Spoken English classes</li>
                                <li>100% placement assistance</li>
                            </ul>
                            <h6>Eligibility:</h6>
                            <p>10th/PUC Pass or Fail, Any Graduate (Age No Bar)</p>
                            <h6>Course Fee:</h6>
                            <p>₹25,000 (Installment options available)</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal1">Get a Quote</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 2 Year Advanced NTT Modal -->
    <div class="modal fade" id="courseModal2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">2-Year Advanced Nursery Teacher Training Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="src/images/course2.jpg" class="img-fluid mb-3" alt="Course Details">
                        </div>
                        <div class="col-md-6">
                            <h6>Course Highlights:</h6>
                            <ul>
                                <li>Advanced teaching methodologies</li>
                                <li>Extended practical training</li>
                                <li>Advanced communication skills</li>
                                <li>Comprehensive curriculum</li>
                                <li>International certification</li>
                            </ul>
                            <h6>Eligibility:</h6>
                            <p>Graduates with passion for early childhood education</p>
                            <h6>Course Fee:</h6>
                            <p>₹45,000 (Flexible payment plans)</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal2">Get a Quote</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Spoken English Modal -->
    <div class="modal fade" id="courseModal3" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Spoken English Mastery Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="src/images/course3.jpg" class="img-fluid mb-3" alt="Course Details">
                        </div>
                        <div class="col-md-6">
                            <h6>Course Highlights:</h6>
                            <ul>
                                <li>Conversational English training</li>
                                <li>Grammar and pronunciation focus</li>
                                <li>Interactive learning sessions</li>
                                <li>Confidence-building exercises</li>
                                <li>Industry-relevant communication skills</li>
                            </ul>
                            <h6>Eligibility:</h6>
                            <p>All age groups welcome, basic English knowledge preferred</p>
                            <h6>Course Fee:</h6>
                            <p>₹15,000 (Flexible batch timings)</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal3">Get a Quote</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Modals -->
    <div class="modal fade" id="quoteModal1" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quote - 1 Year NTT Diploma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Similar Quote Modals for Course 2 and 3 -->
    <div class="modal fade" id="quoteModal2" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quote - 2 Year Advanced NTT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="quoteModal3" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quote - Spoken English</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>