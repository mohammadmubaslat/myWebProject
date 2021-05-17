<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<?php
include "side_Nav_Admin.php";
include "../dataBase.php";

$months =array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$temp = " ";

if (isset($_POST['report'])){

    $temp = $_POST['chart'];
    $tt = $_POST['cat'];
    $yy = $_POST['year'];


    $product_query = "SELECT `category`, `date` FROM `chart_table` WHERE category = '$tt'";
    $run_query = mysqli_query($con, $product_query);
    $total = mysqli_num_rows($run_query);

    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $t = $row['date'];
//        echo $t . '<br>';



            for ($i = 1; $i <= 12; $i++) {
                $query = "SELECT * FROM chart_table WHERE date BETWEEN '$yy-$i-01' AND '$yy-$i-30' and category = '$tt'";
                $result = $con->query($query);
                $months[$i] = $result->num_rows / $total * 100;
            }



            // echo $year . "\n" . $month . "\n" . $day .'<br>';
        }

    }


}

?>




<div class="mainContent">

    <h3 style="padding-left: 40%"> Bently Home Chart</h3>

    <div class="chart-container" style="position: relative; height:80vh; width:80vw" >
        <canvas id="myChart" ></canvas>
    </div>


    <script>
        let t = <?php echo json_encode( $GLOBALS['temp'])?>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: t,
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: 'Bently Home Chart',
                    data: [<?php echo $months[1]?>, <?php echo $months[2]?> , <?php echo $months[3]?>, <?php echo $months[4]?>, <?php echo $months[5]?> ,
                        <?php echo $months[6]?>, <?php echo $months[7]?>, <?php echo $months [8]?>, <?php echo $months[9]?>, <?php echo $months[10]?>, <?php echo $months[11]?>,
                        <?php echo $months[12] ?>],
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
    </script>


    <form action="poll_Admin.php" method="post">
        <label for="chart">Chart Shape</label>
        <select id="chart" name="chart" class="form-control">
            <option> select one..</option>
            <option value="pie">pie</option>
            <option value="polarArea">polar Area</option>
            <option value="line">Line</option>
        </select>


        <label for="cat">Categories</label>
        <select id="cat" name="cat" class="form-control">
            <option value="1">Bedroom</option>
            <option value="2">Living</option>
            <option value="3">Storage</option>
            <option value="4" >Decor</option>
            <option value="5">Study</option>
        </select>

        <label for="cat">Year</label>
        <select id="year" name="year" class="form-control">
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
        </select>

        <input type="submit" name="report" id="report" value="Show Report">
    </form>



<?php
include "footer_Admin.php";
?>