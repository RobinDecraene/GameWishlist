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
        <a href="/">Fantasy</a>
        </li>
        <li>
        <a href="/">Action</a>
        </li>
        <li>
        <a href="/">Open World</a>
        </li>
      </ul>
    </nav>
  </header>
);
};

export default Header;