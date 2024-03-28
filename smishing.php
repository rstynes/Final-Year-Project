<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once 'dbh.inc.php';
include_once "decrypt.php";
include_once 'dbhKey.inc.php';
session_start();
$FK_USER_ID = $_SESSION['User_ID'];
$stmt = $conn2->prepare("SELECT keyData FROM KeyStore WHERE User_ID = ?");
$stmt->bind_param("s", $FK_USER_ID);
$stmt->execute();
$result = $stmt->get_result();

// If key data is found, extract the key
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $key = $row['keyData'];
    $keyBin = hex2bin($key);
}

// Retrieve user's username and photo from User table
$sql = "SELECT Username, Photo FROM User WHERE User_ID = $FK_USER_ID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['Username'];
$photo = $row['Photo'];

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PageStructure.css">
    <title>Smishing (SMS Phishing)</title>
</head>
<body>


<nav>
    <!-- Logo added to the navigation bar -->
    <img src="PhishGuardian.png" alt="PhishGuardian Logo">
    <div class="left-links">
        <!-- Dynamic navigation links -->
        <a href="HomePage.php">Home</a>
        <a href="about.php">About</a>
        <a href="phishMain.php">Phishing</a>
        <a href="get_answers.php">Quiz</a>
        <a href="leaderboard.php">Leaderboard</a>
        <a href="resources.php">Useful Links</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="right-links">
        <!-- Display username -->
        <a href="loggedIn.php" class="profile-link"><?php echo $username; ?></a>
        <!-- Display user photo if available -->
        <?php if ($photo) { ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode(decrypt_data($photo, $keyBin)); ?>" alt="Avatar" class="avatar">
        <?php } ?>
    </div>
</nav>
    <main>
    <section class="content-block">
        <?php 
        include_once 'content.php';
        echo $smishing; ?>
        </section>
    </main>
</body>
</html>