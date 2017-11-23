import React, { Component } from 'react';
import Timeline from './Timeline'
import github from '../../images/github.png'
import gmail from '../../images/gmail.svg'
import linkedin from '../../images/linkedin.svg'
import './styling.css';

class Career extends Component {
  render() {
    return (
      <div className="Career">
        <Timeline/>
        <div class="links section-header">
          <span class="links-header">Learn more about me</span><br/>
          <a href="https://www.linkedin.com/in/emilykoh94/"><img alt="linkedin profile" width="150" height="50" title="Connect with me on LinkedIn" src={linkedin}/></a>
          <a href="https://github.com/kisa411"><img alt="github profile" width="100" height="50" title="Check out my Github Profile" src={github}/></a>
          <a href="mailto:ykoh1@alumni.nd.edu"><img alt="email address" width="150" height="50" title="Send me an email" src={gmail}/></a>
        </div>
      </div>
    );
  }
}

export default Career;
