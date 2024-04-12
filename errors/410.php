<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pies &mdash; Gone</title>
    <meta name="description" content="A collection of minimal individual ProtoPie prototypes highlighting a specific interaction or function.">
    <link rel="author" href="/humans.txt" type="text/plain">
    <!-- ========== Allow to conform to mobile screens -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Touch and Favicons -->
    <link rel="icon" href="/favicon.ico" sizes="48x48">
    <link rel="icon" href="/favicon.svg" sizes="any" type="image/svg+xml">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#454545">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#f3f3f3">
    <!-- ========== OG Share Meta -->
    <meta property="og:url" content="https://pies.design">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Pies — Prototype parts for ProtoPie">
    <meta property="og:description" content="A collection of minimal individual ProtoPie prototypes highlighting a specific interaction or function.">
    <meta property="og:image" content="https://pies.design/img/og-fb-li.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://pies.design/img/og-x.png">
    <!-- ========== CSS -->
    <link rel="stylesheet" href="/css/main.css?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/css/main.css'); ?>">    
  </head>
  <body>

      <!-- ========== Intro -->
      <div class="intro">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- ========== Header -->
      <header class="page-container">
        <h1 class="animate-in"><a href="/" title="Pies — Prototype parts for ProtoPie">Pies</a></h1>
        <h2 class="animate-in">Prototype parts for ProtoPie.</h2>
      </header>

      <!-- ========== Main Content -->
      <main class="page-container animate-in step-3">

        <!-- Error Content -->
        <section class="page-section error-page">
          <h3>Gone</h3>
          <p class="secondary">Error 410</p>
          <p>This is similar to your old friend 404. However fatalist this may seem, there's likely an inescapable permanence to this situation, but you can try to <a href="/">see many many prototypes here</a>.</p>
        </section> <!-- .page-section -->

        <!-- Footer -->
        <footer>
          <p>Built by <a href="https://ira.design" title="Ira Bronson's website" target="_blank">ira.design<span></span></a></p>
        </footer>

      </main> <!-- .page-container -->

    <!-- ========== JS -->
    <script>
      document.querySelector('.intro span:nth-child(6)').addEventListener('animationend', function() {
        document.querySelectorAll('.intro span').forEach(function(element) {
          element.classList.add('out');
        });
      });
    </script>

  </body>
</html>