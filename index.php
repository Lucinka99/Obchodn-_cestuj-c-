<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveling Salesman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Obchodní cestující</h1>
    <?php
        include_once('TravelingSalesman.php');
     
        $city1 = new City("Varnsdorf", 50.912712, 14.618596); /*Nové instance třídy s názvem města a souřadnicemi */
        $city2 = new City("Rybniště", 50.884084, 14.514972);
        $city3 = new City("Rumburk", 50.956592, 14.557722);
        $city4 = new City("Dolní Poustevna", 50.993906, 14.285884);

    
        $salesman = new TravelingSalesman(); /*Vytvoření instance pro řešení problému obchodního cestujícího */

        
        $salesman->addCity($city1); /*Přídání měst do seznamu používaného k vyřešení TSP */
        $salesman->addCity($city2);
        $salesman->addCity($city3);
        $salesman->addCity($city4);

        
        $salesman->addDistance($city1, $city2, 12.2); /*Přidání vzdáleností mezi jednotlivými městy */
        $salesman->addDistance($city2, $city3, 10.9);
        $salesman->addDistance($city3, $city4, 23.6);
        $salesman->addDistance($city4, $city1, 32.7);

    
        $salesman->addDistance($city1, $city3, 9.1);
        $salesman->addDistance($city2, $city4, 26.4);
        $salesman->addDistance($city4, $city3, 23.5);
        $salesman->addDistance($city3, $city1, 9.2);
        $salesman->addDistance($city4, $city2, 26.4);

        
        $salesman->nearestNeighborAlgorithm(); /*Spuštění metody pro nalezení optimální trasy */

      
        $optimalRoute = $salesman->getOptimalRoute(); /*Získání výsledných dat optimální trasy a celkové vzdálenosti */
        $totalDistance = $salesman->getTotalDistance();

       /*Vypsání výsledků rozdělených čárkou, šipkou a v číselném formátu na 2 desetinná místa */
        echo '<p class="cities">Všechna města: ' . implode(', ', array_map(function($city) {
            return $city->getName();
        }, $salesman->getCities())) . '</p>';

        echo '<p class="route">Optimální trasa: ' . implode(' -> ', $optimalRoute) . '</p>';
        echo '<p class="distance">Celková vzdálenost: ' . number_format($totalDistance, 2) . ' km</p>';
    ?>
</body>
</html>