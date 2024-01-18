<link rel="stylesheet" href="styles.css">

<body class='bgc-black c-green'>
    <div style='border:groove;outline-style: solid;' class='
            w-per-50 c-yellowgreen bc-aquamarine bw-px-10 oc-blueviolet ow-px-10 oo-px-100 m-auto 
            pos-relative overflow-hidden p-per-5 ta-center p-per-15 pos-fixed ws-'>Lorem ipsum dolor sit amet consectetur, adipisicing
        elit. Repellendus quae pariatur ea est veniam saepe libero dolor minima praesentium, ullam illum nisi quidem
        optio sit expedita voluptatum id, qui hic facilis, totam cupiditate consectetur adipisci eos? Nobis atque quo
        quidem ea id voluptatem, harum quasi architecto earum mollitia sequi, aspernatur suscipit accusamus unde. Quia
        consequuntur dolorum quae ab, saepe porro facere ad labore nisi voluptates quisquam consectetur t empora
        reprehenderit perferendis non dolores numquam repellat cupiditate ea harum magni maxime. Ipsum eveniet error
        facere enim vero eos, laudantium necessitatibus, repellat molestiae quos eum dolore ea maiores odio dolor unde
        veritatis debitis ut quidem nostrum aperiam modi. Modi, nam! Exercitationem numquam natus laboriosam voluptates,
        nemo voluptas. Consequuntur a maiores possimus odit at aliquid repudiandae quidem quibusdam quisquam unde minus
        eligendi illum non amet, cumque vero provident! Inventore deleniti ad, suscipit voluptatum a id rem, sequi ab
        accusamus praesentium voluptatem debitis, eaque perferendis itaque qui ullam quas enim aspernatur quae unde
        consectetur exercitationem expedita? Ipsum quam consectetur nam eum veniam molestias debitis itaque, delectus
        sapiente soluta, totam culpa quasi aut consequuntur magnam ad tenetur magni commodi. Rem laborum, et dolore
        voluptatem voluptatum, tempora voluptate consectetur blanditiis totam quae modi porro similique quaerat eum?
    </div>
    <div class='w-per-100 overflow-hidden pos-relative top-per-25 c-yellowgreen bgc-darkred'>
        <video class='w-per-0'>
            <source src="video.mp4" type="video/mp4">
        </video>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p style='line-height: 100px;'> </p> <?php

    $px_s = [
        '1' => 1,
        '3' => 3,
        '5' => 5,
        '7' => 7,
        '8' => 8,
        '10' => 10,
        '12' => 12,
        '14' => 14,
        '16' => 16,
        '18' => 18,
        '20' => 20,
        '24' => 24,
        '25' => 25,
        '30' => 30,
        '32' => 32,
        '34' => 34,
        '36' => 36,
        '38' => 38,
        '40' => 40,
        '42' => 42,
        '44' => 44,
        '46' => 46,
        '48' => 48,
        '50' => 50,
        '75' => 75,
        '100' => 100,
        '125' => 125,
        '150' => 150,
        '175' => 175,
        '200' => 200,
        '250' => 250,
        '300' => 300,
        '400' => 400,
        '500' => 500,
        '600' => 600,
        '625' => 625,
        '700' => 700,
        '750' => 750,
        '800' => 800,
        '900' => 900,
        '1000' => 1000,
        '1250' => 1250,
        '1500' => 1500,
        '1750' => 1750,
        '1800' => 1800,
        '1900' => 1900,
        '1920' => 1920
    ];

    $percents = [
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '5' => 5,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10,
        '12' => 12,
        '15' => 15,
        '18' => 18,
        '20' => 20,
        '22' => 22,
        '23' => 23,
        '24' => 24,
        '25' => 25,
        '26' => 26,
        '28' => 28,
        '30' => 30,
        '36' => 36,
        '40' => 40,
        '50' => 50,
        '55' => 55,
        '60' => 60,
        '62' => 62,
        '64' => 64,
        '65' => 65,
        '66' => 66,
        '68' => 68,
        '70' => 70,
        '72' => 72,
        '74' => 74,
        '75' => 75,
        '80' => 80,
        '90' => 90,
        '92' => 92,
        '94' => 94,
        '95' => 95,
        '96' => 96,
        '98' => 98,
        '100' => 100,
        '125' => 125,
        '150' => 150,
        '175' => 175,
        '200' => 200,
        '250' => 250
    ];

    $combined = array_unique(array_merge($percents, $px_s));
    sort($combined);

    foreach ($combined as $value) {
        echo $value.","."<br>";
    }

    ?>
</body>