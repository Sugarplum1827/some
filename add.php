<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $birthplace = $_POST['birthplace'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $civil = $_POST['civil'];
    $birthday = $_POST['birthday'];
    $blood = $_POST['blood'];
    $diagnosis = $_POST['diagnosis'];

    $sql = "INSERT INTO patients (name, age, address, gender, contact, birthplace, nationality, religion, civil, birthday, blood, diagnosis) 
            VALUES ('$name', $age, '$address', '$gender', '$contact', '$birthplace', '$nationality', '$religion', '$civil', '$birthday', '$blood', '$diagnosis')";

    if ($conn->query($sql) === TRUE) {
        echo "New patient added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
</head>
<body>
<a href="search.php"
class="btn btn-dark">back</a>
    <h1>Add Patient</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br><br>
        <label for="birthplace">Birthplace:</label>
        <input type="text" id="birthplace" name="birthplace" required><br><br>
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required><br><br>
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" required><br><br>
        <label for="civil">Civil Status:</label>
        <input type="text" id="civil" name="civil" required><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required><br><br>
        <label for="blood">Blood Type:</label>
        <input type="text" id="blood" name="blood" required><br><br>
        <label for="diagnosis">Diagnosis:</label>
        <input type="text" id="diagnosis" name="diagnosis" required><br><br>
        <input type="submit" value="Add Patient">
    </form>
</body>
</html>
