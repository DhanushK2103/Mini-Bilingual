# Mini Bilingual Feedback Form Portal (English / Arabic)

A simple bilingual feedback form portal with Arabic and English support. The portal allows users to submit feedback, and stores the data securely in a MySQL database using PHP and PDO.

---

## 🚀 Features

- 🌐 Bilingual UI – English 🇬🇧 and Arabic 🇸🇦 support
- 🔄 Language toggle without page reload
- ↔️ RTL layout switch for Arabic
- ✅ Client-side form validation
- 🛡 Secure backend using PDO (prevents SQL injection)
- 🗃 Stores: name, email, category, message, language, timestamp
- 🙏 Confirmation page in selected language

---

## 📁 Files Included

| File         | Description                              |
|--------------|------------------------------------------|
| `index.html` | Frontend form with language toggle       |
| `submit.php` | Backend script to insert form data       |
| `thankyou.php` | Confirmation page after submission     |
| `db.sql`     | SQL script to create the feedback table  |

---

## 🛠 How to Run

1. **Create the database**:
   - Use `db.sql` in phpMyAdmin or MySQL CLI
   - This creates a database called `feedback_db` and a `feedback` table

2. **Set up server**:
   - Use XAMPP, WAMP, or any PHP-enabled local server
   - Place all files (`index.html`, `submit.php`, `thankyou.php`) in your server root folder (e.g., `htdocs`)

3. **Update credentials in `submit.php`**:
   ```php
   $host = 'localhost';
   $db   = 'feedback_db';
   $user = 'root';
   $pass = '';
