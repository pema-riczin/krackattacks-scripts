<html>
<head>
<title>Hotspot 2.0 subscription remediation</title>
</head>
<body>

<?php

echo "SessionID: " . htmlentities($_GET["session_id"], ENT_QUOTES) . "<br>\n";

echo "<a href=\"redirect.php?id=" . htmlentities($_GET["session_id"], ENT_QUOTES) . "\">Complete user subscription remediation</a><br>\n";

?>

This will provide a new machine-generated password.

</body>
</html>
