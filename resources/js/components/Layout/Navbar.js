import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
    return (
        <nav className="navbar navbar-expand-sm navbar-light bg-transparent mb-4">
            <div className="container">
            <Link className="navbar-brand" to="/">
                Masaza Cup
            </Link>
                <button
                    className="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#mobile-nav"
                >
                    <span className="navbar-toggler-icon" />
                </button>

                <div className="collapse navbar-collapse" id="mobile-nav">
                    <ul className="navbar-nav mr-auto">
                    <li className="nav-item">
                        <Link className="nav-link" to="/fixtures">
                        {' '}
                        Fixtures
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link className="nav-link" to="/results">
                        {' '}
                        Results
                        </Link>
                    </li>
                    <li className="nav-item">
                        <Link className="nav-link" to="/teams">
                        {' '}
                        Teams
                        </Link>
                    </li>
                    {/* <li className="nav-item">
                        <Link className="nav-link" to="/trails">
                        {' '}
                        Trails
                        </Link>
                    </li> */}
                    </ul>

                </div>
                </div>
            </nav>
    )
}

export default Navbar
