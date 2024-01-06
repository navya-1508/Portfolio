<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Your Portfolio</title>
  <style>
    /* Additional styles for the sections if needed */
    section {
      margin: 50px 0;
      padding: 20px;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#bio">Bio</a></li>
    <li><a href="#resume">Resume</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<section id="home">
  <h1>Welcome to My Portfolio</h1>
  <!-- Add content for the home section -->
</section>

<section id="bio">
  <h2>Bio</h2>
  <!-- Add content for the bio section -->
</section>

<section id="resume">
  <h2>Resume</h2>
  <!-- Add content for the resume section -->
</section>

<section id="skills">
  <h2>Skills</h2>
  <!-- Add content for the skills section -->
</section>

<section id="projects">
  <h2>Projects</h2>
  <!-- Add content for the projects section -->
</section>

<section id="contact">
  <h2>Contact</h2>
  <!-- Add content for the contact section -->
</section>

<script>
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>

</body>
</html>
