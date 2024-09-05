
  <div id="gameCard" class="card">
  <a href="game/<?= $game->slug ?>">
      <div class="gameImg">
        <img src="/images/<?= $game->image; ?>" alt="img">
        <div class="description">
          <h2><?= $game->title; ?></h2>
          <p><?= $game->description; ?></p>
        </div>
      </div>

      <div class="price">
        <h2>€<?= $game->price; ?></h2>
        <div>
            <div class="toggel">
              <p>Heb ik niet</p>
              <label class="switch">
                <input type="checkbox">
                <span class="bol"></span>
              </label>
          </div>
        <button id="verwijder" class="secondaireBtn">Verwijder</button>
        </div>
      </div>
    </a>
  </div>
