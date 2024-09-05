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
    <section class="detailPage">
      <div class="detailCard">
        <div>
          <img src="/images/<?= $game->image; ?>">
          <p class="descriptionDetails"><?= $game->description; ?></p>
        </div>

        <div>
        <h1 class="detailTitle"><?= $game->title; ?></h1>
          <p>Console: <?= $game->console; ?></p>
          <p>Releas date: <?= $game->created_at; ?></p>
          <h2>€<?= $game->price; ?></h2>
          <button class="premièreBtn">Koop</button>
          <button class="secondaireBtn">Edit</button>
        </div>
      </div>
    </section>





  <script type="module" src="javascript/main.js"></script>
</body>

</html>