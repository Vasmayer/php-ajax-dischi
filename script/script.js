console.log('Vue OK',Vue);

Vue.config.devtools = true;

var app = new Vue({
    el:'#app',
    data: {
      songs:[],
      genres:[],
      selected:'',
      uriApi:'http://localhost:8888/php-ajax-dischi/php-ajax-dischi/api/dischi.php',
    },
    methods:
    {
      filterGenres()
      {
        axios.get(`${this.uriApi}?genre=${this.selected}`).then(res =>{

        this.songs = res.data; 

        });

      }

    },
    mounted()
    {
        axios.get(this.uriApi).then(res =>{

        this.songs = res.data; 
        
        const genres = [];

        this.songs.forEach(song => {
          if(!genres.includes(song.genre)) 
          {
            genres.push(song.genre);
          }
          
        });

        this.genres = genres;

        });
    }
  })