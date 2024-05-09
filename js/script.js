const { createApp } = Vue;

createApp({
  data() {
    return {
        items : [],
        
      
    };
  },
  methods: {
    addToCart(id, path) {
        console.log(id);
        console.log(path);
        const data = new FormData();
        data.append('id', id);
        data.append('path', path);
        axios.post('Models/server.php', data).then((res) => {
            this.items = res.data;

        });
        
    },
  },
  computed: {},
  created() {},
}).mount("#app");
