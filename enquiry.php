<?php include ('header.php') ?>

<section class="bg-light vh-100 d-flex">
    <div class=" col-10 m-auto">
        <div class="card">
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
</section>

<?php include ('footer.php') ?>