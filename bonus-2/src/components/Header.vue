<template>
    <div class="sfondo">
        <div class="immagine">
            <img src="../assets/spotify-logo.png" alt="spotify-logo">
        </div>
        <div class="select-box">
            <form>
                <label>SELEZIONA UN GENERE MUSICALE:</label>
                <select v-model="ricercaGenere">
                    <option v-for="(album, index) in response" :key="index">{{album.genre}}</option>
                </select>
            </form>
            <button @click="$emit('ricerca', ricercaGenere)">SELEZIONA</button>
        </div>
    </div>
</template>

<script>

export default {
  name: "Header",
  props: {
    response: Array
  },
  data: function () {
    return {
        ricercaGenere: ""
    }
  },
};

</script>

<style lang="scss" scoped>

    .sfondo {
        height: 90px;
        background-color: rgb(46, 58, 70);
        display: flex;
        align-items: center;
        justify-content: space-between;


        img {
            width: 80px;
            padding-left: 15px;
        }
    }

    .select-box {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(30, 45, 59);
        border: 2px solid rgb(30, 215, 96);
        margin-right: 15px;
        border-radius: 10px;

        form {
            padding: 20px;
            color:white;
            font-weight: bold;

            label {
                padding-right: 15px;
            }

            select {
                width: 80px;
                border: 2px solid rgb(30, 215, 96);
                color: rgb(30, 215, 96);
                background-color: rgb(46, 58, 70);
            }
        }

        button {
            margin-right: 16px;
            border: none;
            background-color: rgb(30, 215, 96);
            color: white;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
        }
    }

</style>
