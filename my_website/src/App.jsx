import React, { Component } from 'react';
import './App.css';
import Header from './components/Header'
import Button from './components/Button'
import ContentHolder from './components/Content/ContentHolder'

class App extends Component {
  render() {
    return (
      <div className="App">
        <div className="header">
          <Header headerTitle="Emily Koh"/>
          <div className="button-links">
            <Button name="About Me"/>
            <Button name="Career"/>
            <Button name="Projects"/>
          </div>
        </div>
        <div className="body-content">
          <ContentHolder content="AboutMe"/>
        </div>
      </div>
    );
  }
}

export default App;
