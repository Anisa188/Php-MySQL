
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .register-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .card-header {
            background: transparent;
            border: none;
            text-align: center;
            padding-top: 25px;
        }

        .card-header h2 {
            font-weight: bold;
            color: #333;
        }

        .card-header p {
            color: #888;
        }

        .form-label {
            font-weight: 600;
            color: #444;
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 5px rgba(118,75,162,0.3);
        }

        .btn-register {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            padding: 12px;
            border-radius: 10px;
            color: white;
            font-weight: bold;
        }

        .btn-register:hover {
            opacity: 0.9;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="card register-card">

                <div class="card-header">
                    <h2>Create Account</h2>
                    <p>Fill in your details to get started</p>
                </div>

                <div class="card-body">

                    <form action="add.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name"
                                class="form-control"
                                placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Surname</label>
                            <input type="text" name="surname"
                                class="form-control"
                                placeholder="Enter your surname" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email"
                                class="form-control"
                                placeholder="Enter your email" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control"
                                placeholder="Create a password"
                                minlength="6" required>
                        </div>

                        <button type="submit" name="save"
                            class="btn btn-register w-100">
                            Create Account
                        </button>

                    </form>

                    <div class="text-center mt-3">
                        <a href="dashboard.php">Go to Dashboard</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
