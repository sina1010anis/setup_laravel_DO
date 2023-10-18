import './bootstrap';
import 'bootstrap/dist/css/bootstrap.css'
import {createApp} from 'vue/dist/vue.esm-bundler';
import axios from 'axios';


createApp({
    data:()=>({
        version:'Vue3 Vclint',
        txt_search:null,
        text:null,
        datas:null
    }),
    methods:{
        test(){
            axios.post('/elasticsearch', {txt:this.txt_search}).then((res)=>{
                this.datas = res.data
            })
        }
    }
  }).mount("#app");
