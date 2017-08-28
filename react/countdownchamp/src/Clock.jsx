import React, { Component } from 'react';
import './App.css';

class Clock extends Component {
    constructor(props) {
        super(props);
        this.state = {
            days: 0,
            hours: 0, 
            minutes: 0,
            seconds: 0
        }
    }

    // renders before component is rendered
    componentWillMount() {
        this.getTimeUntil(this.props.deadline);
    }

    // renders right after component is rendered
    componentDidMount() {
        setInterval(() => this.getTimeUntil(this.props.deadline), 1000);
    }

    getTimeUntil(deadline) {
        const time = Date.parse(deadline) - Date.parse(new Date());
        const seconds = Math.floor((time/1000)%60);
        const minutes = Math.floor((time/1000/60)%60);
        const hours = Math.floor((time/(1000*60*60))%24);
        const days = Math.floor(time/(1000*60*60*24));

        // this.setState({
        //     days: days,
        //     hours: hours,
        //     minutes: minutes,
        //     seconds: seconds
        // });
        
        // days: days can become days (react will realize that the key should equal the value)
        this.setState({
            days, 
            hours, 
            minutes, 
            seconds
        });
    }

    render() {
        return (
            <div>
                <div className="time clock-days">{this.state.days} days</div>
                <div className="time clock-hours">{this.state.hours} hours</div>
                <div className="time clock-minutes">{this.state.minutes} minutes</div>
                <div className="time clock-seconds">{this.state.seconds} seconds</div>
            </div>
        )
    }
}

export default Clock;