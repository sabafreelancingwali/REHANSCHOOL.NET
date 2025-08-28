<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Rehan School Online Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    /* Internal CSS - homepage */
    :root{
      --primary1:#1e3c72;
      --primary2:#2a5298;
      --accent:#ff9800;
      --muted:#6b7280;
      --card:#ffffff;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background:linear-gradient(180deg,#f7fbff 0%, #fbfbfd 100%);
      color:#0f172a;
      -webkit-font-smoothing:antialiased;
    }
    header{
      background: linear-gradient(90deg,var(--primary1),var(--primary2));
      padding:28px 20px;
      color:white;
      text-align:center;
    }
    header h1{margin:0;font-size:1.8rem;letter-spacing:0.3px}
    header p{margin:6px 0 0;opacity:0.95}
 
    nav{
      display:flex;
      justify-content:center;
      gap:18px;
      padding:14px 12px;
      background:#fff;
      box-shadow:0 6px 20px rgba(15,23,42,0.06);
      position:sticky;
      top:0;
      z-index:50;
    }
    nav a{
      text-decoration:none;
      font-weight:600;
      color:var(--primary1);
      padding:8px 12px;
      border-radius:8px;
      transition: all .18s ease;
    }
    nav a:hover{background:linear-gradient(90deg, rgba(42,82,152,0.08), rgba(30,60,114,0.06)); color:var(--accent)}
 
    .hero{
      background:url('https://source.unsplash.com/1600x700/?education,online,students') center/cover no-repeat;
      min-height:320px;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:48px 20px;
      color:white;
      text-align:center;
      position:relative;
    }
    .hero::after{
      content:"";
      position:absolute; inset:0;
      background:linear-gradient(180deg, rgba(10,18,34,0.25), rgba(10,18,34,0.45));
      border-radius:0;
    }
    .hero .container{
      position:relative; z-index:2; max-width:1100px;
    }
    .hero h2{font-size:2rem;margin:0 0 8px}
    .hero p{margin:0 0 18px;opacity:0.95}
 
    .kpis{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
      gap:16px;
      max-width:1100px;margin: -36px auto 20px;padding:0 20px;
    }
    .kpi{
      background:var(--card);
      padding:18px;border-radius:12px;
      box-shadow:0 8px 20px rgba(15,23,42,0.06);
      text-align:center;
      transition:transform .18s ease;
    }
    .kpi:hover{transform:translateY(-6px)}
    .kpi h3{margin:0;font-size:1.2rem;color:var(--primary1)}
    .kpi p{margin:8px 0 0;color:var(--muted);font-size:0.94rem}
 
    section{padding:42px 20px}
    .section-inner{max-width:1100px;margin:0 auto}
 
    .cards{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
      gap:20px;
    }
    .card{
      background:var(--card); padding:20px;border-radius:12px;
      box-shadow:0 6px 18px rgba(15,23,42,0.05);
    }
    .card h4{margin:0 0 8px;color:var(--primary1)}
    .card p{margin:0;color:var(--muted)}
 
    footer{
      background:var(--primary1); color:white; padding:20px 12px; text-align:center; margin-top:24px;
    }
    .muted-note{font-size:0.9rem;color:#9aa3b2;margin-top:8px}
 
    /* Responsive tweaks */
    @media (max-width:720px){
      .hero{min-height:260px;padding:36px 14px}
      header h1{font-size:1.4rem}
      .hero h2{font-size:1.4rem}
    }
  </style>
</head>
<body>
  <header>
    <h1>Rehan School Online Academy</h1>
    <p>AI-enabled education • Entrepreneurial skills • Real projects</p>
  </header>
 
  <nav>
    <a href="#" onclick="goPage('index.php')">Home</a>
    <a href="#" onclick="goPage('curriculum.php')">Curriculum</a>
    <a href="#" onclick="goPage('facilitators.php')">Facilitators</a>
    <a href="#" onclick="goPage('contact.php')">Contact</a>
  </nav>
 
  <main>
    <section class="hero">
      <div class="container">
        <h2>Innovative learning for future builders 🚀</h2>
        <p>Hands-on AI projects, entrepreneurship-focused curriculum, and mentor-led classes.</p>
      </div>
    </section>
 
    <div class="kpis section-inner" aria-hidden="false">
      <div class="kpi">
        <h3>1000+ Students</h3>
        <p>Global learners building real startups and products.</p>
      </div>
      <div class="kpi">
        <h3>50+ Courses</h3>
        <p>AI, coding, entrepreneurship, product design and more.</p>
      </div>
      <div class="kpi">
        <h3>Expert Facilitators</h3>
        <p>Industry professionals guiding students step-by-step.</p>
      </div>
      <div class="kpi">
        <h3>100% Remote</h3>
        <p>Join from anywhere — classes optimized for online learning.</p>
      </div>
    </div>
 
    <section>
      <div class="section-inner">
        <h3 style="text-align:center;color:#0f172a;margin-bottom:18px">Our Highlights</h3>
        <div class="cards">
          <article class="card">
            <h4>AI-enabled Projects</h4>
            <p>Students build practical AI products to solve real problems.</p>
          </article>
          <article class="card">
            <h4>Entrepreneurship Focus</h4>
            <p>Curriculum includes business fundamentals and go-to-market sessions.</p>
          </article>
          <article class="card">
            <h4>Portfolio-ready Work</h4>
            <p>Finish with portfolio projects and mentor feedback.</p>
          </article>
        </div>
      </div>
    </section>
 
    <section>
      <div class="section-inner" style="text-align:center">
        <h3>Join Our Community</h3>
        <p class="muted-note">Want to get started? Explore our curriculum or contact us for enrollment details.</p>
        <div style="margin-top:18px">
          <button onclick="goPage('curriculum.php')" style="cursor:pointer;padding:10px 16px;border-radius:10px;border:none;background:linear-gradient(90deg,var(--primary1),var(--primary2));color:white;font-weight:700">View Curriculum</button>
        </div>
      </div>
    </section>
  </main>
 
  <footer>
    <div>&copy; <?php echo date('Y'); ?> Rehan School Online Academy</div>
    <div style="font-size:0.9rem;opacity:0.9;margin-top:6px">Made as a clone — for learning & demo purposes.</div>
    <?php if(isset($dbError)): ?>
      <div style="margin-top:8px;color:#ffd1d1;font-size:0.9rem">DB connection warning: <?= htmlspecialchars($dbError) ?></div>
    <?php endif; ?>
  </footer>
 
  <script>
    // JS-based navigation (no PHP redirects)
    function goPage(page){
      // small fade effect before navigation
      document.body.style.transition = 'opacity .18s ease';
      document.body.style.opacity = '0.02';
      setTimeout(() => { window.location.href = page; }, 160);
    }
  </script>
</body>
</html>
