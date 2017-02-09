<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Travel Click Style Guide V1.0</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <link rel="stylesheet" href="css/stylesheets/metro-icons.min.css" >

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/stylesheets/app.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">TC</span>
        <span class="sg-logo-full">Travel Click</span> <em>Style Guide</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar sidebar brand-primary" role="navigation">
      <h4 class="light-secondary">About</h4>

      <ul class="sidebar-nav list-group">
        <li><a href="#sg-about" class="list-group-item">Getting Started</a></li>
        <li><a href="#sg-fontStacks" class="list-group-item">Fonts</a></li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h1 id="sg-about" class="light-secondary">Getting Started</h1>
            <p class="lead">A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

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

            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"</script> -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/sg-scripts.js"></script>
  <!--   <script src="js/main.js"></script> -->
</body>
</html>

