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
      <!-- TODO: Change this to JS that scrolls 100vh -->
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
        <div class="projects__container-title">
          <span class="projects__container-title--text">This website</span>
          <span class="projects__container-title--date">October 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">JSON to radar graph</span>
          <span class="projects__container-title--date">June 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Sorting algorithms visualized</span>
          <span class="projects__container-title--date">March 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Drag-and-drop website builder</span>
          <span class="projects__container-title--date">January 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Movie list</span>
          <span class="projects__container-title--date">August 2019</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">PAL in OOPS</span>
          <span class="projects__container-title--date">May 2019</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, saepe.</p>
          <a class="projects__container-link">View on GitHub</a>
        </div>
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
