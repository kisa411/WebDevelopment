import React, { Component } from 'react';
import './styling.css';
import AboutMe from './AboutMe'
import Career from './Career'
import Projects from './Projects'

class ContentHolder extends Component {
  render() {
    return (
      <div className="ContentHolder">
        <Career/>
      </div>
    );
  }
}

export default ContentHolder;
