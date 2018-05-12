var urlDes = 'acercade';
var urlAbilities = 'abilities';
var urlExperiencias = 'experiences';
var urlEdu = 'educacion';
var app = new Vue({
  el: '#main', 
  created:function(){
    this.showAcercade();
    this.showAbilities();
    this.showExperiencias();
    this.showEducacion();
  },
  data: {
    descripcion:[],
    habilidades: [],
    experiencias:[],
    educacion:[]
  },
  methods:{
    showAcercade:function(){
      axios.get(urlDes).then(response=>{
          this.descripcion = response.data
      });
    },

    showAbilities:function(){
      axios.get(urlAbilities).then(response=>{
          this.habilidades = response.data
      });
    },
    showExperiencias:function(){
      axios.get(urlExperiencias).then(response=>{
          this.experiencias = response.data
      });
    },
    showEducacion:function(){
      axios.get(urlEdu).then(response=>{
          this.educacion = response.data
      });
    }
  }
});
