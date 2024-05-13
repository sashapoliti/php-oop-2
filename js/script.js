const { createApp } = Vue;

createApp({
  data() {
    return {
        items : [],
        
      
    };
  },
  methods: {
    getData() {
        axios.get('Models/server.php').then((res) => {
            this.items = res.data;
        });
    },
    addToCart(id, path) {
        const data = new FormData();
        data.append('id', id);
        data.append('path', path);
        axios.post('Models/server.php', data).then((res) => {
            this.items = res.data;
        });        
    },
    removeFromCart(id, name, index) {
      const data = new FormData();
      data.append('id', id);
      data.append('name', name);
      data.append('index', index);
      axios.delete('Models/server.php', { data }).then((res) => {
        this.items = res.data;
      })
    }
  },
  computed: {},
  created() {
    this.getData();
  },
}).mount("#app");