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
<body>
<div class="page">
  <nav class="nav">
    <div class="nav-content">
      <span id="nav-projects" class="nav-link">My projects</span>
      <span id="nav-contact" class="nav-link">Contact</span>
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
    {{--    <div class="landing-content">--}}
    {{--      <!-- TODO: add something interactive here i.e. 3d effect with mouse -->--}}
    {{--    </div>--}}
  </section>

  <section id="projects" class="projects">
    <div class="projects-content">
      <!-- TODO: add links -->
      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">This website</span>
          <span class="projects__container-title--date">October 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">A (re)make of my personal website, since I never really finished
            the first version I had (which can be found on my GitHub as well). It's still a work in progress, since it
            isn't fully responsive yet and there are some features I want to add.</p>
          <div class="projects__container-links">
            <a class="projects__container-links-link">GitHub</a>
          </div>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">JSON to radar graph</span>
          <span class="projects__container-title--date">June 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">During a school project we ran into an issue with converting existing JSON
            data, consisting of scores split up in various categories, to a radar graph showing these scores in a 0-100
            scale per category. I used JavaScript to take care of this problem and apply the data to a Chart.js radar
            graph.</p>
          <div class="projects__container-links">
            <a class="projects__container-links-link">GitHub</a>
            <a class="projects__container-links-link">Full website</a>
          </div>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Sorting algorithms visualized</span>
          <span class="projects__container-title--date">March 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">
            I gained some interest in sorting algorithms and took the opportunity to improve my JavaScript skills with
            this simple website.
          </p>
          <div class="projects__container-links">
            <a class="projects__container-links-link">GitHub</a>
            <a class="projects__container-links-link">Full website</a>
          </div>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Drag-and-drop website builder</span>
          <span class="projects__container-title--date">January 2020</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">During my first internship I was asked to make a drag-and-drop website
            builder in JavaScript and Symfony 4, similar to Wordpress. It allowed the creation and editing of multiple
            pages which later could be exported as HTML files that included all styling and scripts.</p>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text">Movie list</span>
          <span class="projects__container-title--date">August 2019</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">
            I wanted a way to keep track of what movies I watched and when, but an excel sheet wasn't good enough for
            me, so I decided to make my own simple CRUD website with PHP. I'm currently working on improving this
            website, since I used some pretty awkward code sometimes.</p>
          <div class="projects__container-links">
            <a class="projects__container-links-link">GitHub</a>
          </div>
        </div>
      </div>

      <div class="projects__container">
        <div class="projects__container-title">
          <span class="projects__container-title--text"> Website PAL in OOPS</span>
          <span class="projects__container-title--date">May 2019</span>
        </div>
        <div class="projects__container-image"></div>
        <div class="projects__container-description">
          <p class="projects__container-text">
            The first website I ever did for someone else; a friend of mine that needed a simple website for his
            research assignment. It was the first time I genuinely felt proud of what I made, even if looking back on it
            there are a lot of improvements to be made (but that's part of the learning process isn't it?).
          </p>
          <div class="projects__container-links projects__container-links-web_only">
            <a class="projects__container-links-link">Full website</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="contact-content">
      <div class="contact-title">
        <a class="contact-title--link" href="mailto:hello@bobmerks.com">hello@bobmerks.com</a>
      </div>
    </div>
  </section>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
