
<footer class="footer">
    <div class="container">
        <span class="text-muted">Developed by <a href="mailto:skorohods@mail.ru"
                                                 target="_blank">Skorohod</a> </span>
        <a href="https://github.com/shultzer/Engine/tree/branch2"
           target="_blank"><img
              src="views/images/GitHub-Mark-32px.png"></a>
    </div>

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<!--<script src="views/js/popper.min.js"></script>-->
<script src="views/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    new Vue({
        el: '#search',
        data: {
            search: '',
        },
        methods:{
            searching( ) {
                axios.get().then()
            }
        }

    })
</script>
</body>
</html>
