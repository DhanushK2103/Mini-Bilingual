
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
    <style>
  :root {
    --primary:rgb(0, 41, 204);
    --text: #333;
    --bg: #fdfdfd;
    --radius: 8px;
  }

  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 40px 20px;
    font-family: 'Segoe UI', sans-serif;
    background-color: var(--bg);
    color: var(--text);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .message-box {
    background: white;
    padding: 30px 40px;
    border-radius: var(--radius);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    text-align: center;
  }

  .message-box h2 {
    color: var(--primary);
    margin-bottom: 15px;
    font-size: 1.8rem;
  }

  .message-box p {
    font-size: 1.2rem;
    margin: 0;
  }

  [dir="rtl"] .message-box {
    text-align: right;
  }

  @media (max-width: 600px) {
    .message-box {
      padding: 20px;
    }

    .message-box h2 {
      font-size: 1.5rem;
    }

    .message-box p {
      font-size: 1rem;
    }
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
=======
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
    <style>
  :root {
    --primary: #0066cc;
    --text: #333;
    --bg: #fdfdfd;
    --radius: 8px;
  }

  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 40px 20px;
    font-family: 'Segoe UI', sans-serif;
    background-color: var(--bg);
    color: var(--text);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .message-box {
    background: white;
    padding: 30px 40px;
    border-radius: var(--radius);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    text-align: center;
  }

  .message-box h2 {
    color: var(--primary);
    margin-bottom: 15px;
    font-size: 1.8rem;
  }

  .message-box p {
    font-size: 1.2rem;
    margin: 0;
  }

  [dir="rtl"] .message-box {
    text-align: right;
  }

  @media (max-width: 600px) {
    .message-box {
      padding: 20px;
    }

    .message-box h2 {
      font-size: 1.5rem;
    }

    .message-box p {
      font-size: 1rem;
    }
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

