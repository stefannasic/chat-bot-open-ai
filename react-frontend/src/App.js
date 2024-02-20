import React from 'react';
import './App.css';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import HomeComponent from './components/homeComponent';
import LoginComponent from './components/auth/loginComponent';
import RegisterComponent from './components/auth/registerComponent';
import DashboardComponent from './components/dashboard/dashboardComponent';

function App() {
  return (
    <Router>
      <div className="App">
        <Routes>
          <Route path="/login" element={<LoginComponent />} />
          <Route path="/register" element={<RegisterComponent />} />
          <Route path="/dashboard" element={<DashboardComponent />} />
          <Route path="/" element={<HomeComponent />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;