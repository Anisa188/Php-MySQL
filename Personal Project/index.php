
<?php
include "config.php";

$result = $conn->query(
    "SELECT * FROM personal_project ORDER BY id DESC"
);

$total = $conn->query(
    "SELECT COUNT(*) AS total FROM personal_project"
)->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personal Project | Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo">
        Personal<span>Project.</span>
    </a>

    <div class="nav-links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#students">Students</a>
        <a href="#contact">Contact</a>
        <a href="dashboard.php" class="nav-button">Admin Panel</a>
    </div>
</nav>

<section class="hero" id="home">
    <div class="hero-content">
        <p class="tagline">WELCOME TO OUR WEBSITE</p>

        <h1>Building A Better<br>
        <span>Future Together.</span></h1>

        <p class="hero-description">
            Discover a smarter way to organize student information.
            Manage records and keep everything in one place.
        </p>

        <a href="#students" class="primary-button">
            Explore Students →
        </a>
    </div>

    <div class="hero-image">
        <div class="image-card">
            <div class="image-icon">🎓</div>
            <h2>Education</h2>
            <p>Learn. Grow. Succeed.</p>
        </div>
    </div>
</section>

<section class="about" id="about">
    <p class="section-label">ABOUT US</p>
    <h2>Welcome to Personal Project</h2>

    <p>
        Our website is designed to make student management
        easier, faster and more organized.
        We provide a simple platform to manage student records.
    </p>

    <div class="about-cards">
        <div class="about-card">
            <span>📚</span>
            <h3>Education</h3>
            <p>Organize student information easily.</p>
        </div>

        <div class="about-card">
            <span>💻</span>
            <h3>Technology</h3>
            <p>Simple and modern digital management.</p>
        </div>

        <div class="about-card">
            <span>🚀</span>
            <h3>Progress</h3>
            <p>Keep your records organized.</p>
        </div>
    </div>
</section>

<section class="students" id="students">
    <p class="section-label">OUR STUDENTS</p>
    <h2>Student Information</h2>

    <p class="student-count">
        Currently registered students:
        <strong><?= $total ?></strong>
    </p>

    <div class="student-table">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>

            <?php if ($result->num_rows > 0): ?>

                <?php while($row = $result->fetch_assoc()): ?>

                <tr>
                    <td><?= $row['id'] ?></td>

                    <td>
                        <?= htmlspecialchars($row['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['email']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['phone']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($row['course']) ?>
                    </td>

                    <td>
                        <div class="actions">

                            <a href="edit.php?id=<?= $row['id'] ?>"
                               class="action-btn edit-btn">
                                ✏️ Edit
                            </a>

                            <form action="delete.php"
                                  method="POST"
                                  onsubmit="return confirm('Delete this student?')">

                                <input type="hidden"
                                       name="id"
                                       value="<?= $row['id'] ?>">

                                <button type="submit"
                                        class="action-btn delete-btn">
                                    🗑 Delete
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>

                <?php endwhile; ?>

            <?php else: ?>

                <tr>
                    <td colspan="6">
                        No students registered yet.
                    </td>
                </tr>

            <?php endif; ?>

        </table>
    </div>

    <br><br>

    <a href="add.php" class="primary-button">
        + Add New Student
    </a>

</section>

<section class="contact" id="contact">
    <p class="section-label">CONTACT</p>
    <h2>Get In Touch</h2>
    <p>Thank you for visiting Personal Project.</p>

    <a href="dashboard.php" class="primary-button">
        Manage Students
    </a>
</section>

<footer>
    <h3>Personal Project.</h3>
    <p>Student Management System</p>
    <p>© 2026 Personal Project. All Rights Reserved.</p>
</footer>

</body>
</html>
