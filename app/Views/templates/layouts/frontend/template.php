<!doctype html>
<html class="no-js" lang="en">

<head>
    <?=  $this->include("templates/_fepartials/head")?>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->
    <!-- main-menu Start -->
    <header class="top-area">
        <?=  $this->include("templates/_fepartials/header")?>
    </header><!-- /.top-area-->
    <!-- main-menu End -->

    <?= $this->include("templates/_fepartials/content")?>

    <!-- footer-copyright start -->
    <footer class="footer-copyright">
        <?= $this->include("templates/_fepartials/footer")?>
    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->

    <?= $this->include("templates/_fepartials/js")?>

</body>

</html>