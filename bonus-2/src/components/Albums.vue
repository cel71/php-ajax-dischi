<template>
        <div class="albums-inner-container">
            <div class="sfondo-album">
                <img :src="poster" :alt="'album ${title} of ${author}'">
                <div class="title">{{title.toUpperCase()}}</div>
                <div class="author">{{author}}</div> 
                <div class="year">{{year}}</div> 
            </div>
        </div>
</template>

<script>

export default {
  name: "Albums",
  props: {
      poster: String,
      title: String,
      author: String,
      year: String,
  }

};

</script>

<style lang="scss" scoped>

    .albums-inner-container {
        width: calc(100% / 5);
        text-align: center;
        
        .sfondo-album{
            background-color: rgb(46, 58, 70);
            width: 170px;
            height: 298px;
            margin: 8px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            
            img {
                width: 140px;
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .title {
                width: 100px;
                color: white;
                font-size: 14px;
                padding-bottom: 15px;
                font-weight: bold;
            }

            .author, .year {
                color: rgb(128, 128, 120);
                font-size: 12px;
            }
        }
    }

        
</style>
