import React, { Component } from 'react'
import PropTypes from 'prop-types'
import TeamItem from './TeamItem';

class TeamsList extends Component {

    render() {
        const {teams} = this.props;

        let teamContent = (
            <div className="card card-body table-reponsive p-0">

                <table className="table table-hover">
                    <thead className="bg-primary text-light">
                        <tr>
                            <th>Name</th>
                            <th>Slogan</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                      {
                        teams.map(team =><TeamItem key={team.id} team={team}/>)
                    }
                    </tbody>

                    <tfoot className="bg-primary text-light">

                        <tr>
                            <th>Name</th>
                            <th>Slogan</th>
                            <th>Location</th>
                        </tr>
                    </tfoot>

                </table>

            </div>
            )

        return teamContent;

    }
}

TeamsList.propTypes = {
    teams: PropTypes.array.isRequired
}

export default TeamsList;
