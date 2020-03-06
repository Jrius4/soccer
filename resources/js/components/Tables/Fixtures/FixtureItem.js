import React, { Component } from 'react'
import PropTypes from 'prop-types'

class FixtureItem extends Component {


    render() {
        const {fixture} = this.props;
        return (
            <tr title={``}>

            </tr>
        )
    }
}
FixtureItem.propTypes = {
        fixture: PropTypes.object.isRequired,
    }
export default FixtureItem;
