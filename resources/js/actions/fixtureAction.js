import axios from 'axios';
import {
    GET_FIXTURES,
    GET_FIXTURE,
    FIXTURE_LOADING,
} from './types';


export const getFixtures = () => dispatch =>{
    dispatch(setFixtureLoading());
    axios.get('/api/fixtures')
    .then(res=>
        dispatch({
            type:GET_FIXTURES,
            payload:res.data.data
        })
        ).catch(err=>
            dispatch({
                type:GET_FIXTURES,
                payload:null
            }));
};

// Set loading state
export const setFixtureLoading = () => {
    return {
      type: FIXTURE_LOADING
    };
  };
