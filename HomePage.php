<?php
// Include necessary files and start session
include_once 'dbh.inc.php';
include_once "decrypt.php";
include_once 'dbhKey.inc.php';
include_once 'homepageContent.php';
session_start();

// Retrieve user's key data from KeyStore
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PageStructure.css">

    <title>Phishing Awareness</title>
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
            <div class="content">
                <h2><?php echo $welcomeMessage; ?></h2>
                <p><?php echo $introParagraph; ?></p>
                <p><?php echo $phishingInfo; ?></p>
                <h2><?php echo $exploreSections; ?></h2>
                <ul>
                    <?php foreach ($sectionsList as $section => $description): ?>
                        <li><strong><?php echo $section; ?>:</strong> <?php echo $description; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h2><?php echo $startLearning; ?></h2>
                <p><?php echo $endMessage; ?></p>
            </div>
        </section>
    </main>
</body>
</html>



