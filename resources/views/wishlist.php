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
  <div class="top">
    <div class="account">
      <img src="images/Raze.jpg" alt="img">
      <h1>Abyss's Wishlist</h1>
    </div>

    <div class="input">
      <input type="text" name="zoekbalk" id="zoekbalk" placeholder="zoek">

      <div class="addCategory" id="inputCategory" method="post" action="/addCategory">
        <input type="hidden" name="redirect" value="/<?= $categorySlug ?? '' ?>">
        <input type="text" name="inputCategory" name="title">
        <button class="premièreBtn btnCategory"  type="submit">Add category</button>
      </div>
    </div>
  </div>

  <div class="cards">

    <?php foreach($games as $game): ?>
    <?php include('partials/card.php'); ?>
    <?php endforeach; ?>

    <a href="AddGame"><button class="premièreBtn addGame">Add game</button></a>
    <?php include('partials/footer.php'); ?>

    <script type="module" src="javascript/main.js"></script>
</body>

</html>