<?php /* facilitators.php — Rehan.Education clone (Facilitators) */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Facilitators — Rehan.Education</title>
<style>
  :root{--brand:#21d4fd;--brand2:#b721ff;--ink:#0f172a;--muted:#5b6b82;--paper:#fff;--r:18px;--shadow:0 10px 25px rgba(13,20,33,.16)}
  *{box-sizing:border-box}
  body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial,sans-serif;background:#f5f7fb;color:#0d1421}
  .hdr{position:sticky;top:0;background:#fff;border-bottom:1px solid #e9eef6;z-index:30}
  .wrap{max-width:1000px;margin:auto;padding:0 20px}
  .nav{display:flex;align-items:center;justify-content:space-between;height:64px}
  .brand{display:flex;align-items:center;gap:10px;font-weight:800}
  .logo{width:34px;height:34px;border-radius:12px;background:linear-gradient(135deg,var(--brand),var(--brand2))}
  .menu{display:flex;gap:10px;flex-wrap:wrap}
  .menu button{border:0;background:transparent;padding:10px 12px;border-radius:12px;font-weight:600;cursor:pointer}
  .menu .primary{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;box-shadow:var(--shadow)}

  .hero{padding:46px 0;background:linear-gradient(135deg,rgba(33,212,253,.16),rgba(183,33,255,.16))}
  h1{margin:0 0 6px}
  .sub{color:var(--muted);margin:0}

  .section{padding:36px 20px}
  .grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px}
  .card{background:#fff;border:1px solid #e9eef6;border-radius:var(--r);padding:18px;box-shadow:var(--shadow)}
  .card h3{margin:0 0 6px}
  .role{font-weight:700;color:#1c2a44}
  .muted{color:var(--muted)}
  .social{display:flex;gap:10px;margin-top:10px}
  .social a{display:inline-block;padding:8px 10px;border-radius:10px;background:#0f172a;color:#cfe2ff;border:1px solid #223459}

  @media (max-width:900px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<header class="hdr">
  <div class="wrap nav">
    <div class="brand" onclick="go('index.php')" style="cursor:pointer"><div class="logo"></div><div>Rehan.Education</div></div>
    <nav class="menu">
      <button onclick="go('index.php')">Home</button>
      <button onclick="go('curriculum.php')">Curriculum</button>
      <button class="primary" onclick="go('facilitators.php')">Facilitators</button>
      <button onclick="go('index.php#contact')">Contact</button>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="wrap">
    <h1>Facilitators</h1>
    <p class="sub">The mentors guiding our learners to master AI, digital skills, and teaching online.</p>
  </div>
</section>

<section class="section">
  <div class="wrap grid">
    <article class="card">
      <h3>Rehan Allahwala</h3>
      <div class="role">Founder & Lead Mentor</div>
      <p class="muted">
        Entrepreneur and educator focused on enabling youth with practical technology skills and a service mindset.
        Leads the vision to impact 10 million lives through learning and teaching online.
      </p>
      <div class="social">
        <a href="#" onclick="alert('Open Facebook');return false;">Facebook</a>
        <a href="#" onclick="alert('Open Twitter/X');return false;">Twitter/X</a>
        <a href="#" onclick="alert('Open LinkedIn');return false;">LinkedIn</a>
      </div>
    </article>

    <article class="card">
      <h3>Doulat Educationwala</h3>
      <div class="role">Program Architect</div>
      <p class="muted">
        Designs outcome-driven learning paths that blend AI literacy, digital presence,
        and micro-entrepreneurship for teenagers and early learners.
      </p>
      <div class="social">
        <a href="#" onclick="alert('Open Instagram');return false;">Instagram</a>
        <a href="#" onclick="alert('Open YouTube');return false;">YouTube</a>
      </div>
    </article>

    <article class="card">
      <h3>Ms. Gulsana Mansha</h3>
      <div class="role">Senior Facilitator</div>
      <p class="muted">
        Supports learners with lesson planning, recording tutorials, and building confidence to teach online.
        Special focus on inclusive classrooms and community impact.
      </p>
      <div class="social">
        <a href="#" onclick="alert('Open Facebook');return false;">Facebook</a>
        <a href="#" onclick="alert('Open Instagram');return false;">Instagram</a>
      </div>
    </article>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
      <div style="min-width:14px;min-height:14px;border-radius:50%;background:linear-gradient(135deg,var(--brand),var(--brand2))"></div>
      <div><strong>Questions?</strong> Call/WhatsApp <strong>+44 7418 359852</strong> or <a href="#" onclick="go('index.php#contact')">send us a message</a>.</div>
    </div>
  </div>
</section>

<script>
  function go(p){ window.location.href=p; }
</script>
</body>
</html>
