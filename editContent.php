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
        case 'about':
            $content = $aboutContentH1;
            break; 
        case 'aboutP1':
            $content = $aboutContentP1;
            break;
        case 'aboutH2':
            $content = $aboutContentH2;
            break;
        case 'aboutP2':
            $content = $aboutContentP2;
            break;
        case 'aboutH3':
            $content = $aboutContentH3;
            break;
        case 'aboutP3':
            $content = $aboutContentP3;
            break;
        case 'aboutH4':
            $content = $aboutContentH4;
            break;
        case 'aboutList':
            $content = $aboutContentList;
            break;
        case 'aboutH5':
            $content = $aboutContentH5;
            break;
        case 'aboutP4':
            $content = $aboutContentP4;
            break;
        case 'aboutLink':
            $content = $aboutContentLink;
            break;   
        case 'vishing':
            $content = $vishingContentH1;
            break;
        case 'vishingP1':
            $content = $vishingContentP1;
            break;
        case 'vishingP2':
            $content = $vishingContentP2;
            break;
        case 'vishingList1':
            $content = $vishingContentList1;
            break;
        case 'vishingP3':
            $content = $vishingContentP3;
            break;
        case 'vishingPic':
            $content = $vishingContentPic;
            break;
        case 'vishingP4':
            $content = $vishingContentP4;
            break;
        case 'vishingList2':
            $content = $vishingContentList2;
            break;
        case 'vishingH2':
            $content = $vishingContentH2;
            break;
        case 'vishingP5':
            $content = $vishingContentP5;
            break;
        case 'vishingH3':
            $content = $vishingContentH3;
            break;
        case 'vishingList3':
            $content = $vishingContentList3;
            break;
        case 'vishingLink':
            $content = $vishingContentLink;
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
        case 'phishContentH1':
            $content = $phishContentH1;
            break;
        case 'phishContentP1':
            $content = $phishContentP1;
            break;
        case 'phishContentH2':
            $content = $phishContentH2;
            break;
        case 'phishContentP2':
            $content = $phishContentP2;
            break;
        case 'phishContentP3':
            $content = $phishContentP3;
            break;
        case 'phishContentVideo':
            $content = $phishContentVideo;
            break;
        case 'phishContentExploreH2':
            $content = $phishContentExploreH2;
            break;
        case 'phishContentP4':
            $content = $phishContentP4;
            break;
        case 'phishContentLinks':
            $content = $phishContentLinks;
            break;
        case 'emailContentH1':
            $content = $emailContentH1;
            break;
        case 'emailContentP1':
            $content = $emailContentP1;
            break;
        case 'emailContentList1':
            $content = $emailContentList1;
            break;
        case 'emailContentP2':
            $content = $emailContentP2;
            break;
        case 'emailPic':
            $content = $emailPic;
            break;
        case 'emailContentP3':
            $content = $emailContentP3;
            break;
        case 'emailContentList2':
            $content = $emailContentList2;
            break;
        case 'emailContentP4':
            $content = $emailContentP4;
            break;
        case 'emailContentH2':
            $content = $emailContentH2;
            break;
        case 'emailContentP5':
            $content = $emailContentP5;
            break;
        case 'emailContentList3':
            $content = $emailContentList3;
            break;
        case 'emailContentLink':
            $content = $emailContentLink;
            break;
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
        case 'about':
            $aboutContentH1 = $updatedContent;
            break; 
        case 'aboutP1':
            $aboutContentP1 = $updatedContent;
            break;
        case 'aboutH2':
            $aboutContentH2 = $updatedContent;
            break;
        case 'aboutP2':
            $aboutContentP2 = $updatedContent;
            break;
        case 'aboutH3':
            $aboutContentH3 = $updatedContent;
            break;
        case 'aboutP3':
            $aboutContentP3 = $updatedContent;
            break;
        case 'aboutH4':
            $aboutContentH4 = $updatedContent;
            break;
        case 'aboutList':
            $aboutContentList = $updatedContent;
            break;
        case 'aboutH5':
            $aboutContentH5 = $updatedContent;
            break;
        case 'aboutP4':
            $aboutContentP4 = $updatedContent;
            break;
        case 'aboutLink':
            $aboutContentLink = $updatedContent;
            break;   
        case 'vishing':
            $vishingContentH1 = $updatedContent;
            break;
        case 'vishingP1':
            $vishingContentP1 = $updatedContent;
            break;
        case 'vishingP2':
            $vishingContentP2 = $updatedContent;
            break;
        case 'vishingList1':
            $vishingContentList1 = $updatedContent;
            break;
        case 'vishingP3':
            $vishingContentP3 = $updatedContent;
            break;
        case 'vishingPic':
            $vishingContentPic = $updatedContent;
            break;
        case 'vishingP4':
            $vishingContentP4 = $updatedContent;
            break;
        case 'vishingList2':
            $vishingContentList2 = $updatedContent;
            break;
        case 'vishingH2':
            $vishingContentH2 = $updatedContent;
            break;
        case 'vishingP5':
            $vishingContentP5 = $updatedContent;
            break;
        case 'vishingH3':
            $vishingContentH3 = $updatedContent;
            break;
        case 'vishingList3':
            $vishingContentList3 = $updatedContent;
            break;
        case 'vishingLink':
            $vishingContentLink = $updatedContent;
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
        case 'phishContentH1':
            $phishContentH1 = $updatedContent;
            break;
        case 'phishContentP1':
            $phishContentP1 = $updatedContent;
            break;
        case 'phishContentH2':
            $phishContentH2 = $updatedContent;
            break;
        case 'phishContentP2':
            $phishContentP2 = $updatedContent;
            break;
        case 'phishContentP3':
            $phishContentP3 = $updatedContent;
            break;
        case 'phishContentVideo':
            $phishContentVideo = $updatedContent;
            break;
        case 'phishContentExploreH2':
            $phishContentExploreH2 = $updatedContent;
            break;
        case 'phishContentP4':
            $phishContentP4 = $updatedContent;
            break;
        case 'phishContentLinks':
            $phishContentLinks = $updatedContent;
            break;
        case 'emailContentH1':
            $emailContentH1 = $updatedContent;
            break;
        case 'emailContentP1':
            $emailContentP1 = $updatedContent;
            break;
        case 'emailContentList1':
            $emailContentList1 = $updatedContent;
            break;
        case 'emailContentP2':
            $emailContentP2 = $updatedContent;
            break;
        case 'emailPic':
            $emailPic = $updatedContent;
            break;
        case 'emailContentP3':
            $emailContentP3 = $updatedContent;
            break;
        case 'emailContentList2':
            $emailContentList2 = $updatedContent;
            break;
        case 'emailContentP4':
            $emailContentP4 = $updatedContent;
            break;
        case 'emailContentH2':
            $emailContentH2 = $updatedContent;
            break;
        case 'emailContentP5':
            $emailContentP5 = $updatedContent;
            break;
        case 'emailContentList3':
            $emailContentList3 = $updatedContent;
            break;
        case 'emailContentLink':
            $emailContentLink = $updatedContent;
            break;
    }

    // Write all content back to content.php
    file_put_contents('content.php', '<?php' . PHP_EOL .
        '$homepageContentH2 = <<<HTML' . PHP_EOL . $homepageContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentP1 = <<<HTML' . PHP_EOL . $homepageContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentP2 = <<<HTML' . PHP_EOL . $homepageContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentHead = <<<HTML' . PHP_EOL . $homepageContentHead . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentList = <<<HTML' . PHP_EOL . $homepageContentList . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentHead2 = <<<HTML' . PHP_EOL . $homepageContentHead2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$homepageContentP3 = <<<HTML' . PHP_EOL . $homepageContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentH1 = <<<HTML' . PHP_EOL . $aboutContentH1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentP1 = <<<HTML' . PHP_EOL . $aboutContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentH2 = <<<HTML' . PHP_EOL . $aboutContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentP2 = <<<HTML' . PHP_EOL . $aboutContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentH3 = <<<HTML' . PHP_EOL . $aboutContentH3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentP3 = <<<HTML' . PHP_EOL . $aboutContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentH4 = <<<HTML' . PHP_EOL . $aboutContentH4 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentList = <<<HTML' . PHP_EOL . $aboutContentList . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentH5 = <<<HTML' . PHP_EOL . $aboutContentH5 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentP4 = <<<HTML' . PHP_EOL . $aboutContentP4 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$aboutContentLink = <<<HTML' . PHP_EOL . $aboutContentLink . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentH1 = <<<HTML' . PHP_EOL . $vishingContentH1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentP1 = <<<HTML' . PHP_EOL . $vishingContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentP2 = <<<HTML' . PHP_EOL . $vishingContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentList1 = <<<HTML' . PHP_EOL . $vishingContentList1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentP3 = <<<HTML' . PHP_EOL . $vishingContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentPic = <<<HTML' . PHP_EOL . $vishingContentPic . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentP4 = <<<HTML' . PHP_EOL . $vishingContentP4 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentList2 = <<<HTML' . PHP_EOL . $vishingContentList2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentH2 = <<<HTML' . PHP_EOL . $vishingContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentP5 = <<<HTML' . PHP_EOL . $vishingContentP5 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentH3 = <<<HTML' . PHP_EOL . $vishingContentH3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentList3 = <<<HTML' . PHP_EOL . $vishingContentList3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$vishingContentLink = <<<HTML' . PHP_EOL . $vishingContentLink . PHP_EOL . 'HTML;' . PHP_EOL .
        '$smishing = <<<HTML' . PHP_EOL . $smishing . PHP_EOL . 'HTML;' . PHP_EOL .
        '$webPhishing = <<<HTML' . PHP_EOL . $webPhishing . PHP_EOL . 'HTML;' . PHP_EOL .
        '$resources = <<<HTML' . PHP_EOL . $resources . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentH1 = <<<HTML' . PHP_EOL . $phishContentH1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentP1 = <<<HTML' . PHP_EOL . $phishContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentH2 = <<<HTML' . PHP_EOL . $phishContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentP2 = <<<HTML' . PHP_EOL . $phishContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentP3 = <<<HTML' . PHP_EOL . $phishContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentVideo = <<<HTML' . PHP_EOL . $phishContentVideo . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentExploreH2 = <<<HTML' . PHP_EOL . $phishContentExploreH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentP4 = <<<HTML' . PHP_EOL . $phishContentP4 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$phishContentLinks = <<<HTML' . PHP_EOL . $phishContentLinks . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentH1 = <<<HTML' . PHP_EOL . $emailContentH1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentP1 = <<<HTML' . PHP_EOL . $emailContentP1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentList1 = <<<HTML' . PHP_EOL . $emailContentList1 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentP2 = <<<HTML' . PHP_EOL . $emailContentP2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailPic = <<<HTML' . PHP_EOL . $emailPic . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentP3 = <<<HTML' . PHP_EOL . $emailContentP3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentList2 = <<<HTML' . PHP_EOL . $emailContentList2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentP4 = <<<HTML' . PHP_EOL . $emailContentP4 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentH2 = <<<HTML' . PHP_EOL . $emailContentH2 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentP5 = <<<HTML' . PHP_EOL . $emailContentP5 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentList3 = <<<HTML' . PHP_EOL . $emailContentList3 . PHP_EOL . 'HTML;' . PHP_EOL .
        '$emailContentLink = <<<HTML' . PHP_EOL . $emailContentLink . PHP_EOL . 'HTML;' . PHP_EOL .
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
            <button type="button" onclick="loadContent('about')">About Heading 1</button>
            <button type="button" onclick="loadContent('aboutP1')">About Paragraph 1</button>
            <button type="button" onclick="loadContent('aboutH2')">About Heading 2</button>
            <button type="button" onclick="loadContent('aboutP2')">About Paragraph 2</button>
            <button type="button" onclick="loadContent('aboutH3')">About Heading 3</button>
            <button type="button" onclick="loadContent('aboutP3')">About Paragraph 3</button>
            <button type="button" onclick="loadContent('aboutH4')">About Heading 4</button>
            <button type="button" onclick="loadContent('aboutList')">About List</button>
            <button type="button" onclick="loadContent('aboutH5')">About Heading 5</button>
            <button type="button" onclick="loadContent('aboutP4')">About Paragraph 4</button>
            <button type="button" onclick="loadContent('aboutLink')">About Links</button>
        </div>
        <div class="section-buttons">
            <h2>Phishing Content</h2>
            <button type="button" onclick="loadContent('phishContentH1')">Phishing Content H1</button>
            <button type="button" onclick="loadContent('phishContentP1')">Phishing Content P1</button>
            <button type="button" onclick="loadContent('phishContentH2')">Phishing Content H2</button>
            <button type="button" onclick="loadContent('phishContentP2')">Phishing Content P2</button>
            <button type="button" onclick="loadContent('phishContentP3')">Phishing Content P3</button>
            <button type="button" onclick="loadContent('phishContentVideo')">Phishing Content Video</button>
            <button type="button" onclick="loadContent('phishContentExploreH2')">Phishing Content H2</button>
            <button type="button" onclick="loadContent('phishContentP4')">Phishing Content P4</button>
            <button type="button" onclick="loadContent('phishContentLinks')">Phishing Content Links</button>
        </div>
        <div class="section-buttons">
            <h2>Email Phishing Content</h2>
            <button type="button" onclick="loadContent('emailContentH1')">Email Content Heading 1</button>
            <button type="button" onclick="loadContent('emailContentP1')">Email Content Paragraph 1</button>
            <button type="button" onclick="loadContent('emailContentList1')">Email Content List 1</button>
            <button type="button" onclick="loadContent('emailContentP2')">Email Content Paragraph 2</button>
            <button type="button" onclick="loadContent('emailPic')">Email Picture</button>
            <button type="button" onclick="loadContent('emailContentP3')">Email Content Paragraph 3</button>
            <button type="button" onclick="loadContent('emailContentList2')">Email Content List 2</button>
            <button type="button" onclick="loadContent('emailContentP4')">Email Content Paragraph 4</button>
            <button type="button" onclick="loadContent('emailContentH2')">Email Content Heading 2</button>
            <button type="button" onclick="loadContent('emailContentP5')">Email Content Paragraph 5</button>
            <button type="button" onclick="loadContent('emailContentList3')">Email Content List 3</button>
            <button type="button" onclick="loadContent('emailContentLink')">Email Content Link</button>
        </div>
        <div class="section-buttons">
            <h2>Vishing Content</h2>
            <button type="button" onclick="loadContent('vishing')">Vishing Content Heading 1</button>
            <button type="button" onclick="loadContent('vishingP1')">Vishing Content Paragraph 1</button>
            <button type="button" onclick="loadContent('vishingP2')">Vishing Content Paragraph 2</button>
            <button type="button" onclick="loadContent('vishingList1')">Vishing Content List 1</button>
            <button type="button" onclick="loadContent('vishingP3')">Vishing Paragraph 3</button>
            <button type="button" onclick="loadContent('vishingPic')">Vishing Picture</button>
            <button type="button" onclick="loadContent('vishingP4')">Vishing Content Paragraph 4</button>
            <button type="button" onclick="loadContent('vishingList2')">Vishing Content List 2</button>
            <button type="button" onclick="loadContent('vishingH2')">Vishing Content Heading 2</button>
            <button type="button" onclick="loadContent('vishingP5')">Vishing Content Paragraph 5</button>
            <button type="button" onclick="loadContent('vishingH3')">Vishing Content Heading 3</button>
            <button type="button" onclick="loadContent('vishingList3')">Vishing Content List 3</button>
            <button type="button" onclick="loadContent('vishingLink')">Vishing Content Link</button>
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
        <br>
    </form>

    <script>
        function loadContent(section) {
            window.location.href = 'editContent.php?section=' + section;
        }
    </script>
</body>
</html>
