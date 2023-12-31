import React from 'react';
import { Route, Routes } from 'react-router-dom';
import Home from '../Home/home';
import Detail from '../Detail/detail';
import NotFound from '../NotFound/notfound';
import Header from '../../Components/Global/Header/header';
import ROUTES from '../../Consts/routes';
import AddGame from '../AddGame/addgame';

const Authentication = () => {
  return (
    <div>
      <Header/>
      <Routes>
        <Route>
        <Route path={ROUTES.home} element={<Home/>}/>
        <Route path={ROUTES.detail} element={<Detail/>}/>
        <Route path={ROUTES.add} element={<AddGame/>}/>
        <Route path={ROUTES.notFound} element={<NotFound/>}/>
        </Route>
      </Routes>
    </div>
  );
};

export default Authentication;