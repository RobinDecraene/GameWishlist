<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <title>Wishlist</title>
</head>

<body>
    <?php include('partials/header.php'); ?>
    <img class="background" src="images/background.jpg" alt="">
    <section class="AddGameBody">
        <div class="add-game">
            <h1 class="AddTitle">Add game</h1>
            <form id="add-game" method="post" action="/store">
                <input type="hidden" name="redirect" value="/<?= $categorySlug ?? '' ?>">

                <div class="addGameInput">
                    <label for="title">Title</label>
                    <input type="text" name="title" autocomplete="off">
                </div>
                <div class="addGameInput">
                    <label for="price">Price</label>
                    <input type="number" name="price" autocomplete="off">
                </div>
                <div class="addGameInput">
                    <label for="description">Description</label>
                    <textarea name="description" autocomplete="off"></textarea>
                </div>
            </form>
            <button class="premièreBtn" form="add-game" type="submit">Add to wishlist</button>
        </div>

    </section>
</body>

</html>