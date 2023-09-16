import React from 'react';
import style from './header.module.css';
import { Link, useLocation } from 'react-router-dom';
import ROUTES from '../../../Consts/routes';

const Header = () => {
  const location = useLocation();
return (
  <header>
    <nav>
      <ul>
        <li>
        <Link to={ROUTES.home} className={location.pathname === ROUTES.home ? style.activeNav : ''}>Home</Link>
        </li>
        <li>
        <Link to={ROUTES.add} className={location.pathname === ROUTES.add ? style.activeNav : ''}>Add Game</Link>
        </li>
      </ul>
    </nav>
  </header>
);
};

export default Header;