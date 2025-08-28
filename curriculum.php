
<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Curriculum — Rehan School</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    :root{--bg:#fbfdff;--card:#fff;--accent:#ff9800;--dark:#0f172a;--primary:#1e3c72}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,Arial;background:var(--bg);color:var(--dark)}
    header{background:linear-gradient(90deg,var(--primary),#2a5298);color:white;padding:18px 12px;text-align:center}
    nav{display:flex;justify-content:center;gap:14px;padding:12px;background:#fff;box-shadow:0 8px 24px rgba(15,23,42,0.06)}
    nav a{color:var(--primary);text-decoration:none;font-weight:600;padding:8px 12px;border-radius:8px}
    .container{max-width:1100px;margin:26px auto;padding:0 16px}
    .grid{display:grid;grid-template-columns:1fr 320px;gap:20px}
    .course{
      background:var(--card);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(15,23,42,0.05)
    }
    .module{margin-top:12px;padding:12px;border-left:3px solid rgba(30,60,114,0.06)}
    aside{background:var(--card);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(15,23,42,0.05)}
    footer{text-align:center;padding:20px;background:var(--primary);color:white;margin-top:24px}
    @media(max-width:880px){.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <header>
    <h1>Curriculum — Rehan School Online Academy</h1>
    <p style="opacity:.95;margin:6px 0 0">A practical, project-first syllabus focused on AI and entrepreneurship</p>
  </header>
 
  <nav>
    <a href="#" onclick="goPage('index.php')">Home</a>
    <a href="#" onclick="goPage('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goPage('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goPage('contact.php')">Contact</a>
  </nav>
 
  <main class="container">
    <div class="grid">
      <div>
        <section class="course">
          <h2 style="margin:0 0 8px">Foundations: AI & Product</h2>
          <p style="margin:0 0 12px;color:#6b7280">Core concepts, tools, and the product lifecycle — beginner to intermediate.</p>
 
          <div class="module">
            <strong>Module 1: AI Basics</strong>
            <div style="margin-top:6px;color:#555">Intro to ML concepts, data handling, and small projects.</div>
          </div>
 
          <div class="module">
            <strong>Module 2: Product Thinking</strong>
            <div style="margin-top:6px;color:#555">Design sprints, MVPs, user interviews, and iteration.</div>
          </div>
 
          <div class="module">
            <strong>Module 3: Build & Deploy</strong>
            <div style="margin-top:6px;color:#555">Build a working prototype, host a demo, and present to mentors.</div>
          </div>
        </section>
 
        <section class="course" style="margin-top:18px">
          <h2 style="margin:0 0 8px">Advanced Track</h2>
          <p style="margin:0 0 12px;color:#6b7280">AI workflows, prompt engineering, advanced product-market fit strategies.</p>
 
          <div class="module"><strong>Module 4: Prompt Engineering</strong><div style="margin-top:6px;color:#555">Designing prompts, evaluation, safety best practices</div></div>
          <div class="module"><strong>Module 5: Monetization</strong><div style="margin-top:6px;color:#555">Pricing, go-to-market and demo day prep</div></div>
        </section>
      </div>
 
      <aside>
        <h3 style="margin:0 0 6px">Quick Facts</h3>
        <p style="margin:0 0 10px;color:#6b7280">Course length: 8–16 weeks (varies by track). Format: Live sessions + self-paced projects.</p>
 
        <h4 style="margin-top:12px;margin-bottom:6px">Who is it for?</h4>
        <p style="margin:0;color:#6b7280">Aspiring founders, students, and professionals looking to build real AI products.</p>
 
        <div style="margin-top:14px;text-align:center">
          <button onclick="goPage('contact.php')" style="padding:10px 14px;border-radius:10px;border:none;font-weight:700;background:linear-gradient(90deg,var(--primary),#2a5298);color:white;cursor:pointer">Get Info</button>
        </div>
      </aside>
    </div>
  </main>
 
  <footer>
    &copy; <?php echo date('Y'); ?> Rehan School Online Academy — Curriculum Overview
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
