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
  </section>
</div>
</body>

<script>
  function fadeIn() {
    var landingText = document.getElementsByClassName("landing__line-text");
    for (var i = 0; i < landingText.length; i++) {
      landingText.item(i).classList.add("visible");
      console.log(landingText.item(i));
    }
  }
</script>
</html>
