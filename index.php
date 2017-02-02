<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Style Guide Boilerplate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/stylesheets/app.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">SG</span>
        <span class="sg-logo-full">STYLE GUIDE</span> <em>BOILERPLATE</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #0093e0;"></div>
                <div class="sg-color-name">Calm</div>
                <div class="sg-color-value">#0093e0</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #3d4957;"></div>
                <div class="sg-color-name">Stable</div>
                <div class="sg-color-value">#3d4957</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f38a00;"></div>
                <div class="sg-color-name">Assertive</div>
                <div class="sg-color-value">#f38a00</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #001689;"></div>
                <div class="sg-color-name">Positive</div>
                <div class="sg-color-value">#001689</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ffcc00;"></div>
                <div class="sg-color-name">Energized</div>
                <div class="sg-color-value">#ffcc00</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #70b623;"></div>
                <div class="sg-color-name">Balanced</div>
                <div class="sg-color-value">#70b623</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #e51727;"></div>
                <div class="sg-color-name">Royal</div>
                <div class="sg-color-value">#e51727</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #0CEDC1;"></div>
                <div class="sg-color-name">Fresh</div>
                <div class="sg-color-value">#0CEDC1</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #f5f5f5;"></div>
                <div class="sg-color-name">Clouds</div>
                <div class="sg-color-value">#f5f5f5</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #cccccc;"></div>
                <div class="sg-color-name">Silver</div>
                <div class="sg-color-value">#cccccc</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #5e5e60;"></div>
                <div class="sg-color-name">Concrete</div>
                <div class="sg-color-value">#5e5e60</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #1f1f1f;"></div>
                <div class="sg-color-name">Obsidian</div>
                <div class="sg-color-value">#1f1f1f</div>
              </div>
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Lato", "HelveticaNeue", Helvetica, Arial, sans-serif;'>"Lato", "HelveticaNeue", Helvetica, Arial, sans-serif;</dd>

              <dt>Primary Font Italic:</dt>
              <dd style='font-family: "Lato", "HelveticaNeue", Helvetica, Arial, sans-serif; font-style: italic;'>"Lato", "HelveticaNeue", Helvetica, Arial, sans-serif;</dd>

               <dt>Primary Font Light:</dt>
              <dd style='font-family: "Lato", "HelveticaNeue", Helvetica, Arial, sans-serif; font-weight: 300;'>"Lato", "HelveticaNeue", Helvetica, Arial, sans-serif;</dd>

              <dt>Primary Font Bold:</dt>
              <dd style='font-family: "Lato", "HelveticaNeue", Helvetica, Arial, sans-serif; font-weight: 700;'>"Lato", "HelveticaNeue", Helvetica, Arial, sans-serif;</dd>

              <!-- <dt>Secondary Font:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif;'>Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Secondary Font Italic:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif; font-style: italic;'>Georgia, Times, "Times New Roman", serif;</dd>

              <dt>Secondary Font Bold:</dt>
              <dd style='font-family: Georgia, Times, "Times New Roman", serif; font-weight: 800;'>Georgia, Times, "Times New Roman", serif;</dd> -->
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

