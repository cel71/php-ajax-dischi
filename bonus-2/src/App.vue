<template>
  <div id="app">
    <Loader v-if="response.length === 0"/>
    <Header :response="response" @ricerca="ricercaGenere2"/>
    <Main :response="genereAlbums"/>
  </div>
</template>

<script>
import axios from "axios";
import Header from "./components/Header.vue";
import Main from "./components/Main.vue";
import Loader from "./components/Loader.vue";

export default {
  name: "App",
  components: {
    Header,
    Main,
    Loader
  },
  data: function () {
    return {
      response: [],
      genereAlbums: []
    }
  },
  created () {
    axios.get('http://localhost/php-ajax-dischi/api/api.php')
    .then ((result) => {
      this.response = result.data.response
      this.ricercaGenere2 ("")
    })
  },
  methods: {
    ricercaGenere2 (ricercaGenere) {
      this.genereAlbums = this.response.filter ((element) => {
        return element.genre.includes (ricercaGenere);
      })
    }
  }
};
</script>

<style lang="scss">

</style>
