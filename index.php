<html>
<head>
<title>Array</title>
</head>
<body>
<h4><u>ARRAY</u></h4>
    <?php
    $arr = array("arun", "kaviya", "priya", "sheela");
    print_r($arr);
    echo "<br><br>";
    echo $arr[2];
    echo "<br><br>";
    print_r($arr[0]);
    ?>

    <h4><u>TYPES OF ARRAY</u></h4>
    <h5>1.INDEXED ARRAY</h5>
    <?php
    $arr = ["ram", "seetha", "arjun", "sara"];
    $arr[] = "arun";
    $arr[] = "rani";
    $arr[] = "joe";
    print_r($arr);
    echo "<br><br>";
    echo $arr[5] . "<br><br><br>";
    ?>

    <?php
    $arr = array("raji", "sita", "akhil", "shruthi");
    $arr[] = "vijaya";
    $arr[] = "suja";
    $arr[] = "kaviya";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
    echo $arr[6]
        ?>

    <h5>2.ASSOCIATE ARRAY</h5>
    <?php
    $arr = ['name1' => 'ram', 'name2' => 'sara', 'name3' => 'arjun'];
    $arr['name4'] = 'vijaya';
    $arr['name5'] = 'teenu';
    print_r($arr);
    echo "<br><br>";
    echo "The Name is :" . $arr['name3'] . "<br><br>";
    echo "Iam" . $arr["name5"] . " from Tenkasi <br><br><br>";
    ?>

    <?php
    $arr = array('name1' => 'raji', 'name2' => 'sita', 'name3' => 'akshaya');
    $arr['name4'] = 'veni';
    $arr['name5'] = 'tinu';
    print_r($arr);
    echo "<br><br>";
    echo "The Name is :" . $arr['name3'] . "<br><br>";
    echo "Iam" . $arr["name5"] . " from Kadayam";
    ?>

    <h5>3.MULTIDIMENSIONAL ARRAY</h5>
    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    print_r($cars);
    echo "<br><br>";
    print_r($cars[3]);
    echo "<br><br><br>";

    foreach ($cars as $a) {
        echo "Car Name :" . $a[0] . "  , Mileage :" . $a[1] . "  , Capacity :" . $a[2] . "<br><br>";
    }
    echo "<br><br><br>";
    ?>

    <?php
    $cars = [
        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2],
        ["Land Rover", 17, 15]
    ];
    print_r($cars);
    echo "<br><br>";
    print_r($cars[3]);
    echo "<br><br><br>";

    foreach ($cars as $a) {
        echo "Car Name :" . $a[0] . "  , Mileage :" . $a[1] . "  , Capacity :" . $a[2] . "<br><br>";
    }
    ?>
	</body>
	</html>