import React from 'react';
import style from './home.module.css';
import Card from '../../Components/Home/Card/card';
import { Link } from 'react-router-dom';
import ROUTES from '../../Consts/routes';

const Home = () => {
return (
  <main>
    <section class={style.top}>
      <div class={style.account}>
        <img src={"../images/profile.png"} alt="img" />
        <h1>Abyss</h1>
      </div>

      <div class={style.input}>
        <input type="text" placeholder='search' class={style.zoekbalk} />
        <button class={style.secondaireBtn}>Search</button>
      </div>
    </section>
    <section class={style.top}>
      <Card></Card>
      <Card></Card>
      <Card></Card>
      <Link to={`${ROUTES.add}`}>
      <button class={style.premièreBtn}>Add Game</button>
      </Link>
      
    </section>
    
  </main>    
);
};

export default Home;