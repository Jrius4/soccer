import {GET_FIXTURE,GET_FIXTURES,FIXTURE_LOADING} from '../actions/types';

const initialState = {
    fixtures: [],
    fixture:{},
    loading:false
};

export default function (state = initialState,action){
    switch(action.type){
        case FIXTURE_LOADING:
            return {
                ...state,
                loading:true
            }

        case GET_FIXTURES:
            return{
                ...state,
                fixtures:action.payload,
                loading:false
            }

        case GET_FIXTURE:
            return{
                ...state,
                fixture:action.payload,
                loading:false
            }
        default:
            return state;

    }
}
