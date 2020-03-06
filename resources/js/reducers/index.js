import { combineReducers } from 'redux';

import fixtureReducer from './fixtureReducer';
import resultReducer from './resultReducer';
import teamReducer from './teamReducer';

export default combineReducers({
    fixture:fixtureReducer,
    result:resultReducer,
    team:teamReducer,
});
