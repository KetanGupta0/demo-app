<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chandra Kishor Gupta | Laravel Developer + DevOps Engineer</title>

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
  background: rgba(0, 0, 0, 0.9);
}

.hero {
  height: 100vh;
  background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
  padding-top: 80px;
}

.profile-card {
  background: white;
}

.skill-box {
  background: white;
  transition: 0.3s;
}

.skill-box:hover {
  transform: translateY(-5px);
}

.project-box {
  background: white;
}

footer {
  background: #111;
}

.contact-box {
  background: white;
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
          <li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero d-flex align-items-center">
    <div class="container text-center text-white">
      <h1 class="display-4 fw-bold">Laravel Developer + DevOps Engineer</h1>
      <p class="lead mt-3">
        Building scalable web applications & deploying them using AWS, Docker, Nginx, and CI/CD pipelines.
      </p>

      <div class="mt-4">
        <a href="#project" class="btn btn-warning btn-lg me-2">View Project</a>
        <a href="#contact" class="btn btn-outline-light btn-lg">Contact Me</a>
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

        <div class="col-md-7">
          <h2 class="fw-bold">About Me</h2>
          <p class="mt-3">
            Hi, I'm <b>Chandra Kishor Gupta</b>. I started my career as a <b>Laravel Backend Developer</b>,
            building REST APIs, payment integrations, and database-driven systems.
          </p>

          <p>
            Now, I have upgraded my skills and gained strong hands-on experience in <b>DevOps operations</b>,
            deploying production-ready applications using AWS EC2, Dockerized infrastructure, Nginx reverse proxy,
            SSL with Let's Encrypt, and automated CI/CD using GitHub Actions.
          </p>

          <p class="text-muted">
            My goal is to become a complete Backend + DevOps Engineer who can develop and deploy scalable applications.
          </p>
        </div>

        <div class="col-md-5 text-center">
          <div class="profile-card shadow-lg p-4 rounded-4">
            <i class="bi bi-person-circle display-1 text-warning"></i>
            <h4 class="mt-3 fw-bold">Chandra Kishor Gupta</h4>
            <p class="text-muted">Laravel Developer | DevOps Engineer</p>
            <a href="https://jmccomputers.site" target="_blank" class="btn btn-dark w-100">
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
      <h2 class="fw-bold text-center">Technical Skills</h2>
      <p class="text-center text-muted">Backend Development + DevOps Operations</p>

      <div class="row mt-4 g-4">

        <div class="col-md-4">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-code-slash text-danger"></i> Backend Development</h5>
            <ul class="mt-3">
              <li>Laravel (REST APIs)</li>
              <li>PHP, MySQL</li>
              <li>Authentication & Authorization</li>
              <li>Database Design (DBMS)</li>
              <li>Payment API Integration</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-cloud text-primary"></i> DevOps Skills</h5>
            <ul class="mt-3">
              <li>AWS EC2 (Ubuntu)</li>
              <li>Docker & Docker Compose</li>
              <li>Nginx Reverse Proxy</li>
              <li>SSL (Let's Encrypt)</li>
              <li>Linux Server Management</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-box p-4 shadow-sm rounded-4">
            <h5 class="fw-bold"><i class="bi bi-git text-dark"></i> CI/CD + Automation</h5>
            <ul class="mt-3">
              <li>GitHub Actions</li>
              <li>SSH Deploy Keys</li>
              <li>Secrets & Environment Setup</li>
              <li>Auto Deployment on Push</li>
              <li>Cache Clear & Migrations Automation</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DevOps Section -->
  <section id="devops" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center">DevOps Hands-on Experience</h2>
      <p class="text-center text-muted">
        Full production-ready deployment with AWS + Docker + CI/CD
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
                <li>Domain configured correctly</li>
                <li>HTTPS enabled using Let’s Encrypt</li>
                <li>Port 80 redirects to 443</li>
                <li>Containers exposed on 80/443</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card shadow-sm rounded-4 h-100">
            <div class="card-body p-4">
              <h4 class="fw-bold text-primary"><i class="bi bi-rocket-takeoff"></i> CI/CD Pipeline</h4>
              <ul class="mt-3">
                <li>GitHub repository connected</li>
                <li>GitHub Actions workflow created</li>
                <li>Dedicated SSH deploy key</li>
                <li>Secrets configured properly</li>
                <li>Push to main triggers deployment</li>
                <li>Auto rebuild Docker containers</li>
                <li>Auto run migrations</li>
                <li>Auto clear Laravel cache</li>
                <li>MySQL wait fix implemented</li>
                <li>CI run status = SUCCESS</li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Project -->
  <section id="project" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center">Live Project</h2>
      <p class="text-center text-muted">
        A production Laravel application deployed using AWS + Docker + CI/CD.
      </p>

      <div class="row justify-content-center mt-4">
        <div class="col-md-8">
          <div class="project-box shadow-lg rounded-4 p-4 text-center">
            <h3 class="fw-bold">JMC Computers</h3>
            <p class="text-muted">
              Fully deployed Laravel project with Docker + Nginx + SSL + GitHub Actions deployment pipeline.
            </p>

            <a href="https://jmccomputers.site" target="_blank" class="btn btn-warning btn-lg mt-2">
              <i class="bi bi-box-arrow-up-right"></i> Visit Live Website
            </a>

            <div class="mt-4">
              <span class="badge bg-dark p-2 me-2">Laravel</span>
              <span class="badge bg-primary p-2 me-2">AWS EC2</span>
              <span class="badge bg-success p-2 me-2">Docker</span>
              <span class="badge bg-danger p-2 me-2">Nginx</span>
              <span class="badge bg-info p-2">GitHub Actions</span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center">Contact Me</h2>
      <p class="text-center text-muted">Let’s connect and build something awesome 🚀</p>

      <div class="row justify-content-center mt-4">
        <div class="col-md-6">
          <div class="contact-box shadow-sm p-4 rounded-4 text-center">
            <p><i class="bi bi-envelope-fill text-warning"></i> Email: <b>your-email@gmail.com</b></p>
            <p><i class="bi bi-linkedin text-primary"></i> LinkedIn: <b>linkedin.com/in/yourprofile</b></p>
            <p><i class="bi bi-github text-dark"></i> GitHub: <b>github.com/yourgithub</b></p>

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
    <p class="mb-0">© 2026 Chandra Kishor Gupta | Laravel Developer + DevOps Engineer</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script>
    function copyEmail() {
  const email = "your-email@gmail.com";
  navigator.clipboard.writeText(email);
  alert("Email copied: " + email);
}

  </script>

</body>

</html>
