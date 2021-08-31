<template>
    <div class="sfondo">
        <div class="albums-container">
            <div class="container-inner">
                <Albums v-for="(album, index) in response" :key="index"
                :poster="album.poster"
                :title="album.title"
                :author="album.author"
                :year="album.year"
                />
            </div>
        </div>
    </div>
</template>

<script>

import Albums from "./Albums.vue";

export default {
  name: "Main",
  components: {
    Albums
  },
  props: {
    response: Array
  }

};

</script>

<style lang="scss" scoped>

    .sfondo {
        background-color: rgb(30, 45, 59);
        height: 100vh;
    
        .albums-container {
            width: 1000px;
            margin: 0 auto;
            
            .container-inner {
                display: flex;
                flex-wrap: wrap;
                padding: 50px 0;
            }
        }
    } 

</style>