/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// import ApiExt from './components/ApiExt.vue'
// import MainSection from './components/Main.vue'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
 Vue.component('main-section',{
     props:['user'],
     template:"<ul class='list-group' style='width:100%;'>"
     + " <div class='usuario'><li class='list-group-item'>"
             + "<strong>{{user.name.first}} {{user.name.last}} </strong>| {{user.email}} <br>"
             + "Direccion: {{user.location.street.name}}, {{user.location.street.number}}  | Ciudad: {{user.location.city}} | CP: {{user.location.postcode}} <br>"
         + "</li> </div> </ul>",
 });
Vue.component('navbar-menu', require('./components/NavBarMenu.vue').default);
Vue.component('footer-section', require('./components/Footer.vue').default);
Vue.component('tareas', require('./components/Tareas.vue').default);
Vue.component('apiext', require('./components/ApiExt.vue'), {
     props:['listUsers']
 });



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var urlUsers="https://randomuser.me/api/?results=10";
const app = new Vue({
    el: '#app',
    created: function(){
        this.getUsers();
    },
    data:{
        txtTarea:"",
        listTareas:[{texto:"Ejemplo de tarea 1", checked:false}],
        listUsers:[]
        // listUsers:[{
        //     nombre: 'Manolo',
        //     apellido: 'Garcia'
        // },
        // {
        //     nombre: 'Carlos',
        //     apellido: 'Perez'
        // },
        // {
        //     nombre: 'Sandra',
        //     apellido: 'Olivares'
        // }

        // ]
    },
    methods:{
    //Agregar tareas
        AgregarTarea(){
            var tarea = this.txtTarea.trim();            
            if (tarea)
            {
                this.listTareas.push({
                    texto:tarea,
                    checked:false
                });
                this.txtTarea="";                
            }
        },
        EliminarTarea(tarea){
            var index = this.listTareas.indexOf(tarea);   
            this.listTareas.splice(index,1);
        },
        CheckTarea(tarea){
            tarea.checked = !tarea.checked;
        },
        getUsers(){
             Axios
             .get(urlUsers)
             .then(response=>(this.listUsers = response.data.results))
        }

    }
});
const appnav = new Vue({
    el: '#app-nav',
});

 
