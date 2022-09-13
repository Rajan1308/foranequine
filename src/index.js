

import React from 'react'
 

import App from './App';
const { render } = wp.element;


const AppTest = () => {
  return (
    <div>
        <App />
      </div>
  );
};

render(<AppTest />, document.getElementById(`ourexper`))


