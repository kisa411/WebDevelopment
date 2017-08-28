import React, { Component } from 'react';
import './App.css';

// index.js already contains ReactDOM, so no need to import it again

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            deadline: "December 25, 2017"
        }
    }

    changeDeadline() {
        this.setState({deadline: 'November 25, 2017'})
    }

    render() {
        // returns any jsx
        return (
            <div className="App">
                <div className="App-title">
                    Countdown to {this.state.deadline}
                </div>
                <div>
                    <div className="time clock-days">14 days</div>
                    <div className="time clock-hours">30 hours</div>
                    <div className="time clock-minutes">15 minutes</div>
                    <div className="time clock-seconds">20 seconds</div>
                </div>
                <input placeholder="new date"/>
                <button onClick={() => this.changeDeadline()}>Submit</button>
            </div>
        )
    }
}

export default App;