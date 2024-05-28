import React from 'react';
import ReactDOM from 'react-dom/client';
import { Login } from './auth/pages/login/Login';

import '@fontsource/roboto/300.css';
import '@fontsource/roboto/400.css';
import '@fontsource/roboto/500.css';
import '@fontsource/roboto/700.css';

const App = () => {

  return (
      <Login />
  )
}

export default App

if (document.getElementById('root')) {
  const Index = ReactDOM.createRoot(document.getElementById("root"));

  Index.render(
      <React.StrictMode>
          <App/>
      </React.StrictMode>
  )
}