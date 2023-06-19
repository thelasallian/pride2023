<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <!-- TODO: Replace with final special name -->
    <title>Pride Special Title - The LaSallian</title>

    <!-- Full Page JS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&family=Lora:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body>
    <div id="fullpage">
        <!-- Header -->
        <header class="section homepage-section" id="header">
            <div class="container"><?php include_once 'php/modules/homepage/header.php'; ?></div>
        </header>
        <!-- Introduction -->
        <section class="section homepage-section" id="introduction">
            <div class="container"><?php include_once 'php/modules/homepage/introduction.php'; ?></div>
        </section>
        <!-- Pride in Legislation -->
        <section class="section homepage-section" id="legislation">
            <div class="container"><?php include_once 'php/modules/homepage/legislation.php'; ?></div>
        </section>
        <!-- Vox Populi -->
        <section class="section homepage-section" id="vox-populi">
            <div class="container"><?php include_once 'php/modules/homepage/vox-populi.php'; ?></div>
        </section>
        <!-- Comic and Stories -->
        <section class="section homepage-section" id="comics-and-stories">
            <div class="container"><?php include_once 'php/modules/homepage/comics-and-stories.php'; ?></div>
        </section>
        <!-- Articles -->
        <section class="section homepage-section" id="articles">
            <div class="container"><?php include_once 'php/modules/homepage/articles.php'; ?></div>
        </section>
        <!-- Footer -->
        <footer class="section homepage-section" id="footer">
            <div class="container"><?php include_once 'php/modules/homepage/footer.php'; ?></div>
        </footer>
    </div>

    <!-- Full Page JS -->
    <script>
        new fullpage('#fullpage', {
            //options here
            autoScrolling:true,
            scrollHorizontally: true,
            css3:false,
        });
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
