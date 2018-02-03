<?php include 'parts/header.php'; ?>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Курс Биткоина</h1>
    <div class="container" id="app">
        <table class="table">
            <tr>
                <th>Валюта</th>
                <th>Курс покупки</th>
                <th>Курс продажи</th>
            </tr>
            <tr>
                <td>USD</td>
                <td>{{ curr.USD.buy+curr.USD.symbol}}</td>
                <td>{{ curr.USD.sell+curr.USD.symbol}}</td>
            </tr>

        </table>
    </div>
    <h4></h4>
    <ul>
    </ul>
</main>

<?php include 'parts/footer.php'; ?>
<script>
    app = new Vue({
        el: '#app',
        data:
            {
                curr: {}
            },
        created: function () {
            axios.get('https://blockchain.info/ru/ticker').then(function (response) {
                app.curr = response.data;

            })
        }
    });


    /*var xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'https://blockchain.info/ru/ticker');
    xhttp.send();
    var data = xhttp.response;
    console.log(data);
*/
    /* document.getElementById("container").innerHTML =
                xhttp.responseText;*/
</script>
