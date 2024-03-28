<?php
include_once 'dbh.inc.php';

// Start session
session_start();

// Function to clean input characters
function cleanChars($val)
{
    $val = str_replace('&', '&amp;', $val);
    $val = str_replace('"', '&quot;', $val);
    $val = str_replace("'", '&#39;', $val);
    $val = str_replace('<', '&lt;', $val);
    $val = str_replace('>', '&gt;', $val);
    $val = str_replace('[', '&#91;', $val);
    $val = str_replace(']', '&#93;', $val);
    $val = str_replace('{', '&#123;', $val);
    $val = str_replace('}', '&#125;', $val);
    $val = str_replace('|', '&#124;', $val);
    $val = str_replace('/', '&#47;', $val);
    $val = str_replace('\\', '&#92;', $val);
    $val = str_replace('$', '&#36;', $val);
    $val = str_replace('%', '&#37;', $val);
    return $val;
}

// Set session timeout to 30 minutes
$session_timeout = 1800; // 30 minutes
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout)) {
    // Expire session if inactive for too long
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time

// Check if AdminName and AdminPass are set in $_POST
if (isset($_POST['AdminName'], $_POST['AdminPass'])) {
    $adminName = cleanChars($_POST['AdminName']); 
    $adminPass = cleanChars($_POST['AdminPass']); 

    $stmt = $conn->prepare("SELECT * FROM Admin_Login WHERE AdminName = ?");
    $stmt->bind_param("s", $adminName);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Check if both AdminPass and $row['AdminPass'] are set
        if (isset($adminPass, $row['AdminPass']) && $adminPass == $row['AdminPass']) { 
            // Regenerate session ID
            session_regenerate_id(true);
            
            $_SESSION['AdminName'] = $row['AdminName'];
            $_SESSION['Admin_ID'] = $row['Admin_ID'];

            // Set session timeout and expiration
            $_SESSION['CREATED'] = time(); // Creation time
            $_SESSION['EXPIRES'] = $_SESSION['CREATED'] + $session_timeout; // Expiration time

            // Set secure and httponly flags for session cookies
            ini_set('session.cookie_secure', 1); // Only transmit cookies over secure HTTPS connection
            ini_set('session.cookie_httponly', 1); // Make cookies accessible only via HTTP(S), not JavaScript
            
            header('Location: adminLandingPage.html');
            exit();
        } else {
            header("Location: error.php?error=wrongpassword");
            exit();
        }
    } else {
        header("Location: error.php?error=nouserfound");
        exit();
    }
} else {
    // Handle the case when AdminName and AdminPass are not set in $_POST
    header("Location: error.php?error=missingcredentials");
    exit();
}
?>
