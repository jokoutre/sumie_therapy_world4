<?php
// Start the session
session_start();

// Destroy all session variables
session_unset();
session_destroy();

// Redirect to the index.php with a logout success message
header("Location: /sumie_therapy_shop/index.php?logout=success");
exit;
