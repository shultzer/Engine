<?php include 'parts/header.php'; ?>

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Курс Биткоина</h1>
    <div class="container" id="chart_div"></div>
    <br>
    <div class="container" id="app">
        <table class="table">
            <tr class="table-primary">
                <th>Валюта</th>
                <th>Курс покупки</th>
                <th>Курс продажи</th>
            </tr>
            <tr class="table-info">
                <td>USD</td>
                <td v-cloak>{{curr.buy+curr.symbol}}</td>
                <td v-cloak>{{curr.sell+curr.symbol}}</td>
            </tr>
        </table>
        <h3>Курс доллара к белорусскому рублю по НБРБ</h3>
        <table class="table">
            <tr>
                <th>Валюта</th>
                <th>Курс</th>
            </tr>
            <tr>
                <td>USD</td>
                <td v-cloak>{{nb.Cur_OfficialRate}}</td>
            </tr>
        </table>
    </div>
</main>

<?php include 'parts/footer.php'; ?>
<script>
    <!--Load the AJAX API-->
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawBackgroundColor);
    var store = [];

    function drawBackgroundColor() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'X');
        data.addColumn('number', 'Bitcoin');

        data.addRows(store);

        var options = {
            hAxis: {
                title: 'Seconds'
            },
            vAxis: {
                title: 'USD'
            },
            backgroundColor: '#c4cbf8'
        };


        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }

    console.log(store.lenght);
    setInterval(function () {

        axios.get('https://blockchain.info/ru/ticker').then(function (response) {

            store.splice(0, 0, [store.length, response.data.USD
                .buy]);
            document.getElementById('chart_div').innerHTML = '';
            drawBackgroundColor();

            //console.log(store);

        });
    }, 1000);

    // console.log(store);


</script>
<script>
    app = new Vue({
        el: '#app',
        data:
            {
                curr: {},
                nb: {},
                storage: []
            },
        mounted: function () {

            axios.get('https://blockchain.info/ru/ticker').then(function (response) {
                app.curr = response.data.USD;

            });
            axios.get('http://www.nbrb.by/API/ExRates/Rates/145')
                .then(function (response) {
                    app.nb = response.data;
                })

        }
    });


</script>
