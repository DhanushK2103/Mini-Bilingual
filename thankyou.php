<?php
if (!isset($_GET['name']) || !isset($_GET['category']) || !isset($_GET['lang'])) {
    echo "<h3>Missing parameters. Please submit the form first.</h3>";
    exit();
}
?>
<?php
// Get values from URL
$name = $_GET['name'] ?? 'Guest';
$category = $_GET['category'] ?? '';
$lang = $_GET['lang'] ?? 'en';

// Simple translations
$messages = [
    'en' => [
        'thanks' => 'Thank you,',
        'received' => 'We received your',
    ],
    'ar' => [
        'thanks' => 'شكراً،',
        'received' => 'لقد استلمنا',
    ]
];

// Ensure safe display
$name = htmlspecialchars($name);
$category = htmlspecialchars($category);
$direction = $lang === 'ar' ? 'rtl' : 'ltr';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= $direction ?>">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            text-align: center;
        }
        .message {
            font-size: 1.5em;
            direction: <?= $direction ?>;
        }
    </style>
</head>
<body>
    <div class="message">
        <?= $messages[$lang]['thanks'] ?> <strong><?= $name ?></strong>!<br>
        <?= $messages[$lang]['received'] ?> <strong><?= $category ?></strong>.
    </div>
</body>
</html>
