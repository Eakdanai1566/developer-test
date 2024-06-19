import React from 'react';
import './App.css';
import Banner from './components/Banner';
import Navigation from './components/Navigation';
import TableSection from './components/TableSection';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Banner />
      </header>
      <nav>
        <Navigation />
      </nav>
      <main>
        <TableSection />
      </main>
    </div>
  );
}

export default App;
