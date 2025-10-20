<?php /* index.php — Rehan.Education clone (Homepage) */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Rehan.Education — Digital Mastery for a Connected World</title>
<style>
  :root{
    --bg:#0e1a2b;
    --ink:#0b1220;
    --ink-soft:#1c2a41;
    --brand:#21d4fd;
    --brand-2:#b721ff;
    --text:#0d1421;
    --muted:#5b6b82;
    --paper:#ffffff;
    --accent:#00d1b2;
    --ring: rgba(33,212,253,.35);
    --shadow: 0 10px 25px rgba(13,20,33,.18);
    --radius: 18px;
  }
  *{box-sizing:border-box}
  html,body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;color:#0d1421;background:#f6f8fc}
  a{color:inherit;text-decoration:none}
  img{max-width:100%;display:block}

  /* Header */
  .hdr{
    position:sticky;top:0;z-index:50;
    backdrop-filter:saturate(140%) blur(6px);
    background:linear-gradient( to right, rgba(255,255,255,.85), rgba(255,255,255,.85) );
    box-shadow:0 1px 0 rgba(15,23,42,.06);
  }
  .wrap{max-width:1100px;margin:auto;padding:0 20px}
  .nav{display:flex;align-items:center;justify-content:space-between;height:64px}
  .brand{display:flex;align-items:center;gap:10px;font-weight:800;letter-spacing:.2px}
  .logo{
    width:36px;height:36px;border-radius:12px;
    background:linear-gradient(135deg,var(--brand),var(--brand-2));
    box-shadow:0 8px 18px rgba(33,212,253,.35);
  }
  .menu{display:flex;gap:10px;flex-wrap:wrap}
  .menu button{
    border:0;background:transparent;padding:10px 12px;border-radius:12px;
    font-weight:600;color:#1b2a44;cursor:pointer
  }
  .menu button:hover{background:#eef3ff}
  .menu .primary{
    background:linear-gradient(135deg,var(--brand),var(--brand-2));
    color:#fff;box-shadow:0 10px 20px var(--ring)
  }

  /* Hero */
  .hero{
    background:
      radial-gradient(1200px 400px at 60% -20%, rgba(33,212,253,.18), transparent 60%),
      radial-gradient(800px 300px at 20% -10%, rgba(183,33,255,.14), transparent 60%),
      #0f172a url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width=\"1200\" height=\"800\"><defs><linearGradient id=\"g\" x1=\"0\" x2=\"1\" y1=\"0\" y2=\"1\"><stop stop-color=\"%2321d4fd\"/><stop offset=\"1\" stop-color=\"%23b721ff\"/></linearGradient></defs><circle cx=\"1000\" cy=\"160\" r=\"120\" fill=\"url(%23g)\" opacity=\"0.16\"/></svg>') no-repeat right top/contain;
    color:#e6f7ff;
  }
  .hero .in{max-width:1100px;margin:auto;padding:76px 20px 48px}
  .pill{
    display:inline-flex;gap:8px;align-items:center;
    background:#0b1220;border:1px solid rgba(255,255,255,.12);color:#bfe9ff;
    padding:8px 12px;border-radius:999px;font-size:13px;font-weight:600
  }
  .hero h1{
   margin:16px 0 8px;font-size:40px;line-height:1.1;
   letter-spacing:.2px;background:linear-gradient(135deg,#fff 0%, #bfe9ff 60%);
   -webkit-background-clip:text;background-clip:text;color:transparent
  }
  .hero p{max-width:760px;font-size:18px;color:#c8e6ff}
  .cta{display:flex;gap:12px;margin-top:18px;flex-wrap:wrap}
  .btn{
    border:0;border-radius:14px;padding:12px 16px;font-weight:700;cursor:pointer
  }
  .btn.brand{background:linear-gradient(135deg,var(--brand),var(--brand-2));color:#fff;box-shadow:var(--shadow)}
  .btn.ghost{background:#0b1220;color:#cde7ff;border:1px solid rgba(255,255,255,.12)}

  /* Feature grid */
  .section{padding:54px 20px}
  .grid{
    display:grid;grid-template-columns:repeat(3,1fr);gap:16px
  }
  .card{
    background:#fff;border:1px solid #e9eef6;border-radius:var(--radius);
    padding:18px;box-shadow:var(--shadow)
  }
  .card h3{margin:8px 0 6px;font-size:18px}
  .card p{margin:0;color:#5b6b82}

  /* Split block */
  .split{display:grid;grid-template-columns:1.1fr 1fr;gap:24px;align-items:center}
  .panel{
    background:#fff;border:1px solid #e8eef7;border-radius:var(--radius);padding:18px;box-shadow:var(--shadow)
  }
  .statbar{display:flex;gap:16px;margin-top:10px;flex-wrap:wrap}
  .chip{
    background:#0f172a;color:#d7e7ff;border:1px solid #23314d;padding:10px 12px;border-radius:12px;font-weight:700
  }

  /* Courses list */
  .course{
    display:flex;gap:14px;align-items:flex-start;background:#0f172a;color:#e9f2ff;border-radius:16px;
    padding:16px;border:1px solid #1f2b45
  }
  .badge{min-width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,var(--brand),var(--brand-2))}
  .course h4{margin:2px 0 4px}
  .course p{margin:0;color:#c2d3f0}

  /* Founder section */
  .founder{
    background:
      radial-gradient(900px 300px at 40% -20%, rgba(33,212,253,.18), transparent 60%),
      #0e1a2b;
    color:#dbeafe;
  }
  .founder h2{color:#fff}
  .founder .panel{background:#0b1220;border-color:#1f2b45;color:#cfe6ff}

  /* Contact */
  .contact{
    display:grid;grid-template-columns:1fr 1fr;gap:24px
  }
  form .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  input,textarea{
    width:100%;padding:12px 14px;border-radius:12px;border:1px solid #d9e3f3;background:#fff;
    font:inherit;outline:none
  }
  input:focus,textarea:focus{box-shadow:0 0 0 3px var(--ring);border-color:#bfe6ff}
  textarea{min-height:120px;resize:vertical}
  .muted{color:#5b6b82}

  /* Footer */
  .ftr{
    margin-top:40px;background:#0b1220;color:#b8c7e3;border-top:1px solid #1f2b45
  }
  .ftr .cols{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;padding:30px 20px}
  .ftr a{color:#cde0ff}
  .copy{padding:16px 20px;border-top:1px solid #16233a;color:#90a3c7}

  /* Utilities + responsive */
  .title{font-size:28px;margin:0 0 12px}
  .subtitle{margin:0 0 18px;color:#5b6b82}
  @media (max-width:980px){
    .grid{grid-template-columns:1fr}
    .split{grid-template-columns:1fr}
    .contact{grid-template-columns:1fr}
    .ftr .cols{grid-template-columns:1fr 1fr}
  }
  @media (max-width:560px){
    .nav{height:auto;gap:8px;padding:10px 0}
    .menu{gap:6px}
    .hero h1{font-size:32px}
    .ftr .cols{grid-template-columns:1fr}
  }
</style>
</head>
<body>

<header class="hdr">
  <div class="wrap nav">
    <div class="brand" onclick="go('index.php#top')" style="cursor:pointer">
      <div class="logo"></div><div>Rehan.Education</div>
    </div>
    <nav class="menu">
      <button onclick="go('index.php#home')">Home</button>
      <button onclick="go('curriculum.php')">Curriculum</button>
      <button onclick="jump('#courses')">Courses</button>
      <button onclick="go('facilitators.php')">Facilitators</button>
      <button onclick="jump('#founder')">Founder’s Message</button>
      <button class="primary" onclick="jump('#contact')">Contact Us</button>
    </nav>
  </div>
</header>

<main id="home">
  <!-- HERO -->
  <section class="hero" id="top">
    <div class="in">
      <span class="pill">AI-Enabled Education • Positive Impact • Financial Independence</span>
      <h1>Digital Mastery for a Connected World</h1>
      <p>
        A practical program for teens to unleash their digital potential, learn AI skills,
        and teach online — empowering students to positively impact <strong>10 million lives</strong>
        while building real pathways to financial independence.
      </p>
      <div class="cta">
        <button class="btn brand" onclick="go('curriculum.php')">Explore Curriculum</button>
        <button class="btn ghost" onclick="jump('#contact')">Talk to Us</button>
      </div>
    </div>
  </section>

  <!-- UNIQUE FEATURES -->
  <section class="section">
    <div class="wrap">
      <h2 class="title">What Makes Us Unique?</h2>
      <p class="subtitle">A modern curriculum blending AI proficiency, digital skills, and online teaching.</p>
      <div class="grid">
        <div class="card"><h3>AI-Enabled Education</h3><p>Daily, hands-on AI tools to research, create, and automate with responsibility and ethics.</p></div>
        <div class="card"><h3>Digital Skills Acquisition</h3><p>Web presence, content design, video, freelancing, micro-entrepreneurship & personal branding.</p></div>
        <div class="card"><h3>Online Teaching Proficiency</h3><p>Learn to plan lessons, record tutorials, and teach skills to others — multiplying impact.</p></div>
      </div>
    </div>
  </section>

  <!-- WHY + STATS -->
  <section class="section">
    <div class="wrap split">
      <div class="panel">
        <h2 class="title">Why Rehan.Education?</h2>
        <p class="muted">
          We believe leaders are made, not born. Our students learn by doing:
          creating content, teaching online, and collaborating on real projects that serve their communities.
        </p>
        <div class="statbar">
          <span class="chip">200+ mentors</span>
          <span class="chip">5000+ learners</span>
          <span class="chip">70+ cities</span>
        </div>
      </div>
      <div class="panel">
        <h3 style="margin:0 0 8px">Quick Contact</h3>
        <p class="muted">Call/WhatsApp: <strong>+44 7418 359852</strong></p>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
          <a class="btn" style="background:#1877f2;color:#fff" href="#" onclick="alert('Open Facebook page');return false;">Facebook</a>
          <a class="btn" style="background:#e1306c;color:#fff" href="#" onclick="alert('Open Instagram page');return false;">Instagram</a>
          <a class="btn" style="background:#1d9bf0;color:#fff" href="#" onclick="alert('Open Twitter/X page');return false;">Twitter/X</a>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSES -->
  <section class="section" id="courses">
    <div class="wrap">
      <h2 class="title">Signature Courses</h2>
      <p class="subtitle">Project-based, outcome-driven learning tracks.</p>
      <div class="grid">
        <div class="course">
          <div class="badge"></div>
          <div>
            <h4>AI Basics for Teens</h4>
            <p>Prompts, responsible use, research workflows, and automations that save hours weekly.</p>
          </div>
        </div>
        <div class="course">
          <div class="badge"></div>
          <div>
            <h4>Digital Presence & Content</h4>
            <p>Build a simple site, design posts, script videos, and launch your first teaching playlist.</p>
          </div>
        </div>
        <div class="course">
          <div class="badge"></div>
          <div>
            <h4>Teach Online Bootcamp</h4>
            <p>Lesson design, recording, feedback loops, and publishing your first mini-course.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOUNDER -->
  <section class="section founder" id="founder">
    <div class="wrap">
      <h2 class="title">Founder’s Message</h2>
      <div class="panel">
        <p>
          “Our mission is to enable every student to learn modern digital skills, share their knowledge,
          and use technology to serve people at scale. When students teach, they lead.”
        </p>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="section" id="contact">
    <div class="wrap">
      <h2 class="title">Contact Us</h2>
      <p class="subtitle">We’re happy to guide you through the program and enrollment.</p>
      <div class="contact">
        <div class="panel">
          <h3 style="margin:0 0 10px">Reach Us</h3>
          <p class="muted">Phone/WhatsApp: <strong>+44 7418 359852</strong></p>
          <p class="muted">Email: <strong>hello@rehan.education</strong></p>
          <p class="muted">Address: Digital Campus, Global</p>
          <hr style="border:none;border-top:1px solid #e8eef7;margin:14px 0">
          <p class="muted">Social: Facebook • Instagram • Twitter/X</p>
        </div>
        <div class="panel">
          <h3 style="margin:0 0 10px">Send a Message</h3>
          <form id="msg">
            <div class="row">
              <input required placeholder="Your name" name="name" />
              <input required type="email" placeholder="Email" name="email" />
            </div>
            <div style="margin-top:10px">
              <textarea required placeholder="How can we help?" name="message"></textarea>
            </div>
            <div style="margin-top:12px;display:flex;gap:10px;align-items:center">
              <button type="submit" class="btn brand">Submit</button>
              <span class="muted" id="form-note"></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="ftr">
  <div class="wrap cols">
    <div>
      <div class="brand" style="margin-bottom:10px"><div class="logo"></div><div>Rehan.Education</div></div>
      <p>AI-enabled education to impact 10M lives.</p>
    </div>
    <div>
      <h4>Navigate</h4>
      <p><a href="#" onclick="go('curriculum.php')">Curriculum</a><br>
         <a href="#" onclick="go('facilitators.php')">Facilitators</a><br>
         <a href="#" onclick="jump('#courses')">Courses</a></p>
    </div>
    <div>
      <h4>Contact</h4>
      <p>+44 7418 359852<br>hello@rehan.education</p>
    </div>
    <div>
      <h4>Social</h4>
      <p><a href="#" onclick="alert('Open Facebook');return false;">Facebook</a> •
         <a href="#" onclick="alert('Open Instagram');return false;">Instagram</a> •
         <a href="#" onclick="alert('Open Twitter/X');return false;">X</a></p>
    </div>
  </div>
  <div class="copy wrap">© <?php echo date('Y'); ?> Rehan.Education — All rights reserved.</div>
</footer>

<script>
  // Simple JS navigation (no PHP routing)
  function go(path){ window.location.href = path; }
  function jump(hash){
    if(hash.startsWith('#')) {
      document.querySelector(hash)?.scrollIntoView({behavior:'smooth',block:'start'});
    } else { window.location.href = hash; }
  }

  // Contact form
  document.getElementById('msg').addEventListener('submit', function(e){
    e.preventDefault();
    const data = Object.fromEntries(new FormData(this).entries());
    document.getElementById('form-note').textContent = "Thanks, "+data.name+"! We’ll reply soon.";
    this.reset();
  });
</script>
</body>
</html>
