<template>
    <div>
      <h1>Liste des utilisateurs</h1>
      <ul>
        <li v-for="user in users" :key="user.id">{{ user.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        users: []
      };
    },
    mounted() {
      axios.get('/api/users')
        .then(response => {
          this.users = response.data;
        });
    }
  }
  </script>
  
  <style scoped>
  ul {
    list-style-type: none;
  }
  li {
    padding: 5px;
  }
  </style>
  