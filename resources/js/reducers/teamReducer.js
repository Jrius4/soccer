import { TEAM_LOADING, GET_TEAM, GET_TEAMS, } from '../actions/types';

const initialState = {
    teams:[],
    team:{},
    loading:false,
};

export default function (state = initialState,action){
    switch (action.type) {
        case TEAM_LOADING:
            return{
                ...state,
                loading:true
            };

        case GET_TEAMS:
            return {
                ...state,
                teams:action.payload,
                loading:false
            }

        case GET_TEAM:
            return {
                ...state,
                team:action.payload,
                loading:false
            }

        default:
            return state;
    }

}
