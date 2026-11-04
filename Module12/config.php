    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
        }

        .btn-add {
            background: #667eea;
            color: white;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
        }

        .btn-add:hover {
            background: #764ba2;
            color: white;
        }
    </style>
</head>

<body>

<div class="form-card">

    <h2>Add New User</h2>

    <form action="add.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name"
                class="form-control"
                placeholder="Enter your name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username"
                class="form-control"
                placeholder="Enter your username" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email"
                class="form-control"
                placeholder="Enter your email" required>
        </div>

        <button type="submit" name="submit" class="btn-add">
            ADD USER
        </button>

    </form>

    <div class="text-center mt-3">
        <a href="dashboard.php">Back to Dashboard</a>
    </div>

    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
