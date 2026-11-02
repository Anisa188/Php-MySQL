<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
          <h3>Registration Form</h3>
        </div>

        <div class="card-body">
          <form>

            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control"
                     placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control"
                     placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control"
                     placeholder="Enter password" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Gender</label>
              <select class="form-select">
                <option selected disabled>Select gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Country</label>
              <select class="form-select">
                <option selected disabled>Select country</option>
                <option>Kosovo</option>
                <option>Albania</option>
                <option>Germany</option>
                <option>United States</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" rows="3"
                        placeholder="Write something..."></textarea>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox"
                     id="terms" required>
              <label class="form-check-label" for="terms">
                I agree to the terms and conditions
              </label>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              Register
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js">
</body>
</html>