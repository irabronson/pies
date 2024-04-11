<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pies &mdash; Prototype parts for ProtoPie</title>
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
    <meta property="og:url" content="https://ira.design">
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
    <!-- ========== JS deferred -->
    <script defer src="/js/plugins.js"></script>
    <script defer src="/js/main.js?v=<?php echo filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/main.js'); ?>"></script>
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
        <h1 class="animate-in">Pies</h1>
        <h2 class="animate-in">Prototype parts for ProtoPie.</h2>
        <h3 class="animate-in">All Pies</h3>
      </header>

      <!-- ========== Nav -->
      <nav id="filters" class="page-container">
        <ul class="animate-in step-2">
          <li><a href="#" data-filter="all" class="active">All Pies</a></li>
          <li><a href="#" data-filter="inputs-text">Inputs &amp; Text</a></li>
          <li><a href="#" data-filter="controls">Controls</a></li>
          <li><a href="#" data-filter="scrolly-stuff">Scrolly Stuff</a></li>
          <li><a href="#" data-filter="other">Other</a></li>
        </ul>
        <div class="fixed start">
          <span class="label animate-in step-4">
            <button type="button">Category</button>
          </span>
          <div class="mobile-category-container">
            <ul>
              <li><a href="#" data-filter="all" class="active">All Pies</a></li>
              <li><a href="#" data-filter="inputs-text">Inputs &amp; Text</a></li>
              <li><a href="#" data-filter="controls">Controls</a></li>
              <li><a href="#" data-filter="scrolly-stuff">Scrolly Stuff</a></li>
              <li><a href="#" data-filter="other">Other</a></li>
            </ul>
            <img src="/img/icon-close-dark.svg" title="Close this menu" alt="Icon indicating a 'close' action" width="68" height="68">
          </div>
        </div>
      </nav>

      <!-- ========== Main Content -->
      <main class="page-container animate-in step-3">

        <section class="page-section">
          <div id="category-content" class="all">
            <div id="category-collection">

              <!-- Phone -->
              <!-- 1-8 -->
              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-01-poster.webp" data-src="/pie-assets/video/it-01.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Password visibility toggle and character count detection.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=550eb493-e740-4d7c-900f-75725e997cea" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-01-poster.webp" data-src="/pie-assets/video/cs-01.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Value slider with custom step amount.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=08e6e02c-4475-4219-8d25-f4262b19b2ec" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-01-poster.webp" data-src="/pie-assets/video/or-01.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Swipey carousel selector with associated content.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=c22fb2a3-9347-476e-9919-ff2a229a16dc" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-02-poster.webp" data-src="/pie-assets/video/it-02.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Value verification with auto-focus (multi and single input field).</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=534b9003-0abb-4016-ba2a-d7d08cbe520c" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-02-poster.webp" data-src="/pie-assets/video/cs-02.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Quantity stepper with selected value stored and available on separate page.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=24646dbe-6904-4836-b79d-5131255570f9" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-04-poster.webp" data-src="/pie-assets/video/it-04.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Value and character extraction with custom styling within a single input field.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=b31e51fe-81c9-4c6d-b46d-1a75cc2b4f8a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-01-poster.webp" data-src="/pie-assets/video/ss-01.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Custom incremental number values via scroll.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=13d253b1-7d70-4263-aa3a-4345220c8a4b" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-04-poster.webp" data-src="/pie-assets/video/ss-04.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Dynamic header position based on scroll direction.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=6301723e-4d56-42dc-9812-ea37d84daefe" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <!-- Desktop -->
              <!-- 1 -->
              <div class="category-item desktop scrolly-stuff">
                <div class="desktop-container">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/ss-07-poster.webp" data-src="/pie-assets/video/ss-07-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/ss-07-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Scroll-controlled sticky elements.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=753895a9-e0d3-4588-aeee-bbf8e878fe10" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <!-- 9-16 -->
              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-03-poster.webp" data-src="/pie-assets/video/or-03.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Randomized loader displaying different values at each page load.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=7f4ecd0b-2a73-4e9d-a892-e8bbe23586e0" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-03-poster.webp" data-src="/pie-assets/video/cs-03.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Text size scaling via slider.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=a88ee600-8f8a-49ea-b876-b3ab67d6d63a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-03-poster.webp" data-src="/pie-assets/video/it-03.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Input autofill via focus or typing any character.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=169fb2c1-f9a4-4391-9caf-63f1d4dd00f6" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container sound sound-off">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    <button class="sound-toggle" title="Toggle sound on and off for this video"><img src="/img/icon-sound-toggle.svg" width="32" height="32" alt="Icon depicting if sound is on or off"></button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-04-poster.webp" data-src="/pie-assets/video/cs-04.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Audio playback and volume control.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=0bfc3edb-d262-44dd-a01b-b13051b620f1" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-05-poster.webp" data-src="/pie-assets/video/it-05.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Multi-format current date and time.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=1dbb59de-7c91-4b4d-b03a-395484b56744" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-04-poster.webp" data-src="/pie-assets/video/or-04.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Native device camera with photo display.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=dd0427e8-97dd-45b1-8e1c-6714fb22ec9f" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-02-poster.webp" data-src="/pie-assets/video/ss-02.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Animation of component instances upon entering viewport.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=a556ebee-7b61-4d03-98d9-65295fc037b6" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-05-poster.webp" data-src="/pie-assets/video/cs-05.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Dynamic value tied to slider level and position.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=2bbb3b34-6960-480c-8089-6f893f4f2d34" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <!-- Desktop -->
              <!-- 2-3 -->
              <div class="category-item desktop other">
                <div class="desktop-container">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/or-08-poster.webp" data-src="/pie-assets/video/or-08-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/or-08-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Image following cursor position on hover.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=06db169b-bd7d-4dcc-a0b0-06352edd941a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <div class="category-item desktop scrolly-stuff">
                <div class="desktop-container right">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/ss-08-poster.webp" data-src="/pie-assets/video/ss-08-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/ss-08-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Animation of elements linked to scroll position.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=9f804e68-858f-4dea-b5fc-fa8b3e154ef9" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <!-- 17-24 -->
              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-06-poster.webp" data-src="/pie-assets/video/cs-06.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>360&deg; dial with custom chained value.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=5bcd963e-6e32-46bd-ab83-40831696dae2" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-06-poster.webp" data-src="/pie-assets/video/it-06.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Auto-formatted DOB input field.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=5561e427-d1cc-409e-8712-8ae2e238111b" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-07-poster.webp" data-src="/pie-assets/video/it-07.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Dynamic input border via character width.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=4cffc461-45b6-4754-a106-6c47a782c533" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-07-poster.webp" data-src="/pie-assets/video/cs-07.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Text in a variable revealed by character via an interface.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=c4a20ed8-c376-42db-ac8e-d30f0d47756a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-08-poster.webp" data-src="/pie-assets/video/it-08.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Countdown timer with custom minutes and hours.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=ec171c7f-f47a-4063-ab06-9f8ee0912f0b" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-03-poster.webp" data-src="/pie-assets/video/ss-03.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Scroll-controlled Safari browser component in light and dark mode; because screen size is <em>not</em> the same as viewport size.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=155651c5-8c26-48fd-9694-ea6219a50a67" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-08-poster.webp" data-src="/pie-assets/video/cs-08.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Shopping bag with total stored across pages.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=f004beb3-cc45-4128-b341-e5d537caab18" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-09-poster.webp" data-src="/pie-assets/video/it-09.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Auto-formatted credit card number and name input with real-time display.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=3655d098-483c-4df8-bdcd-0d9d920cb57a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <!-- Desktop -->
              <!-- 4-5 -->
              <div class="category-item desktop scrolly-stuff">
                <div class="desktop-container right">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/ss-09-poster.webp" data-src="/pie-assets/video/ss-09-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/ss-09-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Fixed position text animation on scroll.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=284af498-c52f-4e26-a549-90e8ac50f0e7" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <div class="category-item desktop other">
                <div class="desktop-container">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/or-09-poster.webp" data-src="/pie-assets/video/or-09-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/or-09-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Visual interaction tracer with velocity-based size. Desktop cursor or touch device.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=117915e2-4b73-4d7a-99b8-77cbe5483b06" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <!-- 25-32 -->
              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-05-poster.webp" data-src="/pie-assets/video/or-05.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Notification display only if user arrives from a specific page.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=cfb1e883-d51e-4869-a45a-2c689293f8a9" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-09-poster.webp" data-src="/pie-assets/video/cs-09.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>The amount of times I've mistakenly referred to Ruth Bader Ginsburg as "RGB" is comical at this point.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=29eb366b-7d97-4e73-8b51-d04a38555199" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-02-poster.webp" data-src="/pie-assets/video/or-02.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Fullscreen expandable CTA regardless of position, with z-index reordering to place element on top.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=8a1e1ef0-499a-4630-bb4a-48c36890ddbd" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-10-poster.webp" data-src="/pie-assets/video/cs-10.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Bonus: App concept with math for those that don't dine alone.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=20cfca6f-1db4-4721-a766-683db11b3642" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-10-poster.webp" data-src="/pie-assets/video/it-10.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Search query with dynamically-positioned results. indexOf has done a lot of good in this world.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=7698b3de-c46f-427c-931c-93bc482c31d6" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-06-poster.webp" data-src="/pie-assets/video/or-06.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>State toggle with absolute value using a single Assign response.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=73390892-6fd1-448e-b654-12ea8e87958c" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-05-poster.webp" data-src="/pie-assets/video/ss-05.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Interaction- and time-based display of scroll bar.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=208384f1-524a-496d-accf-6858d9886c5c" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-11-poster.webp" data-src="/pie-assets/video/cs-11.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Dynamic selection results based on associated ID or category.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=f358a3f2-9390-437d-9437-311cc3ae57e1" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <!-- Desktop -->
              <!-- 6-7 -->
              <div class="category-item desktop other">
                <div class="desktop-container">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/or-10-poster.webp" data-src="/pie-assets/video/or-10-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/or-10-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Infinitely looping carousel in which Lovecraft and his friends circle forever.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=2dc0855a-7813-48e5-b125-55d19bab8cbb" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <div class="category-item desktop scrolly-stuff">
                <div class="desktop-container right">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/ss-10-poster.webp" data-src="/pie-assets/video/ss-10-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/ss-10-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Text revealed based on "combining" text via scroll.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=6887603e-18f1-424a-b282-d78f76252233" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <!-- 33-39 -->
              <div class="category-item phone other">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/or-07-poster.webp" data-src="/pie-assets/video/or-07.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Slide progress indicated three ways (mask, multi-segment, single segment).</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=7ddde4e4-2a33-48f5-9c3e-bb1610a95959" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-11-poster.webp" data-src="/pie-assets/video/it-11.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>User-entered data concatenated from two sources into a single string elsewhere in the experience.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=01548ebc-30f6-4ca6-83a3-8a4b59710ee6" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container sound sound-off">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    <button class="sound-toggle" title="Toggle sound on and off for this video"><img src="/img/icon-sound-toggle.svg" width="28" height="28" alt="Icon depicting if sound is on or off"></button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-12-poster.webp" data-src="/pie-assets/video/cs-12.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Audio playback time/progress represented two ways, with seek.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=937e83ab-1880-4fc6-844b-449d74e90a44" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone scrolly-stuff">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/ss-06-poster.webp" data-src="/pie-assets/video/ss-06.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Background color transition via scroll.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=685cc99c-6790-4b3c-8249-af513935139a" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-12-poster.webp" data-src="/pie-assets/video/it-12.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Pre-defined text stored and displayed as a message via "typing" anything.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=cbf89a72-848e-46f1-86d1-7008b00b85d2" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone controls">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/cs-13-poster.webp" data-src="/pie-assets/video/cs-13.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>UI and progress indicator driven by video time, with event fired at video end.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=4054830e-849d-43d4-8162-abaf470a378d" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <div class="category-item phone inputs-text">
                <figure>
                  <div class="ui-container">
                    <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                  </div>
                  <video class="lazy" poster="/pie-assets/image/it-13-poster.webp" data-src="/pie-assets/video/it-13.mp4" width="390" height="844" preload="auto" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                  </video>
                </figure>
                <div class="description">
                  <p>Text in a variable <em>again</em>, but revealed by character via the properties of an element.</p>
                  <a href="https://cloud.protopie.io/p/fcbe2abcde6ee53b555fe3b8?sceneId=25cf9f94-8dcb-4062-87e5-41a4306a45ab" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                </div>
              </div>

              <!-- Desktop -->
              <!-- 8-9 -->
              <div class="category-item desktop other">
                <div class="desktop-container right">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/or-11-poster.webp" data-src="/pie-assets/video/or-11-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/or-11-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Mask hover follow with z-index reordering.</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=a1e2b5d1-ca04-42a9-932a-4ccc04fc8084" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>

              <div class="category-item desktop other">
                <div class="desktop-container">
                  <figure>
                    <div class="ui-container">
                      <button class="preview" type="button" title="Play the preview video for this prototype">Preview</button>
                    </div>
                    <video class="lazy" poster="/pie-assets/image/or-12-poster.webp" data-src="/pie-assets/video/or-12-desktop.mp4" width="960" height="640" preload="auto" data-mobile="/pie-assets/video/or-12-mobile.mp4" muted playsinline loop>
                    <p>😞 It looks like your browser does not support embedded videos. You should update to the latest version of Firefox or Chrome.</p>
                    </video>
                  </figure>
                  <div class="description">
                    <p>Infinite loop with pause on hover. You ever try this without recalculating the speed for mouseout?</p>
                    <a href="https://cloud.protopie.io/p/5ab22a1189f09a38827fcda1?sceneId=339c5dc7-a6e7-424a-b58d-7b39837b31cf" target="_blank" title="Try this Pie and download the source file">Get Pie<span></span></a>
                  </div>
                </div>
              </div>
  
            </div> <!-- #category-collection -->
          </div> <!-- #category-content -->
        </section> <!-- .page-section -->
  
        <!-- ========== Content container -->
        <section class="content">

          <!-- Pies -->
          <div class="letters-in page-section">
            <div>
              <span>P</span>
              <span>i</span>
              <span>e</span>
              <span>s</span>
            </div>
          </div>
    
          <!-- Download -->
          <div id="download" class="page-section">
            <a href="/downloads/pies-v1-040124.zip" download title="Download all Pies">Download all Pies<span></span></a>
            <p>zip / 84.4 MB</p>
          </div>
  
          <!-- About -->
          <div id="about" class="page-section">
            <p>I often build small one-off pieces of isolated functionality when learning or experimenting with features in ProtoPie; unstyled individual interactions and parts that are more like wireframes, not over-designed complete concepts or experiences.</p>
            <p>With a growing backlog of these, I realized that it would be cool to create a consistent collection that exposes some techniques for others to learn from. It’s not a component library nor is it a design system. It’s a variety of dynamic prototype parts, largely driven by expressions/formulas and variables.</p>
            <p>For the most part, these are things not possible in Figma, but either way, if you're reaching for ProtoPie for whatever reason, here's how to do stuff.</p>
          </div>
          
          <!-- Footer -->
          <footer>
            <p>Built by <a href="https://ira.design" title="Ira Bronson's website" target="_blank">ira.design<span></span></a></p>
          </footer>

        </section> <!-- .content -->

      </main> <!-- .page-container -->

      <!-- Back to top -->
      <div id="back-to-top-container" class="start">
        <button class="back-to-top" type="button" title="Back to top">Back to top</button>
      </div>

  </body>
</html>