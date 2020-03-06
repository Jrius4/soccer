import React, { Component } from 'react'
import PropTypes from 'prop-types'
import { connect } from 'react-redux'
import {getFixtures} from '../../../actions/fixtureAction'
import Spinner from '../../common/Spinner';
import FixtureList from './FixtureList';

class Fixtures extends Component {
    componentDidMount(){
        this.props.getFixtures();
    }

    render() {
        const {fixtures,loading} = this.props.fixture;
        let fixtureContent;
        if(fixtures === null || loading)
        {
            fixtureContent = <Spinner/>
        }
        else{
            fixtureContent = <FixtureList fixtures={fixtures}/>
        }
        return (
            <div className="container-fluid">
                <div className="row">
                    <div className="col-md-12">
                        {fixtureContent}
                    </div>
                </div>
            </div>
        )
    }
}
Fixtures.propTypes = {
    getFixtures:PropTypes.func.isRequired,
    fixture:PropTypes.object.isRequired,
}
const mapStateToProps = state =>({
    fixture:state.fixture
})

export default connect(mapStateToProps,{getFixtures})(Fixtures);
// export default Fixtures;
