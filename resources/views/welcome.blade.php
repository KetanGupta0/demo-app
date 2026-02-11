<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chandra Kishor Gupta | Backend Systems Engineer + DevOps</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
  font-family: "Segoe UI", sans-serif;
  scroll-behavior: smooth;
}

.navbar {
  background: rgba(0, 0, 0, 0.92);
}

.hero {
  height: 100vh;
  background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
  padding-top: 80px;
}

.profile-card {
  background: white;
}

.skill-box,
.project-box,
.experience-box,
.education-box,
.contact-box {
  transition: 0.3s;
}

.skill-box:hover,
.project-box:hover,
.experience-box:hover {
  transform: translateY(-5px);
}

footer {
  background: #111;
}

ul {
  padding-left: 18px;
}

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Chandra Kishor Gupta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#devops">DevOps</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero d-flex align-items-center">
    <div class="container text-center text-white">
      <h1 class="display-4 fw-bold">Chandra Kishor Gupta</h1>
      <h3 class="mt-2 text-warning fw-bold">Backend Systems Engineer</h3>

      <p class="lead mt-3">
        APIs, Payments, Cloud-aware Systems | Laravel Developer → DevOps Hands-on Engineer
      </p>

      <p class="mt-2">
        <i class="bi bi-geo-alt-fill text-warning"></i> Patna, Bihar |
        <i class="bi bi-telephone-fill text-warning"></i> +91 8709250721 |
        <i class="bi bi-envelope-fill text-warning"></i> ckg4155@gmail.com
      </p>

      <div class="mt-4">
        <a href="#projects" class="btn btn-warning btn-lg me-2">View Projects</a>
        <a href="https://jmccomputers.site" target="_blank" class="btn btn-outline-light btn-lg">
          Live DevOps Project
        </a>
      </div>

      <div class="mt-4">
        <span class="badge bg-success p-2 me-2">AWS EC2</span>
        <span class="badge bg-primary p-2 me-2">Docker</span>
        <span class="badge bg-danger p-2 me-2">Laravel</span>
        <span class="badge bg-dark p-2">GitHub Actions</span>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-md-8">
          <h2 class="fw-bold">Professional Summary</h2>
          <p class="mt-3">
            Backend Systems Engineer with hands-on experience designing, building, and operating production-grade
            backend systems and REST APIs for business-critical applications.
          </p>

          <p>
            Strong background in payment systems, database design, and transaction-safe integrations.
            Experienced in cloud deployments, CI/CD pipelines, caching strategies, and performance optimization,
            with real-world exposure to uptime-sensitive and revenue-impacting systems.
          </p>
        </div>

        <div class="col-md-4 text-center">
          <div class="profile-card shadow-lg p-4 rounded-4">
            <i class="bi bi-person-circle display-1 text-warning"></i>
            <h4 class="mt-3 fw-bold">Chandra Kishor Gupta</h4>
            <p class="text-muted mb-1">Backend Systems Engineer</p>
            <p class="text-muted">Laravel + DevOps</p>

            <a href="https://jmccomputers.site" target="_blank" class="btn btn-dark w-100 mt-2">
              <i class="bi bi-globe"></i> Live Project
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center">Core Competencies</h2>
      <p class="text-center text-muted">Backend Engineering + Cloud + DevOps</p>

      <div class="row mt-4 g-4">

        <div class="col-md-6">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-diagram-3-fill text-danger"></i> Backend & Payments</h5>
            <ul class="mt-3">
              <li>Backend API Design & Architecture (REST)</li>
              <li>Payment Systems & Transaction Handling</li>
              <li>Database Design, Optimization & Data Integrity</li>
              <li>Authentication, Authorization & Security Basics</li>
              <li>Caching & Performance Optimization (Redis)</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-cloud-fill text-primary"></i> Cloud & DevOps</h5>
            <ul class="mt-3">
              <li>AWS EC2 (Ubuntu Linux)</li>
              <li>Nginx, Apache</li>
              <li>Docker & Docker Compose</li>
              <li>Deployment, Release Management & CI/CD</li>
              <li>Git, GitHub Actions, SSH Deploy Keys</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="row mt-4 g-4">
        <div class="col-md-12">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-stack text-success"></i> Technology Stack</h5>
            <p class="mt-3 mb-1"><b>Languages & Frameworks:</b> PHP (Laravel), ASP.NET</p>
            <p class="mb-1"><b>Databases:</b> MySQL, SQL Server</p>
            <p class="mb-1"><b>Caching:</b> Redis</p>
            <p class="mb-1"><b>Cloud & Infrastructure:</b> AWS EC2, Linux, Nginx, Apache</p>
            <p class="mb-0"><b>DevOps:</b> Git, GitHub Actions, CI/CD Pipelines, SSH</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- DevOps Section -->
  <section id="devops" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center">DevOps Deployment (Hands-on)</h2>
      <p class="text-center text-muted">
        Production-ready deployment of Laravel application using AWS + Docker + CI/CD.
      </p>

      <div class="row mt-4 g-4">

        <div class="col-md-6">
          <div class="card shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
              <h4 class="fw-bold text-success"><i class="bi bi-hdd-network"></i> Infrastructure</h4>
              <ul class="mt-3">
                <li>AWS EC2 (Ubuntu)</li>
                <li>Dockerized Laravel stack</li>
                <li>Nginx + MySQL + PHP-FPM</li>
                <li>Domain pointing correctly</li>
                <li>HTTPS with Let’s Encrypt</li>
                <li>Port 80 → redirect to 443</li>
                <li>Containers running on port 80/443</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
              <h4 class="fw-bold text-primary"><i class="bi bi-rocket-takeoff"></i> CI/CD Pipeline</h4>
              <ul class="mt-3">
                <li>GitHub repository</li>
                <li>GitHub Actions workflow</li>
                <li>Dedicated SSH deploy key</li>
                <li>Secrets configured</li>
                <li>Push to main triggers deployment</li>
                <li>Auto rebuild containers</li>
                <li>Auto run migrations</li>
                <li>Auto clear cache</li>
                <li>MySQL wait fix implemented</li>
                <li>CI run = SUCCESS</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center">Work Experience</h2>
      <p class="text-center text-muted">Real production work on backend systems & payment platforms</p>

      <div class="row mt-4 g-4">

        <div class="col-md-12">
          <div class="experience-box shadow-sm p-4 rounded-4 bg-white">
            <h4 class="fw-bold">PurnTech Retail Finlife India (OPC) Pvt. Ltd.</h4>
            <p class="text-muted mb-1"><b>Backend Systems Engineer</b></p>
            <p class="text-muted">Sep 2024 – Jan 2026</p>

            <ul>
              <li>Owned backend architecture and REST API development for utility billing and merchant payment platforms.</li>
              <li>Designed transaction-safe payment workflows including validation, reconciliation, and redirect-based gateway handling.</li>
              <li>Optimized MySQL database structures and queries for high-traffic production usage.</li>
              <li>Introduced Redis caching to improve response times and stabilize application performance.</li>
              <li>Supported Linux-based cloud deployments, environment configuration, and CI/CD-driven releases.</li>
              <li>Ensured uptime, data consistency, and operational stability during peak traffic.</li>
            </ul>
          </div>
        </div>

        <div class="col-md-12">
          <div class="experience-box shadow-sm p-4 rounded-4 bg-white">
            <h4 class="fw-bold">Polytropic Services</h4>
            <p class="text-muted mb-1"><b>Software Designer and Developer</b></p>
            <p class="text-muted">Feb 2024 – Sep 2024</p>

            <ul>
              <li>Maintained and enhanced government and university portals for admission and examination workflows.</li>
              <li>Worked on ASP.NET + SQL Server systems supporting large student populations.</li>
              <li>Developed Tabulation Register (TR) and result publishing systems with high data integrity requirements.</li>
              <li>Integrated CC Avenue payment gateway for fee transactions.</li>
              <li>Resolved production issues during peak form submission and exam schedules.</li>
            </ul>
          </div>
        </div>

        <div class="col-md-12">
          <div class="experience-box shadow-sm p-4 rounded-4 bg-white">
            <h4 class="fw-bold">SpecBits</h4>
            <p class="text-muted mb-1"><b>PHP Developer</b></p>
            <p class="text-muted">Feb 2023 – Jan 2024</p>

            <ul>
              <li>Built backend modules for GST billing and inventory management software.</li>
              <li>Developed product, stock, pricing, invoicing, and reporting systems.</li>
              <li>Implemented import/export tools for business data and reporting.</li>
              <li>Added dashboard alerts and WhatsApp low-stock notifications using AJAX workflows.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center">Key Projects</h2>
      <p class="text-center text-muted">Production projects built & deployed</p>

      <div class="row mt-4 g-4">

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4">
            <h5 class="fw-bold">Utility Bill Payment Platform</h5>
            <p class="text-muted mb-2">pay.purntravel.com</p>
            <p>Utility billing backend platform with transaction-safe workflows and payment integrations.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4">
            <h5 class="fw-bold">Merchant Payment Portal</h5>
            <p class="text-muted mb-2">merchant.purntech.com</p>
            <p>Merchant payment and reconciliation system for business transactions.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4">
            <h5 class="fw-bold">UNIQPE University Platform</h5>
            <p class="text-muted mb-2">uniqpe.online</p>
            <p>University portal for student operations, data integrity, and examination workflows.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4">
            <h5 class="fw-bold">1By10 Platforms</h5>
            <p class="text-muted mb-2">1by10.ink | 1by10.live | 1by10.online</p>
            <p>Multi-domain platform deployment and backend management systems.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4">
            <h5 class="fw-bold">AllFine Platform</h5>
            <p class="text-muted mb-2">allfine.live</p>
            <p>Backend platform with web workflows and scalable database integration.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="project-box shadow-sm rounded-4 p-4 text-center">
            <h5 class="fw-bold">Live DevOps Deployment Project</h5>
            <p class="text-muted mb-2">jmccomputers.site</p>
            <p>Laravel project deployed using AWS EC2, Docker, Nginx, SSL & GitHub Actions CI/CD.</p>

            <a href="https://jmccomputers.site" target="_blank" class="btn btn-warning btn-sm mt-2">
              Visit Live
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Education -->
  <section id="education" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center">Education</h2>
      <p class="text-center text-muted">Academic Background</p>

      <div class="row justify-content-center mt-4">
        <div class="col-md-10">
          <div class="education-box shadow-sm p-4 rounded-4 bg-white">
            <ul class="mb-0">
              <li><b>MCA (Master of Computer Application)</b> – Shoolini University (2025 – 2027)</li>
              <li class="mt-2"><b>BCA (Bachelor of Computer Application)</b> – IGNOU (2020 – 2023)</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center">Contact</h2>
      <p class="text-center text-muted">Let’s connect and discuss opportunities 🚀</p>

      <div class="row justify-content-center mt-4">
        <div class="col-md-6">
          <div class="contact-box shadow-sm p-4 rounded-4 text-center bg-white">
            <p><i class="bi bi-geo-alt-fill text-warning"></i> Patna, Bihar</p>
            <p><i class="bi bi-telephone-fill text-warning"></i> +91 8709250721</p>
            <p><i class="bi bi-envelope-fill text-warning"></i> <b id="emailText">ckg4155@gmail.com</b></p>

            <button onclick="copyEmail()" class="btn btn-dark mt-3">
              <i class="bi bi-clipboard"></i> Copy Email
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-white py-3">
    <p class="mb-0">© 2026 Chandra Kishor Gupta | Backend Systems Engineer</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    function copyEmail() {
  const email = document.getElementById("emailText").innerText;
  navigator.clipboard.writeText(email);
  alert("Email copied: " + email);
}

  </script>

</body>

</html>
