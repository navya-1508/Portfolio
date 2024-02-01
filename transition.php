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
        <h2>Bio</h2>
        <h3>Videla Navya</h3>
<h4>About Me</h4>
<p>I am a Navya with a passion for 
    Web development. Leveraging my 0 years of experience, 
    I specialize in [Key Skills or Technologies] and have a proven track record of
     [Notable Achievements or Projects].</p>
     <p>Education
[Degree] in [Your Field of Study], [University Name], [Year of Graduation]</p>
<h3>Professional Experience</h3>
<p>[Current/Previous Job Title] - [Current/Previous Company]
[Responsibility/Accomplishment #1]
[Responsibility/Accomplishment #2]
[Responsibility/Accomplishment #3]
[Previous Job Title] - [Previous Company]
[Responsibility/Accomplishment #1]
[Responsibility/Accomplishment #2]
[Responsibility/Accomplishment #3]</P>
<h3>Key Skills</h3>
<p>[Skill #1]
[Skill #2]
[Skill #3]
[Skill #4]</p>
<h3>Projects</h3>
<p>[Project Title #1]
[Brief Description of the Project]
[Your Role and Contributions]
[Technologies/Tools Used]
[Project Title #2]
[Brief Description of the Project]
[Your Role and Contributions]
[Technologies/Tools Used]</p>
<h3>Certifications</h3>
<p>[Certification #1]
[Certification #2]
Contact Information
Email: [Your Email Address]
LinkedIn: [Your LinkedIn Profile]
GitHub: [Your GitHub Profile]
Portfolio: [Link to Your Portfolio/Website]
Personal Statement
I am dedicated to [Your Core Values/Philosophy], and I thrive in [Describe Your Work Environment or Team Dynamics]. My goal is to [Your Aspirations/Career Goals], and I am always eager to [Your Approach to Continuous Learning/Improvement].

Thank you for considering my portfolio. I am excited about the opportunity to [Future Plans/Projects], and I look forward to connecting with you.
</p>

        <button class="back-to-top-button" onclick="scrollToSection('home')">Back to top</button>
    </section>

    <section id="resume">
        <center><h1 onClick="back1()">View Resume</center>
        <h2><a href="resume.png" download="Navya_Resume">Download Resume</a></h2>
        <button class="back-to-top-button" onclick="scrollToSection('home')">Back to top</button>
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
            <button class="back-to-top-button" onclick="scrollToSection('home')">Back to top</button>
        </div>
    </section>

    <section id="contact">
        <h2>Contact me</h2>
        <div class="total">
        <div class="images">
        <div class="image-container">
            <img class="git" src="github.png" alt="Github"/>
            <span><a href="https://github.com/navya-1508/">navya-1508</a></span>
        </div>
        <div class="image-container">
            <img class="linkedin" src="linkedin.png" alt="Linkedin"/>
            <span><a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit">Videla Navya</span>
        </div>
        <div class="image-container">
            <img class="insta" src="instagram.jpeg" alt="Instagram"/>
            <span><a id="insta" href="#contact">_navya_04</a></span>
        </div>
        <div class="image-container">
            <img class="email" src="email.png" alt="Email"/>
            <span><a href="https://mail.google.com/mail/u/0/#inbox">Videla Navya</a></span>
        </div>
        </div>
       <img class="contacti" src="contacti.png" alt="Contact"/> 
       </div>
        <button class="back-to-top-button" onclick="scrollToSection('home')">Back to top</button>
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
        document.addEventListener('scroll', function() {
    var buttons = document.querySelectorAll('.back-to-top-button');

    buttons.forEach(function(button) {
        var currentSection = getCurrentSection();
        
        // Check if the current section is not the home section
        if (currentSection == 'home' && (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
});

function getCurrentSection() {
    var sections = document.querySelectorAll('section');
    var currentSectionId = 'home';

    sections.forEach(function(section) {
        var rect = section.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
            currentSectionId = section.id;
        }
    });

    return currentSectionId;
}
    </script>
</body>
</html>
