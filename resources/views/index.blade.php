<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bob Merks</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body onload="fadeIn()">
<div class="page">
  <nav class="nav">
    <div class="nav-content">
      <a class="nav-link" href="#projects">My projects</a>
      <a class="nav-link" href="#">Contact</a>
    </div>
  </nav>

  <section class="landing">
    <div class="landing-content">
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-1">Bob Merks.</span>
      </div>
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-2">A student with</span>
      </div>
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-3">a passion for</span>
      </div>
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-4">Programming</span>
      </div>
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-5">Design</span>
      </div>
      <div class="landing__line">
        <span class="landing__line-text landing__line-text-6">Learning</span>
      </div>
    </div>
    <div class="landing-content">
      <!-- TODO: add something interactive here i.e. 3d effect with mouse -->
    </div>
  </section>

  <section id="projects" class="projects">
    <span class="projects-header">My projects</span>
    <div class="projects-content">
      <!-- TODO: Place projects in these elements -->
      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

      <div class="projects__container">
        <span class="projects__container-title">A thing I made</span>
        <div class="projects__container-image"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate?</p>
        <a class="projects__container-link">View on GitHub</a>
      </div>

    </div>
  </section>

  <footer class="contact">
    <div class="contact-content"></div>
  </footer>
</div>
</body>

<script>
  function fadeIn() {
    const landingText = document.getElementsByClassName("landing__line-text");

    for (let i = 0; i < landingText.length; i++) {
      landingText.item(i).classList.add("visible");
    }
  }

</script>
</html>
