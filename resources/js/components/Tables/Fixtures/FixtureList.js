import React, { Component } from 'react'
import PropTypes from 'prop-types'
import FixtureItem from './FixtureItem';

class FixtureList extends Component {


    render() {
        const {fixtures} = this.props;
        let fixtureContent = (
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>time</th>
                            <th>Home</th>
                            <th>Away</th>
                            <th>Broadcaster</th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            fixtures.map(fixture=><FixtureItem key={fixture.id} fixture={fixture}/>)
                        }
                    </tbody>


                    <thead>
                        <tr>
                            <th>date</th>
                            <th>time</th>
                            <th>Home</th>
                            <th>Away</th>
                            <th>Broadcaster</th>
                        </tr>
                    </thead>
                </table>
            </div>
        );
        return (
            <div>

            </div>
        )
    }
}

FixtureList.propTypes = {
    fixtures : PropTypes.array.isRequired,
}


export default FixtureList;
