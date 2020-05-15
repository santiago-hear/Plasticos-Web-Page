<?php
    include("connection.php");

    $state = $_POST['state'];
    $citysel = $_POST['city'];

    $get_cities = "SELECT * FROM city WHERE StateId = $state";

    $city_result = mysqli_query($database,$get_cities);

    while ($city = mysqli_fetch_assoc($city_result)) 
    {
        $selected = ($citysel == $city['CityId']) ? 'selected' : '';
        echo  "<option value='$city[CityId]' $selected>".utf8_encode($city['CityName'])."</option>";
    }
?>