import React from 'react';
import style from './header.module.css';

const Header = () => {
return (
  <header>
    <nav>
      <ul>
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/">Fantasy</a>
        </li>
        <li>
          <a href="/">Actie</a>
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