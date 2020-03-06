import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import {getTeams} from '../../actions/teamAction';
import Spinner from '../common/Spinner';
import TeamsList from './TeamsList';

class Teams extends Component {
    componentDidMount()
    {
        this.props.getTeams();
    }

    render() {
        const {teams,loading} = this.props.team;
        let teamContent;

        if(teams === null || loading){
            teamContent = <Spinner/>
        }
        else{
            teamContent = <TeamsList teams={teams}/>
        }
        return (
            <div>
                <div className="container">
                    <div className="row">
                        <div className="col-md-12">
                            {teamContent}
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

Teams.propTypes = {
    getTeams:PropTypes.func.isRequired,
    team:PropTypes.object.isRequired,
}

const mapStateToProps = state =>({
    team:state.team
})

export default connect(mapStateToProps,{getTeams})(Teams);
