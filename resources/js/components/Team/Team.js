import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import {getTeam} from '../../actions/teamAction';
import Spinner from '../common/Spinner';


class Team extends Component {
    componentDidMount()
    {
        this.props.getTeam(this.props.match.params.id);
        // this.props.getTeam(2);
    }

    render() {
        const {team} = this.props.team;
        let TeamContent;
        if(team === null || Object.keys(team).length === 0){

            TeamContent = <Spinner/>

        }
        else{
            TeamContent = (
                <div>
                    <h6>{team.name}</h6>

                </div>
            )
        }
        return (
            <div>
                <h4>Team</h4>
                {TeamContent}
            </div>
        );
    }
}

Team.propTypes = {
    getTeam:PropTypes.func.isRequired,
    team:PropTypes.object.isRequired,
}

const mapStateToProps = state =>({
    team:state.team
})

export default connect(mapStateToProps,{getTeam})(Team);
