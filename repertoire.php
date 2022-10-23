<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container-fluid">
        < <?php
            include_once('./components/nav.php');
            include_once('./components/tableau.php');

            include_once('./components/script.php');
            ?> <div class="row">
            <div class="  col-sm-6">
                <?php
                include('./components/chanson1.php')
                ?>
            </div>
            <div class=" col-sm-6">
                <?php
                include('./components/bahia.php')
                ?>
            </div>

    </div>
    <div class="row">
        <div class="col col-sm-6 ">
            <?php
            include('./components/chanson1.php')
            ?>
        </div>

    </div>
    <div class="row">
        <div class="col ">
            <?php
            include('./components/chanson1.php')
            ?>
        </div>
        <div class="col">
            <?php
            include('./components/chanson1.php')
            ?>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    </div>







</body>

</html>