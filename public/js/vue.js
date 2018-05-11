var urlAbilities = 'abilities';
var urlExperiencias = 'experiences';
var app = new Vue({
  el: '#main',
  created:function(){
    this.showAbilities();
    this.showExperiencias();
  },
  data: {
    habilidades: [],
    experiencias:[]
  },
  methods:{
    showAbilities:function(){
      axios.get(urlAbilities).then(response=>{
          this.habilidades = response.data
      });
    },
    showExperiencias:function(){
      axios.get(urlExperiencias).then(response=>{
          this.experiencias = response.data
      });
    }
  }
});
