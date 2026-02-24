<?php include ('header.php') ?>


<section class="bg-light vh-100 d-flex">
  <div class="col-7 col-sm-4 m-auto">
    <div class="card ">
      <div class="card-body">
        <div class=" mx-auto d-flex " style="width:100px;height:100px "><i class="fa fa-user text-dark fa-3x m-auto"></i>
        </div>
       
        <form action="actions/login.php" method="POST">
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="email" name="email" class="form-control" />
            <label class="form-label" for="form1Example1">Email address</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>

          <!-- Submit button -->
          <button name="login" class="btn btn-primary btn-block">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include ('footer.php') ?>