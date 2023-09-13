import React from 'react';
import style from './card.module.css';
import ROUTES from '../../../Consts/routes';
import { Link } from 'react-router-dom';

const Card = () => {
return (
  <div class={style.card}>
  <Link to={`${ROUTES.detail}`} class={style.description}>
    <div class={style.gameImg}>
      <img src={"../images/no-image.jpg"} alt="img" />
      <div >
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    </Link>
    <div class={style.price}>
      <h2>€15.99</h2>
      <button class={style.premièreBtn}>Buy</button>
      <button class={style.tertaireBtn}>Delete</button>
    </div>
    
  </div>
 
);
};

export default Card;




