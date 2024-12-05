<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "admin";
$db_name = "admin_db    ";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $objectives = $_POST['objectives'];
    $skills = $_POST['skills'];
    $educational = $_POST['educational'];
    $status = $_POST['status'];

    // Insert data into the database
    $sql = "INSERT INTO usersdata (full_name, email_address, phone_number, birth_date, gender, address, objectives, skills, educational, status)
            VALUES ('$name', '$email', '$contact', '$birthdate', '$gender', '$address', '$objectives', '$skills', '$educational', '$status')";

    if ($conn->query($sql) === TRUE) {
        // Pagsuccess ung submit madidisplay to
        echo '
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center;">
        <div style="background-color: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px;">
            <h2 style="color: #4CAF50;">Submission Successful!</h2>
            <p>Your details have been submitted successfully.</p>
            <form action="dashboard.php" method="get">
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                    Go to Dashboard
                </button>
            </form>
        </div>
    </div>
';
    } else {
        echo "Submit Unsuccessful: " . $conn->error;
    }

}
$conn->close();
?>