<html>
    <body class="body">
    <link rel="stylesheet" href="transition.css"/>
<nav class="navbar">
  <ul>
    <li><a href="#index.php">Home</a></li>
    <li><a href="#bio.php">Bio</a></li>
    <li><a href="#resume.php">Resume</a></li>
    <li><a href="#skills.php">Skills</a></li>
    <li><a href="#projects.php">Projects</a></li>
    <li><a href="#contact.php">Contact</a></li>
  </ul>
</nav>

    <h1 class="click" onClick="back()">HI!! IAM NAVYA</h1>
</body>
    </html>
<script>
    function back()
    {
        window.location.href='hello.php';
    }
    </script>
<script>
    // Scroll to the bottom of the page on load
    window.onload = function() {
      window.scrollTo(0, document.body.scrollHeight);
    };
  </script>
