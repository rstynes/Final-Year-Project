<?php
// Read the content from content.php
include_once 'content.php';
include 'dbh.inc.php';
// Check if User_ID is set in the session
if (!isset($_SESSION['AdminName'])) {
    http_response_code(401);
    // Redirect to a generic error page
    header("Location: error.php"); 
    exit; // Stop further execution
}
// Initialize content variable
$content = '';

// Check if a specific content section is requested
if (isset($_GET['section'])) {
    $section = $_GET['section'];
    
    // Select the appropriate content based on the section
    switch ($section) {
        case 'homepageHeading':
            $content = $homepageContentH2;
            break;
        case 'homepageP1':
            $content = $homepageContentP1;
            break;
        case 'homepageP2':
            $content = $homepageContentP2;
            break;
        case 'homepageHeading2':
            $content = $homepageContentHead;
            break;
        case 'homepageList':
            $content = $homepageContentList;
            break;
        case 'homepageHeading3':
            $content = $homepageContentHead2;
            break;
        case 'homepageP3':
            $content = $homepageContentP3;
            break;    
        case 'phishing':
            $content = $phishContent;
            break;
        case 'about':
            $content = $aboutContent;
            break; 
        case 'emailPhishing':
            $content = $emailPhishing;
            break;
        case 'vishing':
            $content = $vishing;
            break;
        case 'smishing':
            $content = $smishing;
            break;
        case 'webPhishing':
            $content = $webPhishing;
            break;
        case 'resources':
            $content = $resources;
            break;  
        // Add additional cases for other sections if needed
        default:
            // Default to empty content if section is not recognized
            $content = '';
    }
}

// Check if form is submitted for updating content
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the edited content from the form
    $updatedContent = $_POST['content'];

    // Write the updated content back to content.php based on the section
    switch ($section) {
        case 'homepageHeading':
            $homepageContentH2 = $updatedContent;
            break;
        case 'homepageP1':
            $homepageContentP1 = $updatedContent;
            break;
        case 'homepageP2':
            $homepageContentP2 = $updatedContent;
            break;
        case 'homepageHeading2':
            $homepageContentHead = $updatedContent;
            break;
        case 'homepageList':
            $homepageContentList = $updatedContent;
            break;
        case 'homepageHeading3':
            $homepageContentHead2 = $updatedContent;
            break;
        case 'homepageP3':
            $homepageContentP3 = $updatedContent;
            break;    
        case 'phishing':
            $phishContent = $updatedContent;
            break;
        case 'about':
            $aboutContent = $updatedContent;
            break;
        case 'emailPhishing':
            $emailPhishing = $updatedContent;
            break;
        case 'vishing':
            $vishing = $updatedContent;
            break;
        case 'smishing':
            $smishing = $updatedContent;
            break;
        case 'webPhishing':
            $webPhishing = $updatedContent;
            break;
        case 'resources':
            $resources = $updatedContent;
            break;  
        // Add additional cases for other sections if needed
    }

    file_put_contents('content.php', '<?php' . PHP_EOL .
    '$homepageContentH2 = <<<HTML' . PHP_EOL . $homepageContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentP1 = <<<HTML' . PHP_EOL . $homepageContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentP2 = <<<HTML' . PHP_EOL . $homepageContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentHead = <<<HTML' . PHP_EOL . $homepageContentHead . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentList = <<<HTML' . PHP_EOL . $homepageContentList . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentHead2 = <<<HTML' . PHP_EOL . $homepageContentHead2 . PHP_EOL . 'HTML;' . PHP_EOL .
    '$homepageContentP3 = <<<HTML' . PHP_EOL . $homepageContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
    '$phishContent = <<<HTML' . PHP_EOL . $phishContent . PHP_EOL . 'HTML;' . PHP_EOL .
    '$aboutContent = <<<HTML' . PHP_EOL . $aboutContent . PHP_EOL . 'HTML;' . PHP_EOL .
    '$emailPhishing = <<<HTML' . PHP_EOL . $emailPhishing . PHP_EOL . 'HTML;' . PHP_EOL .
    '$vishing = <<<HTML' . PHP_EOL . $vishing . PHP_EOL . 'HTML;' . PHP_EOL .
    '$smishing = <<<HTML' . PHP_EOL . $smishing . PHP_EOL . 'HTML;' . PHP_EOL .
    '$webPhishing = <<<HTML' . PHP_EOL . $webPhishing . PHP_EOL . 'HTML;' . PHP_EOL .
    '$resources = <<<HTML' . PHP_EOL . $resources . PHP_EOL . 'HTML;' . PHP_EOL .
    '?>');

    // Redirect to the same page to avoid form resubmission on refresh
    header('Location: editContent.php?section=' . $section);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PageStructure.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        textarea {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-container button {
            margin-right: 10px;
        }
        .section-buttons {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <!-- Logo added to the navigation bar -->
        <img src="PhishGuardian.png" alt="PhishGuardian Logo">
        <div class="left-links">
            <!-- Dynamic navigation links -->
            <a href="logout.php">Logout</a> 
            <a href="adminPage.php">Add Question</a>
            <a href="displayQuestions.php">Edit Questions</a>
            <a href="adminEditor.php">Manage User</a>
        </div>
    </nav>
    <h1>Edit Content</h1>
    <form action="" method="post">
        <textarea name="content" rows="10" cols="50"><?php echo htmlspecialchars($content); ?></textarea>
        <br>
        <div class="btn-container">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <button type="submit">Save</button>
        </div>
        <div class="section-buttons">
            <h2>Homepage Content</h2>
            <button type="button" onclick="loadContent('homepageHeading')">Homepage Heading 1</button>
            <button type="button" onclick="loadContent('homepageP1')">Homepage Paragraph 1</button>
            <button type="button" onclick="loadContent('homepageP2')">Homepage Paragraph 2</button>
            <button type="button" onclick="loadContent('homepageHeading2')">Homepage Heading 2</button>
            <button type="button" onclick="loadContent('homepageList')">Homepage List</button>
            <button type="button" onclick="loadContent('homepageHeading3')">Homepage Heading 3</button>
            <button type="button" onclick="loadContent('homepageP3')">Homepage Paragraph 3</button>
        </div>
        <div class="section-buttons">
            <h2>About Content</h2>
            <button type="button" onclick="loadContent('about')">About Content</button>
        </div>
        <div class="section-buttons">
            <h2>Phishing Content</h2>
            <button type="button" onclick="loadContent('phishing')">Phishing Content</button>
        </div>
        <div class="section-buttons">
            <h2>Email Phishing Content</h2>
            <button type="button" onclick="loadContent('emailPhishing')">Email Phishing Content</button>
        </div>
        <div class="section-buttons">
            <h2>Vishing Content</h2>
            <button type="button" onclick="loadContent('vishing')">Vishing Content</button>
        </div>
        <div class="section-buttons">
            <h2>Smishing Content</h2>
            <button type="button" onclick="loadContent('smishing')">Smishing Content</button>
        </div>
        <div class="section-buttons">
            <h2>Web Phishing Content</h2>
            <button type="button" onclick="loadContent('webPhishing')">Web Phishing Content</button>
        </div>
        <div class="section-buttons">
            <h2>Resources Content</h2>
            <button type="button" onclick="loadContent('resources')">Resources Content</button>
        </div>
    </form>

    <script>
        function loadContent(section) {
            window.location.href = 'editContent.php?section=' + section;
        }
    </script>
</body>
</html>







