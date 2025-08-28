<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Facilitators — Rehan School</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <style>
    :root{--bg:#ffffff;--card:#fff;--accent:#ff9800;--primary:#1e3c72}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,Arial;background:linear-gradient(180deg,#fbfdff,#ffffff);color:#0f172a}
    header{background:linear-gradient(90deg,var(--primary),#2a5298);color:white;padding:16px;text-align:center}
    nav{display:flex;justify-content:center;gap:14px;padding:12px;background:#fff;box-shadow:0 6px 18px rgba(15,23,42,0.06)}
    .wrap{max-width:1100px;margin:22px auto;padding:0 16px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px}
    .person{background:var(--card);padding:16px;border-radius:12px;box-shadow:0 6px 18px rgba(15,23,42,0.05);text-align:center}
    .avatar{width:86px;height:86px;border-radius:50%;display:block;margin:0 auto 10px;object-fit:cover}
    .role{color:#6b7280;font-size:0.95rem;margin-top:6px}
    footer{text-align:center;padding:20px;background:var(--primary);color:white;margin-top:20px}
  </style>
</head>
<body>
  <header>
    <h1>Meet Our Facilitators</h1>
    <p style="opacity:.95;margin:6px 0 0">Industry mentors, product builders, and AI practitioners</p>
  </header>
 
  <nav>
    <a href="#" onclick="goPage('index.php')">Home</a>
    <a href="#" onclick="goPage('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goPage('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goPage('contact.php')">Contact</a>
  </nav>
 
  <main class="wrap">
    <section style="margin-top:20px">
      <div class="grid">
        <div class="person">
          <img src="https://source.unsplash.com/400x400/?person,teacher" alt="Facilitator" class="avatar" />
          <h3 style="margin:8px 0 0">Aisha Khan</h3>
          <div class="role">Product & AI Mentor</div>
          <p style="font-size:0.95rem;color:#6b7280;margin-top:8px">5+ years building ML products and mentoring early-stage teams.</p>
        </div>
 
        <div class="person">
          <img src="https://source.unsplash.com/400x400/?person,mentor" alt="Facilitator" class="avatar" />
          <h3 style="margin:8px 0 0">Bilal Ahmed</h3>
          <div class="role">Entrepreneurship Coach</div>
          <p style="font-size:0.95rem;color:#6b7280;margin-top:8px">Helps teams with go-to-market strategies and founder skills.</p>
        </div>
 
        <div class="person">
          <img src="https://source.unsplash.com/400x400/?person,developer" alt="Facilitator" class="avatar" />
          <h3 style="margin:8px 0 0">Sara Malik</h3>
          <div class="role">Full-Stack & Deployment</div>
          <p style="font-size:0.95rem;color:#6b7280;margin-top:8px">Focuses on getting projects from prototype to hosted product.</p>
        </div>
 
        <div class="person">
          <img src="https://source.unsplash.com/400x400/?person,engineer" alt="Facilitator" class="avatar" />
          <h3 style="margin:8px 0 0">Omar Rehman</h3>
          <div class="role">Data & ML Engineer</div>
          <p style="font-size:0.95rem;color:#6b7280;margin-top:8px">Specialist in pipelines, model evaluation and scaling.</p>
        </div>
      </div>
    </section>
  </main>
 
  <footer>
    &copy; <?php echo date('Y'); ?> Rehan School Online Academy — Facilitators
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
