import React from 'react';
import ReactDOM from 'react-dom';
import Hello from './App';
import './index.css';

ReactDOM.render(
  // <Hello />,
  <Hello name={"Emily"} age={22} />, //add a prop
  document.getElementById('root')
);


/*
props vs state
- props represent data that will be the same on every render
-- are not mutable during renders
- state represents data that will change depending on the actions of the user
-- values stored in a component's state are mutable
-- we can access state values using this.state.val


*/
