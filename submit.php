<?php
// DB config (update these)
$host = 'localhost';
$db   = 'feedback_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Create DSN
$dsn = "mysql:host=$host;dbname=$db;charset=$charset"

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Get and sanitize POST data
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $category = $_POST['category'] ?? '';
    $message  = $_POST['message'] ?? '';
    $lang     = $_POST['lang'] ?? 'en';

    // Insert into DB
    $stmt = $pdo->prepare("INSERT INTO feedback (name, email, category, message, lang) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $category, $message, $lang]);

    // Redirect to thank you page
    $nameParam = urlencode($name);
    $categoryParam = urlencode($category);
    header("Location: thankyou.php?name=$nameParam&category=$categoryParam&lang=$lang");
    exit();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
