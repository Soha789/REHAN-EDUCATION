<?php /* curriculum.php — Rehan.Education clone (Curriculum) */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Curriculum — Rehan.Education</title>
<style>
  :root{--brand:#21d4fd;--brand2:#b721ff;--paper:#fff;--ink:#0f172a;--muted:#5b6b82;--shadow:0 10px 25px rgba(13,20,33,.14);--r:18px}
  *{box-sizing:border-box}
  body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial,sans-serif;background:#f6f8fc;color:#0d1421}
  .hdr{position:sticky;top:0;z-index:40;background:#fff;border-bottom:1px solid #e9eef6}
  .wrap{max-width:1000px;margin:auto;padding:0 20px}
  .nav{display:flex;align-items:center;justify-content:space-between;height:64px}
  .brand{display:flex;align-items:center;gap:10px;font-weight:800}
  .logo{width:34px;height:34px;border-radius:12px;background:linear-gradient(135deg,var(--brand),var(--brand2));box-shadow:0 8px 18px rgba(33,212,253,.35)}
  .menu{display:flex;gap:10px;flex-wrap:wrap}
  .menu button{border:0;background:transparent;padding:10px 12px;border-radius:12px;font-weight:600;cursor:pointer}
  .menu .primary{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#fff;box-shadow:var(--shadow)}

  .hero{background:linear-gradient(135deg,rgba(33,212,253,.16),rgba(183,33,255,.16));padding:48px 0}
  h1{margin:0 0 6px}
  .sub{color:var(--muted);margin-top:0}

  .section{padding:36px 20px}
  .grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  .card{background:#fff;border:1px solid #e9eef6;border-radius:var(--r);padding:18px;box-shadow:var(--shadow)}
  .card h3{margin:0 0 8px}
  .muted{color:var(--muted)}
  .list{margin:0;padding-left:18px}
  .pill{display:inline-block;background:#0f172a;color:#cfe2ff;border:1px solid #223459;padding:6px 10px;border-radius:999px;font-weight:700}

  @media (max-width:900px){.grid{grid-template-columns:1fr}}
</style>
</head>
<body>
<header class="hdr">
  <div class="wrap nav">
    <div class="brand" onclick="go('index.php')" style="cursor:pointer"><div class="logo"></div><div>Rehan.Education</div></div>
    <nav class="menu">
      <button onclick="go('index.php')">Home</button>
      <button class="primary" onclick="go('curriculum.php')">Curriculum</button>
      <button onclick="go('facilitators.php')">Facilitators</button>
      <button onclick="go('index.php#contact')">Contact</button>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="wrap">
    <span class="pill">Program Overview</span>
    <h1>Curriculum</h1>
    <p class="sub">Integrated tracks in AI, Digital Skills, and Online Teaching — designed for real-world outcomes.</p>
  </div>
</section>

<section class="section">
  <div class="wrap grid">
    <div class="card">
      <h3>Track 1 — AI Proficiency</h3>
      <p class="muted">Foundations for responsible, effective AI use.</p>
      <ul class="list">
        <li>Prompting strategies & research workflows</li>
        <li>Summarization, brainstorming, and planning</li>
        <li>Automation & productivity boosters</li>
        <li>Ethics, safety, and citation discipline</li>
      </ul>
    </div>
    <div class="card">
      <h3>Track 2 — Digital Skills</h3>
      <p class="muted">Build your online presence and creative portfolio.</p>
      <ul class="list">
        <li>Personal branding & simple websites</li>
        <li>Design basics (thumbnails, reels, carousels)</li>
        <li>Video scripting & editing for short lessons</li>
        <li>Freelancing & micro-entrepreneurship</li>
      </ul>
    </div>
    <div class="card">
      <h3>Track 3 — Teaching Online</h3>
      <p class="muted">Learn by teaching others and multiplying impact.</p>
      <ul class="list">
        <li>Lesson design & learning outcomes</li>
        <li>Recording, feedback loops, and publishing</li>
        <li>Community guidelines & inclusive classrooms</li>
        <li>Capstone: publish a mini-course</li>
      </ul>
    </div>
    <div class="card">
      <h3>Outcomes & Assessment</h3>
      <p class="muted">The program measures what matters.</p>
      <ul class="list">
        <li>Portfolio of videos, posts, and a mini-course</li>
        <li>Peer & mentor reviews</li>
        <li>Service hours: teaching others online</li>
        <li>Pathways to paid work</li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card">
      <h3 style="margin-top:0">Contact for Admissions</h3>
      <p>Phone/WhatsApp: <strong>+44 7418 359852</strong> &nbsp; • &nbsp; Email: <strong>hello@rehan.education</strong></p>
      <p class="muted">We welcome parents and teens to book a brief orientation call.</p>
      <div style="margin-top:10px;display:flex;gap:10px;flex-wrap:wrap">
        <button class="primary" style="padding:10px 14px;border-radius:12px;border:0;color:#fff" onclick="go('index.php#contact')">Message Us</button>
        <button style="padding:10px 14px;border-radius:12px;border:0;background:#0f172a;color:#cfe2ff" onclick="go('facilitators.php')">Meet Facilitators</button>
      </div>
    </div>
  </div>
</section>

<script>
  function go(p){ window.location.href=p; }
</script>
</body>
</html>
