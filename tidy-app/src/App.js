//Bring in React & Component instance from React lib
import React, { Component } from 'react'; 
import logo from './logo.svg';
import './App.css';

// Local variables
const buttonStyle = {
  marginRight: 16, 
};

// component definition - extends component is building on top of a piece of the React library
class Hello extends Component {

  // when our component is initialized, the constructor is called
  constructor(props) {
    // make a call to the parent class's Component constructor
    super();

    // define an initial state 
    this.state = {
      counter: 0, //initialize this.state.counter to be 0 
      newName: '',
    };
  }

  handleClick(event) {
    // setState is a built in function in React, expects an object as an argument
    // setState will explicitly mutate the state
    this.setState({
      counter: this.state.counter + 1,
    }); 
  }

  handleResetCounter(event) {
    this.setState({
      counter:0,
    });
  }

  handleChangeName(event) {
    this.setState({
      newName: event.target.value,
    });
  }

  // the component will render this - necessary in every react component - render can only return one element
  render() {
    // must return some UI here
    return (
      <div className="App">
        <div className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h2>Welcome to React</h2>
        </div>
        <div className="test">
          <p className="App-intro">
            {this.state.newName || this.props.name}!
            <h4>You are {this.props.age} years old.</h4>
          </p>
        </div>
        <p>Counter is: {this.state.counter}</p>
        <button style={buttonStyle} Click={(event) => this.handleClick(event)}>CLICK ME</button>
        <button onClick={(event) => this.handleResetCounter(event)}>RESET</button>
        <input type="text" onChange={(event) => this.handleChangeName(event)}/>
      </div>
    );
  }
}

// also necessary to make component function properly - exposes the class to other files which may need to import it
export default Hello;


/*
-- render() method is what generates the virtual DOM, which is like a regular DOM node but not attached to the DOM just yet
-- export - only one default allowed per file - helps ensure other files are bringing in the correctly named component
-- you can only return one element at a time, so things that are returned need to be wrapped in one div

-- => anonymous function - a function that's calling a function
-- {(event) => this.handleChangeName(event)} -- arrow passes event to the function
*/
