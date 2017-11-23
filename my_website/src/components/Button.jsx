import React, { Component } from 'react';
import '../App.css';

class Button extends Component {
  render() {
    return (
      <div className="Button">
        {this.props.name}
      </div>
    );
  }
}

export default Button;
