<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Laurine Peyrard</title>

    <!-- Style -->
    <link href='/src/style/css/main.css' rel='stylesheet' type='text/css'>
    <link href='/vendor/IconHoverEffects/css/component.css' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="/vendor/IconHoverEffects/js/component.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
    particlesJS.load('particles-js', '/src/js/particles.json', function() {
      console.log('callback - particles.js config loaded');
    });
    </script>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= MEDIA_PATH ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= MEDIA_PATH ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= MEDIA_PATH ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= MEDIA_PATH ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= MEDIA_PATH ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= MEDIA_PATH ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= MEDIA_PATH ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= MEDIA_PATH ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= MEDIA_PATH ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= MEDIA_PATH ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= MEDIA_PATH ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= MEDIA_PATH ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= MEDIA_PATH ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= MEDIA_PATH ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= MEDIA_PATH ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700|Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- particles.js container -->
    <div id="particles-js"></div>

    <div id="login">


        <div id="logo"class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
        	<a href="#" class="hi-icon">
                <img src="/public/media/graph/logo.png" alt="Logo" />
            </a>
        </div>


        <h1>Bienvenue</h1>
        <div>Désolée, c'est un peu en chantier :)</div><br>
        <div>Je suis en train de refaire la décoration plus à mon goût</div>

        <div id="brush">
            <a href="/public/media/CV.pdf">
                <img src="/public/media/graph/resume.png" alt="Illustration représentant un CV" />
            </a>
        </div>
        <div id="social">
            <a href="https://fr.linkedin.com/in/laurinepeyrard" target="_blank">
                <img src="/public/media/graph/linkedin.png" alt="Icône de Linkedin" />
            </a>
            <a href="https://twitter.com/LaurinePeyrard" target="_blank">
                <img src="/public/media/graph/twitter.png" alt="Icône de Twitter" />
            </a>
            <a href="https://www.behance.net/peyrardlau9ebb" target="_blank">
                <img src="/public/media/graph/behance.png" alt="Icône de Behance" />
            </a>
        </div>

    </div>


</body>
</html>
