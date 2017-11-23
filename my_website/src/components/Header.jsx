import React, { Component } from 'react';
import '../App.css';

class Header extends Component {
  constructor(props) {
    super(props);
    this.state = {
      title: 'Emily Koh'
    }
  }

  componentWillReceiveProps(newProps) {
    if (newProps !== this.state.title) {
      this.setState ({
        title: newProps
      })
    }
  }

  render() {
    return (
      <div className="Header">
        {this.state.title}
      </div>
    );
  }
}

export default Header;
