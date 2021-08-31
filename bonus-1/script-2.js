
new Vue(
    {
        el: '#app',
        data: {
            albums2: []
        },
        created() {

            axios.get('http://localhost/php-ajax-dischi/bonus-1/api2.php?genre=Rock')
                .then((response) => {
                    this.albums2 = response.data;
                })

        }

    }
); 