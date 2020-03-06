import { TEAM_LOADING, GET_TEAM, GET_TEAMS } from './types';
import axios from 'axios';


export const getTeams = () =>dispatch=>{
    dispatch(setTeamLoading());
    axios
    .get('/api/teams')
    .then(res=>
        dispatch({
            type:GET_TEAMS,
            payload:res.data.data
        }))
        .catch(err =>
            dispatch({
              type: GET_POSTS,
              payload: null
            })
          );
}


export const getTeam = id => dispatch =>{
    dispatch(setTeamLoading());
    axios.get(`/api/teams/${id}`)
    .then(
        res=>dispatch({
            type:GET_TEAM,
            payload:res.data.data
        })).catch(err =>
            dispatch({
              type: GET_POST,
              payload: null
            })
          );

}

export const setTeamLoading = () => {
    return {
        type: TEAM_LOADING
    }
}
