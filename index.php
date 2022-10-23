<!doctype html>
<html lang="en">

<head>
    <?php
    include_once('./components/header.php')
    ?>
</head>

<body>
    <div class="container-fluid">


        <header>
            <?php
            include_once('./components/nav.php');
            ?>
        </header>
        <main>
            <?php
            include_once('./components/head.php');
            ?>
        </main>
        <article>
            <?php
            include_once('./components/accordéon.php');
            ?>
        </article>
        <article>
            <?php
            include_once('./components/images.php');
            ?>
        </article>

        <article>
            <?php

            include_once('./components/caroussel.php');
            ?>
        </article>
        <footer>
            <div>

                <?php
                include_once('./components/footer.php');
                ?>
            </div>
        </footer>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
   <?php
   include_once('./components/script.php');
   ?>
</body>

</html>
<!-- echo "# lesJougadousPHP" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Damour8333/lesJougadousPHP.git
git push -u origin main -->