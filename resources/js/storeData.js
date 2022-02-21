export default{
    state:{
        data : []
    },
    getters:{
        createUserBasic(state){
            return state.data
        }
    },
    actions:{
        createUserBasic(context){
            axios.post('api/createUserBasic').then((r)=>{
                context.commit('createUserBasic', r.data.userBasic);
            });
        },
    },
    mutations:{
        createUserBasic(state, payload){
            return state.data = payload
        }
    }
}
