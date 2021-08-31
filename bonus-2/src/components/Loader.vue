<template>
    <div class="sfondo"><h1>Caricamento in corso.....</h1></div>
</template>

<script>

export default {
  name: "Loader",

};

</script>

<style lang="scss" scoped>

  .sfondo {
    width: 100%;
    height: 100vh;
    background-color: rgb(30, 45, 59);
    color: rgb(30, 215, 96);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    left: 0;

    h1 {
      font-size: 50px;
    }
  } 

</style>
