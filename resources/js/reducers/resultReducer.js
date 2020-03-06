const initialState = {
    loading:true,
    results:[],
    result:{}
}

export default function(state = initialState,action)
{
    switch(action.type)
    {
        default:
            return state;
    }
}
