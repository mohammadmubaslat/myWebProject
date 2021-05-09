<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<?php
include "side_Nav_Admin.php";

?>


<script type="text/javascript">
    function fun(){

        let chart_shape = document.getElementById('brand_country').value;


        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: chart_shape,
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: 'Bently Home Chart',
                    data: [1,2,3,4,5,6,7,8,9],
                    backgroundColor: [
                        'rgba(120, 205, 132, 0.4)',
                        'rgba(10, 230, 100, 0.4)',
                        'rgba(200, 40, 200, 0.4)',
                        'rgba(75, 192, 192, 0.4)',
                        'rgba(153, 102, 255, 0.4)',
                        'rgba(255, 159, 64, 0.4)' ,
                        'rgba(255, 120, 50, 0.4)',
                        'rgba(5, 100, 64, 0.4)',
                        'rgba(50, 230, 255, 0.4)',
                        'rgba(0, 0, 0, 0.4)',
                        'rgba(60, 60, 160, 0.4)',
                        'rgba(205, 30, 30, 0.4)'
                    ],
                    borderColor: [

                        'rgb(255, 255, 255)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            title:{display: true,
                text: 'Bently Home Chart Chart'}
        });




// document.write(chart_shape);
    }

    window.onload=()=>{

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: 'Bently Home Chart',
                    data: [1,2,3,4,5,6,7,8,9],
                    backgroundColor: [
                        'rgba(120, 205, 132, 0.4)',
                        'rgba(10, 230, 100, 0.4)',
                        'rgba(200, 40, 200, 0.4)',
                        'rgba(75, 192, 192, 0.4)',
                        'rgba(153, 102, 255, 0.4)',
                        'rgba(255, 159, 64, 0.4)' ,
                        'rgba(255, 120, 50, 0.4)',
                        'rgba(5, 100, 64, 0.4)',
                        'rgba(50, 230, 255, 0.4)',
                        'rgba(0, 0, 0, 0.4)',
                        'rgba(60, 60, 160, 0.4)',
                        'rgba(205, 30, 30, 0.4)'
                    ],
                    borderColor: [

                        'rgb(255, 255, 255)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            title:{display: true,
                text: 'Bently Home Chart Chart'}
        });



    }
</script>




<div class="mainContent">


    <h3 style="padding-left: 40%"> Bently Home Chart</h3>

    <div class="chart-container" >
        <canvas id="myChart" ></canvas>
    </div>


    <form action="poll_Admin.php" method="post">
        <label for="brand_country">Chart Shape</label>
        <select onchange="fun()" id="brand_country" name="brand_country" class="form-control">
            <option> select one..</option>
            <option value="pie">pie</option>
            <option value="polarArea">polar Area</option>
            <option value="line">Line</option>
        </select>
    </form>



    <?php
    include "footer_Admin.php";
    ?>
