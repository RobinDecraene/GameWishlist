import React from 'react';
import style from './detail.module.css';

const Detail = () => {
  return (
    <main class={style.detailPage}>
      <div class={style.detailCard}>
        <div class={style.descriptionDetails}>
          <img src={"../images/no-image.jpg"} alt="img" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class={style.detailtings}>
          <h1 class={style.detailTitle}>Lorem ipsum</h1>
          <p>Console: Lorem ipsum</p>
          <p>Releas date: 20/12/2022</p>
          <h2>€15.99</h2>
          <button class={style.premièreBtn}>Buy</button>
          <button class={style.tertaireBtn}>Delete</button>
        </div>
      </div>
    </main>
  );
};

export default Detail;