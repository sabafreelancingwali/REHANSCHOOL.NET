
<?php
require_once 'config.php';
 
// Simple server-side form handling example (keeps everything in the same file)
// Note: This clone uses JS for navigation; PHP is only used for optional form processing.
$messageSent = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $msg = trim($_POST['message'] ?? '');
 
    if ($name === '') $errors[] = "Name is required.";
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if ($msg === '') $errors[] = "Message cannot be empty.";
 
    if (empty($errors)) {
        // In a real site you'd save to DB or send an email. Here we simulate success.
        $messageSent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Contact — Rehan School</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    :root{--bg:#f7fbff;--primary:#1e3c72;--card:#fff}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,Arial;background:var(--bg);color:#0f172a}
    header{background:linear-gradient(90deg,var(--primary),#2a5298);color:white;padding:16px;text-align:center}
    nav{display:flex;justify-content:center;gap:14px;padding:12px;background:#fff;box-shadow:0 6px 18px rgba(15,23,42,0.06)}
    .wrap{max-width:880px;margin:22px auto;padding:0 16px}
    form{background:var(--card);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(15,23,42,0.05)}
    label{display:block;margin-top:10px;font-weight:600}
    input,textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #e6eefb;margin-top:6px;font-size:0.95rem}
    button{margin-top:12px;padding:10px 14px;border-radius:10px;border:none;background:linear-gradient(90deg,var(--primary),#2a5298);color:white;font-weight:700;cursor:pointer}
    .note{color:#6b7280;margin-top:8px}
    .success{background:#e6ffef;border:1px solid #b7f2d0;padding:10px;border-radius:8px;color:#0b7a38}
    .errors{background:#fff0f0;border:1px solid #f3c2c2;padding:10px;border-radius:8px;color:#8b1b1b}
    footer{text-align:center;padding:20px;background:var(--primary);color:white;margin-top:20px}
  </style>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <p style="opacity:.95;margin:6px 0 0">Questions, enrollment help, or demo requests — we’re here to help.</p>
  </header>
 
  <nav>
    <a href="#" onclick="goPage('index.php')">Home</a>
    <a href="#" onclick="goPage('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goPage('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goPage('contact.php')">Contact</a>
  </nav>
 
  <main class="wrap">
    <section style="margin-top:18px">
      <form method="post" action="contact.php" novalidate>
        <?php if ($messageSent): ?>
          <div class="success">Thank you, your message has been received. We'll contact you soon.</div>
        <?php endif; ?>
 
        <?php if (!empty($errors)): ?>
          <div class="errors"><strong>There were problems with your submission:</strong>
            <ul style="margin:8px 0 0;padding-left:18px"><?php foreach($errors as $e) echo '<li>'.htmlspecialchars($e).'</li>'; ?></ul>
          </div>
        <?php endif; ?>
 
        <label for="name">Your Name</label>
        <input id="name" name="name" type="text" required value="<?= isset($name) ? htmlspecialchars($name) : '' ?>">
 
        <label for="email">Email</label>
        <input id="email" name="email" type="email" required value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
 
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5"><?= isset($msg) ? htmlspecialchars($msg) : '' ?></textarea>
 
        <button type="submit">Send Message</button>
        <div class="note">Prefer direct contact? Email us at <strong>info@rehanschool.example</strong> (demo).</div>
      </form>
    </section>
  </main>
 
  <footer>
    &copy; <?php echo date('Y'); ?> Rehan School Online Academy — Contact
  </footer>
 
  <script>
    function goPage(page){
      document.body.style.transition = 'opacity .12s ease';
      document.body.style.opacity = '0.02';
      setTimeout(()=> window.location.href = page, 120);
    }
  </script>
</body>
</html>
