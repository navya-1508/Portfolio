<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transition.css"/>
    <title>Portfolio</title>
</head>
<body class="body">

    <img class="image" src="logo.jpg" alt="Navya"/>

    <nav class="navbar">
        <ul>
            <li><a href="#home" onclick="scrollToSection('home')">Home</a></li>
            <li><a href="#bio" onclick="scrollToSection('bio')">Bio</a></li>
            <li><a href="#resume" onclick="scrollToSection('resume')">Resume</a></li>
            <li><a href="#skills" onclick="scrollToSection('skills')">Skills</a></li>
            <li><a href="#contact" onclick="scrollToSection('contact')">Contact</a></li>
        </ul>
    </nav>


    <!-- Content Sections -->
    <section id="home">
        <h1 class="click" onClick="back()">HI!! IAM NAVYA</h1>
        <!-- Add your home section content here -->
    </section>

    <section id="bio">
        <h2>Bio Section</h2>
        <!-- Add your bio section content here -->
    </section>

    <section id="resume">
        <center><h1 onClick="back1()">View Resume</center>
    </section>

    <section id="skills">
<div class="skill">
    <div class="skill-tags">
         <div class="tag1">
            <h1>React</h1>
</div>
<div class="tag2">
    <h1>Java</h1>
</div>
<div class="tag3">
    <h1>Php</h1>
</div>
<div class="tag4">
    <h1>C</h1>
</div>
</div>
</div>
    </section>

    <section id="contact">
        <h2>Contact Section</h2>
        <!-- Add your contact section content here -->
    </section>

    <script>
        function scrollToSection(sectionId) {
            const targetSection = document.getElementById(sectionId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - document.querySelector('.navbar').offsetHeight,
                    behavior: 'smooth'
                });
            }   
        }

        function back() {
            window.location.href = 'hello.php';
        }
        function back1() {
            window.location.href = 'resume.png';
        }

    </script>
</body>
</html>
