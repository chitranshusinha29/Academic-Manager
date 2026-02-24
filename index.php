<?php include ('header.php') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">
        <img src="image/lbss.png" alt="logo" width="88" height="65">

        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav .ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Contact us</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active float-right" href="login.php"><i class="fa fa-user mr-2"></i>Login</a>

                </li>
            </ul>

        </div>
    </div>
</nav>


<div class="d-sm-flex d-block"
    style="height:650px; background-image: linear-gradient(-45deg, #000080 50%, transparent 50%);">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-1" style="font-weight: 700;">LBS SCHOOL</h1>
                <p>Established in 2000 , our school is committed to empowering students to reach their full
                    potential by fostering a love for learning, promoting critical thinking skills, and nurturing
                    individual talents within a diverse and inclusive community.</p>
                <p class="d-sm-none d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia architecto,
                    sit, placeat, officia
                    similique eos natus adipisci voluptate recusandae dicta velit. Nesciunt dolore unde corrupti facere
                    libero soluta harum quasi, porro suscipit quas sit explicabo, numquam distinctio ea. Iusto,
                    provident id. </p>
                <a href="tel:+918267901386" class="btn btn-primary">Call Us</a>
                <a href="enquiry.php" class="btn btn-primary d-sm-none d-inline-block">Enquiry</a>

            </div>

            <div class=" col-lg-6 d-sm-block d-none">
                <div class="w-50 mx-auto card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <h3 class="text-center">Enquiry Form</h3>
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your Name</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="email" id="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control">
                                <label for="mobile">Your Mobile</label>
                            </div>
                            <!-- Material input -->
                            <div class="md-form">
                                <!-- <input type="text" id="class" class="form-control"> -->
                                <textarea name="" id="message" class="form-control md-textarea" rows="3"></textarea>
                                <label for="message">Your Query</label>
                            </div>

                            <button class="btn btn-block btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about us -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="image/schoolimg.jpg" alt="about" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 style="font-weight: 650;">About LBS</h2>
                <div class="pr-5">
                    <p>Nestled amidst rolling hills and embraced by verdant trees, our school stands as a beacon of
                        knowledge and inspiration. Within its walls, a vibrant community of learners gathers, their
                        laughter and curiosity filling the air with an infectious energy. Here, dedicated educators
                        ignite the flames of curiosity, nurturing young minds to flourish and thrive. Through a rich
                        tapestry of academic pursuits, creative expression, and communal engagement, our school fosters
                        a culture of lifelong learning and meaningful connections. With each passing day, we weave the
                        threads of curiosity and discovery, shaping the leaders and innovators of tomorrow.</p>
                    <p>Within these hallowed halls, diversity thrives, fostering an environment of acceptance and
                        understanding.  Our school
                        stands not just as a place of education, but as a sanctuary where dreams take flight and futures
                        are crafted with purpose.</p>
                    <!-- <a href="about-us.php" class="btn btn-secondary">Know More</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- achivement -->
<section class="py-5">
    <div>
        <h2 class="text-center mb-5">Achivements</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="d-flex">
                        <img src="image/i2.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="d-flex">
                        <img src="image/i4.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="d-flex">
                        <img src="image/i3.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="d-flex">
                        <img src="image/i1.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer style="background:url(image/books.jpg) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#000000bb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Useful Links</h5>
                    <ul class="fa-ul ml-4">
                    <li><a href="index.php" class="text-secondary"><span class="fa-li"><i
                                            class="fa-solid fa-angle-right"></i></span>Home</a></li>
                            <li><a href="login.php" class="text-secondary"><span class="fa-li"><i
                                            class="fa-solid fa-angle-right"></i></span>Login</a></li>
                            <li><a href="" class="text-secondary"><span class="fa-li"><i
                                            class="fa-solid fa-angle-right"></i></span>About us</a></li>
                            <li><a href="" class="text-secondary"><span class="fa-li"><i
                                            class="fa-solid fa-angle-right"></i></span>Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Us</h5>
                    <!-- <form action="">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm btn-block">Submit</button>
                        </form> -->
                    <a><span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x fa-inverse text-dark"></i>

                        </span>9772770306</a>
                    <br>
                    <a><span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x fa-inverse text-dark"></i>

                        </span>9828872632</a>
                    <br>
                    <a><span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x fa-inverse text-dark"></i>

                        </span>lbsschool@gmail.com</a>
                </div>
                <div class="col-lg-3">
                    <h5>Location</h5>
                    <p>Bharonda Kalan, Rajasthan 333024</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.334746895368!2d75.5281060752677!3d28.07533037597361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39132ffd24114267%3A0xedb3694a8a6008d1!2sLAL%20BAHADUR%20SHASTRI%20SENIOR%20SECONDARY%20SCHOOL%2CBHARAUNDA%20KALAN!5e0!3m2!1sen!2sin!4v1714587238240!5m2!1sen!2sin"
                        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-dark text-light text-center">
    <div class="container-fluid">
        Copyright © 2024 LBS School.All Rights are reserved.
    </div>
</section>


<?php include ('footer.php') ?>