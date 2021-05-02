

</div>    <!--main Content -->
</div>   <!-- main  Area -->
</div>   <!--   container -->



<script>


    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();

</script>

<script src="https://kit.fontawesome.com/f82420dd88.js" crossorigin="anonymous"></script>
<script src="main_Admin_Script.js"> </script>

<script src="bootstrap.js"></script>
<script src="jquery-3.6.0.min.js"></script>



</body>

</html>
