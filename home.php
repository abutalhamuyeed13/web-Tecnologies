<button class="button" style="vertical-align:middle"><span>Online shopping</span></button>

<section class="registration-form">
    <h2 style="text-align:center;">Register Here</h2>
    <p style="text-align:center;">Fill-up your information to complete your registration process</p> <br>
    <form action="register.php" method="post">
        <label for="name">Write your full name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Write Phone number</label>
        <input type="text" id="phone" name="phone" required>

        <label for="Address">Full address</label>
        <input type="text" id="address" name="address" required> <br>

        <input type="checkbox" name="terms" required> I have agreed with  <a href="#">Terms & Conditions</a> <br><br>

        <h2 class="btn btn-primay" style="text-align:center;">
            <button style="color: white; background-color: rgb(108,22,189);" type="submit" class="registerbtn">Register</button>
        </h2> <br>

        <h4 style="text-align:center;">
            <p>Already have an account?<br><br><a href="#">Log in Now</a></p>
        </h4> <br>

        <h5 style="text-align:center;">
            <p>By creating an account, you agree to our <a href="#">Privacy Policy</a></p>
        </h5>
    </form>
</section>

<?php
// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "online_shopping_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $password, $phone, $address);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p style='text-align:center;'>Registration successful!</p>";
    } else {
        echo "<p style='text-align:center;'>Error: " . $stmt->error . "</p>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>