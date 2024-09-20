<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="index" />
  <meta name="description" content="Joshua Landau Developer Portfolio" />
  <title>Joshua Landau Developer Portfolio</title>
  <link rel="icon" type="image/svg+xml" href="./static/icons/favicon.svg" />
  <link href="./static/css/tw-output.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-background text-white p-5 font-sans">
  <main>
    <?php include('hero.php') ?>
    <?php include('projects.php') ?>
    <?php include('experience.php') ?>
    <?php include('testimonial.php') ?>
    <?php include('contact.php') ?>
  </main>
  <footer class="text-center mt-5 text-white">
    &copy <?php echo date("Y") ?> Joshua Landau
  </footer>
</body>

</html>