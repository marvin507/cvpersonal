var urlDes = 'acercade';
var urlAbilities = 'abilities';
var urlExperiencias = 'experiences';
var urlProyectos = 'proyectos';
var urlEdu = 'educacion';
var urlFooter = 'footer';
var app = new Vue({
  el: '#main',
  created:function(){
    this.showAcercade();
    this.showAbilities();
    this.showExperiencias();
    this.showEducacion();
    this.showProjects();
    this.showFooter();
  },
  data: {
    descripcion:[],
    habilidades: [],
    experiencias:[],
    educacion:[],
    proyectos:[],
    footer:[]
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
    },

    showProjects:function(){
      axios.get(urlProyectos).then(response=>{
        this.proyectos = response.data
      });
    },

    showFooter:function(){
      axios.get(urlFooter).then(response=>{
          this.footer = response.data
      });
    }
  }
});
