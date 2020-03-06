import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import {BrowserRouter as Router,Route,Switch} from 'react-router-dom'

import {Provider} from 'react-redux'
import store from '../store'
import Navbar from './Layout/Navbar';
import Home from './Layout/Home';
import Results from './Tables/Results/Results';
import Fixtures from './Tables/Fixtures/Fixtures';
import Team from './Team/Team';
import Teams from './Teams/Teams';
import Trails from './Trails/Trails';

export default class App extends Component {

    render() {
        return (
            <Provider store={store}>
                <Router>
                    <div className="App">
                        <Navbar/>
                        <Route exact path="/" component={Home}/>
                        <div className="container">
                            <Route exact path="/fixtures" component={Fixtures}/>
                            <Route exact path="/results" component={Results}/>
                            <Route exact path="/teams" component={Teams}/>
                            <Route exact path="/teams/:id" component={Team}/>
                            {/* <Route exact path="/trails" component={Trails}/> */}
                        </div>
                    </div>
                </Router>
            </Provider>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
