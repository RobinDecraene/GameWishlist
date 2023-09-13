import React from 'react';
import style from './addgame.module.css';

const AddGame = () => {
  return (
    <main>
    <img class={style.background} src={"../images/background.jpg"} alt="img" />
    <section class={style.AddGameBody}>
    <div class={style.addGame}>
      <h1 class={style.AddTitle}>Add Game</h1>
      <form action="">
        <span class={style.addGameInput}>
          <label>Title</label>
          <input type="text" />
        </span>

        <span class={style.addGameInput}>
          <label>Price</label>
          <input type="number" />
        </span>

        <span class={style.addGameInput}>
          <label>Description</label>
          <textarea name="description" autocomplete="off"></textarea>
        </span>

        <button class={style.premièreBtn}>Add to wishlist</button>
      </form>
    </div>
    </section>
    </main>

  );
};

export default AddGame;