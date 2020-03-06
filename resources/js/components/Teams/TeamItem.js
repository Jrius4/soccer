import React, { Component } from 'react'
import PropTypes from 'prop-types'

class TeamItem extends Component {


    render() {
        const {team} = this.props;
        return (
            <tr key={team.id} title={team.name}>
                <td>
                    <img src={`../../../../images/logos/${team.logo}`} width="25px" height="25px"/>
                    {' '}
                    {team.name}
                </td>
                <td>
                    <p>
                      {team.slogan}
                    </p>
                </td>
                <td>
                    {team.location}
                </td>
            </tr>
        )
    }
}
TeamItem.propTypes = {
    team: PropTypes.object.isRequired,
}
export default TeamItem;
