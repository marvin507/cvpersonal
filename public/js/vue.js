var urlAbilities = 'abilities';
new Vue({
  el: '#habilidad',
  created:function(){
    this.showAbilities();
  },
  data: {
    habilidades: []
  },
  methods:{
    showAbilities:function(){
      axios.get(urlAbilities).then(response=>{
          this.habilidades = response.data
      });
    }
  }
});
