<?php
// Read the content from content.php
include_once 'content.php';

// Initialize content variable
$content = '';

// Check if a specific content section is requested
if (isset($_GET['section'])) {
    $section = $_GET['section'];
    
    // Select the appropriate content based on the section
    switch ($section) {
        case 'homepage':
            $content = $homepageContent;
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
        case 'homepage':
            $homepageContent = $updatedContent;
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

    file_put_contents('content.php', '<?php' . PHP_EOL . '$homepageContent = <<<HTML' . PHP_EOL . $homepageContent . PHP_EOL . 'HTML;' . PHP_EOL . '$phishContent = <<<HTML' . PHP_EOL . $phishContent . PHP_EOL . 'HTML;' . PHP_EOL . '$aboutContent = <<<HTML' . PHP_EOL . $aboutContent . PHP_EOL . 'HTML;' . PHP_EOL . '$emailPhishing = <<<HTML' . PHP_EOL . $emailPhishing . PHP_EOL . 'HTML;' . PHP_EOL . '$vishing = <<<HTML' . PHP_EOL . $vishing . PHP_EOL . 'HTML;' . PHP_EOL . '$smishing = <<<HTML' . PHP_EOL . $smishing . PHP_EOL . 'HTML;' . PHP_EOL . '$webPhishing = <<<HTML' . PHP_EOL . $webPhishing . PHP_EOL . 'HTML;' . PHP_EOL . '$resources = <<<HTML' . PHP_EOL . $resources . PHP_EOL . 'HTML;' . PHP_EOL . '?>');

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
</head>
<nav>
    <!-- Logo added to the navigation bar -->
    <img src="PhishGuardian.png" alt="PhishGuardian Logo">
    <div class="left-links">
        <!-- Dynamic navigation links -->
        <a href="logout.php">Logout</a> 
        <a href="adminPage.html">Add Question</a>
        <a href="displayQuestions.php">Edit Questions</a>
        <a href="adminEditor.php">Manage User</a>
    </div>
</nav>
<title>Edit Content</title>
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
    }
    .btn-container button {
        margin-right: 10px;
    }
</style>
</head>
<body>
    <h1>Edit Content</h1>
    <form action="" method="post">
        <textarea name="content" rows="10" cols="50"><?php echo htmlspecialchars($content); ?></textarea>
        <br>
        <div class="btn-container">
            <button type="submit">Save</button>
            <button type="button" onclick="loadContent('homepage')">Homepage Content</button>
            <button type="button" onclick="loadContent('phishing')">Phishing Content</button>
            <button type="button" onclick="loadContent('about')">About Content</button>
            <button type="button" onclick="loadContent('emailPhishing')">Email Phishing Content</button>
            <button type="button" onclick="loadContent('vishing')">Vishing Content</button>
            <button type="button" onclick="loadContent('smishing')">Smishing Content</button>
            <button type="button" onclick="loadContent('webPhishing')">Web Phishing Content</button>
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






