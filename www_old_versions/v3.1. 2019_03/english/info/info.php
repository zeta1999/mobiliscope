<?php
  $section = 'info';
  include ('../settings.php');
?>
<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <title><?php echo $curPage['pageTitle']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $curPage['pageMeta']; ?>" />

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52XSNMZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <link rel="icon" href="/pictos/favicon.png">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />

    <meta property="og:locale" content="en_EN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $curPage['pageTitle']; ?>" />
    <meta property="og:description" content="<?php echo $curPage['pageMeta']; ?>" />
    <meta property="og:url" content="https://mobiliscope.parisgeo.cnrs.fr" />
    <meta property="og:site_name" content="Mobiliscope" />
    <meta property="og:image" content="http://mobiliscope.parisgeo.cnrs.fr/pictos/mobiliscope-fb.png" />
    <meta property="og:image:secure_url" content="https://mobiliscope.parisgeo.cnrs.fr/pictos/mobiliscope-fb.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="<?php echo $curPage['pageTitle']; ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $curPage['pageTitle']; ?>" />
    <meta name="twitter:description" content="<?php echo $curPage['pageMeta']; ?>" />
    <meta name="twitter:image" content="https://mobiliscope.parisgeo.cnrs.fr/pictos/mobiliscope-tw.png" />

</head>

<body lang="<?php echo $language; ?>">

<?php
  include ('../topbar.php');
?>

<div id="container" class="info container">

<div class="row" >
    <div class="col-sm-12 col-md-3 col-lg-2">
        <?php include('left-menu.php'); ?>
    </div>

    <div class="col-sm-12 col-md-9 col-lg-10">
            <?php
              if(!empty($subpage))
                include('./subpages/'.$subpage.'.html');
              else
                include('./subpages/'.$page.'.html');
            ?>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>

<script type="text/javascript" src="/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/scripts/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="/scripts/menu.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>


</body>

</html>
