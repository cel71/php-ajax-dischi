new Vue(
    {
        el: "#app",
        data: {
            albums: []
        },
        created() {
            axios.get('http://localhost/php-ajax-dischi/api/api.php')
            .then((response) => {
                this.albums = response.data;
            })
        }
    }
);