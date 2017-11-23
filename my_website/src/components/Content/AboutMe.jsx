import React, { Component } from 'react';
import './styling.css';

class AboutMe extends Component {
  render() {
    return (
      <div className="AboutMe">
        <div class="personal-bio">
            <p>
            <span className="emphasis">Hey, Welcome!</span> My name's Emily Koh and I'm an aspiring full-stack developer currently residing in Dallas, Texas. I was born in Seoul, South Korea, but since then have moved around and lived in many different places. My international background has really contributed to my passion for traveling, and I love visiting and exploring new places! Some of my other hobbies include reading, listening to podcasts, and going hiking so hit me up if you ever want to talk about any of those things! :)  
            </p>

            <p>
            In the future my long-term goal is to use my skills and talents to do work that is either meaningful to me or can serve a meaningful purpose in other peoples' lives. My professional interests include companies that are based in travel, environmental causes/issues, education, and social impact industries.
            </p>

            <p>
            My secondary goal is to become a more well-rounded developer, and I am working towards achieving this goal by actively learning new languages/technologies and also developing more experience with subjects I am already familiar with. Right now my current interest is learning more about web development (Javascript, web frameworks).
            </p>
        </div>
      </div>
    );
  }
}

export default AboutMe;
