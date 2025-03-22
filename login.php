<?php include_once 'header.php';?>
<body>

    <div class="w-50 mx-auto" style="padding-top: 100px;">
    <h1 class="mb-3">Pleas sign in</h1>
    <form>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form2Example3" class="form-control" />
            <label class="form-label" for="form2Example3">Name</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form2Example4" class="form-control" />
            <label class="form-label" for="form2Example4">Surname</label>
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form2Example5" class="form-control" />
            <label class="form-label" for="form2Example5">Username</label>
        </div>
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    

  <!-- Submit button -->
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>

  </div>
</form>
    </div>

<?php include_once 'footer.php';?>