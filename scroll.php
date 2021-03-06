


    <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'>
    <!--    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald&amp;display=swap'>-->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*body {*/
        /*    font-size: 1.3rem;*/
        /*    font-family: 'Oswald', sans-serif;*/
        /*    background: #f9f9f9;*/
        /*}*/



        .Scrollcontainer {
            max-width: 1100px;
            margin: auto;
            overflow: auto;
            padding: 0 2rem;
        }



        .simg {
            width: 100%;
        }

        .sscard {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 2rem;
            background: transparent;
            margin-bottom: 2rem;
        }

        .sscard h3 {
            margin-bottom: 2rem;
            color: #b08d41;
            font-size: 30px;
            font-weight: bold;

        }

        .sscard img {
            height: 400px;
            border-radius: 10px;
        }

        .scroll_means_div_1_3 {
            padding-top: 60px;
            margin-left: 100px;
        }
        .scroll_means_div_2_4 {
            padding-top: 60px;
            margin-right: 100px;
        }

        .sscard:nth-child(even) img {
            order: 2;
        }


        .ssbtn {
            display: inline-block;
            background-color: #b08d41;
            font-size: 16px;
            border-radius: 15px;
            border: 2px solid #b08d41;
            color: white;
            font-weight: bold;
            padding-top: 7px;
            margin-top: 2rem;
            cursor: pointer;
            text-decoration: none;
            height: 42px;
            width: 170px;
        }

        .ssbtn:hover {
            background-color: #d39717;
            color: white;

            text-decoration: none;
        }

        @media(max-width:600px) {
            .sscard {
                display: block;
            }
        }

        /*.scroll_means_div*/
        /*{*/
        /*    padding-top: 100px;*/
        /*}*/


        .para_desc {
            margin-top: 0;
            margin-bottom: 1rem;
            text-align: justify;
        }

    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no" >


<div class="Scrollcontainer">


    <div class="sscard" data-aos="fade-left">
        <img class="simg" src="./mainUI/imgs/livingRoom.jpg" alt="" />
        <div class="scroll_means_div_1_3" style="text-align: center">
            <h3>Living Rooms</h3>
            <p class="para_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                enim laudantium, animi veniam libero eveniet culpa unde perferendis
                illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                officia. Ab, delectus.
            </p>
            <a href="mainProducts.php" class="ssbtn">Visit The Shop</a>

        </div>
    </div>

    <div class="sscard" data-aos="fade-right">
        <img class="simg" src="./mainUI/imgs/offices.jpg" alt="" />
        <div class="scroll_means_div_2_4" style="text-align: center">
            <h3>Offices</h3>
            <p class="para_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                enim laudantium, animi veniam libero eveniet culpa unde perferendis
                illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                officia. Ab, delectus.
            </p>

            <a href="mainProducts.php" class="ssbtn">Visit The Shop</a>
        </div>
    </div>

    <div class="sscard" data-aos="fade-left">
        <img class="simg" src="./mainUI/imgs/bedRooms.jpg" alt="" />
        <div class="scroll_means_div_1_3" style="text-align: center">
            <h3>Bed Rooms </h3>
            <p class="para_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                enim laudantium, animi veniam libero eveniet culpa unde perferendis
                illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                officia. Ab, delectus.
            </p>
            <a href="mainProducts.php" class="ssbtn">Visit The Shop</a>
        </div>
    </div>

    <div class="sscard" data-aos="fade-right">
        <img class="simg" src="./mainUI/imgs/homeAcess.jpg" alt="" />
        <div class="scroll_means_div_2_4" style="text-align: center">
            <h3>Home Accessories </h3>
            <p class="para_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod error
                enim laudantium, animi veniam libero eveniet culpa unde perferendis
                illo fugit corporis, voluptatibus totam dolorum, maiores magnam
                officia. Ab, delectus.
            </p>
            <a href="mainProducts.php" class="ssbtn">Visit The Shop</a>
        </div>
    </div>
</div>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

<script src='https://unpkg.com/aos@next/dist/aos.js'></script>
<script id="rendered-js" >
    AOS.init({
        offset: 400, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000 // values from 0 to 3000, with step 50ms
    });
    //# sourceURL=pen.js
</script>



</body>

</html>