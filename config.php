?php
// config.php
// Database credentials (provided by you)
$db_host = 'localhost';
$db_name = 'db1sikiypijggu';
$db_user = 'uei4bkjtcem6s';
$db_pass = 'wmhalmspfjgz';
 
try {
    // PDO connection (not used heavily in the clone pages but ready for future features)
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    // For development, show error. In production, log instead.
    // We don't redirect using PHP; just show a subtle warning if DB fails.
    $pdo = null;
    $dbError = $e->getMessage();
}
?>
 
