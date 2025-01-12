<?php
// Database connection
$host = 'localhost';  // Database host for localhost
$username = 'root';   // Database username for localhost
$password = '';       // Database password for localhost
$database = 'student_attendance';  // Your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    // Insert data into database
    $sql = "INSERT INTO students (id, name, email, department) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $id, $name, $email, $department);
        if ($stmt->execute()) {
            echo "New student registered successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Student</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.5s ease-in-out;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #555;
        }

        input, select, button {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
            outline: none;
        }

        button {
            background: #6a11cb;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background: #2575fc;
            transform: translateY(-2px);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #6a11cb;
            text-decoration: none;
            font-weight: 500;
        }

        a:hover {
            text-decoration: underline;
        }

        .success-message {
            color: #28a745;
            text-align: center;
            margin-bottom: 1rem;
        }

        .error-message {
            color: #dc3545;
            text-align: center;
            margin-bottom: 1rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register New Student</h1>
        <form method="POST" action="">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>
            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="department">Department:</label>
            <select name="department" id="department" required>
                <option value="Computer Science">Computer Science</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
            </select>
            
            <button type="submit">Register</button>
        </form>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>