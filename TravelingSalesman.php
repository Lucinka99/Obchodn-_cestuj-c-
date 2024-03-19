<?php
include_once('City.php'); /*Načtení souboru City.php*/

class TravelingSalesman { /*Deklarace třídy*/
    private $cities = []; /*Privátní pole $cities*/
    private $optimalRoute = [];
    private $distances = [];
    private $totalDistance = 0; /*Hodnota je 0, jelikož na žačátku není žádná vzdálenost.*/

    public function addCity($city) { /*Přidávání měst do seznamu měst*/
        $this->cities[] = $city;
    }

    public function addDistance($city1, $city2, $distance) { /*Přidání vzdálenosti mezi dvěma městy*/
        $this->distances[$city1->getName()][$city2->getName()] = $distance; /*Zaznamenání vzdálenosti mezi dvěma městy*/
        $this->distances[$city2->getName()][$city1->getName()] = $distance; /*Zajištění symetrie vzdáleností v grafu, pro hladkou aplikaci algoritmů.*/
    }

    public function nearestNeighborAlgorithm(){ /*Nalezení optimální cesty; vybírá nejbližsí město k aktuálnímu městu*/
        $unvisitedCities = $this->cities; /*Seznam měst, které ještě nebyly navštíveny */
        $currentCity = array_shift($unvisitedCities); /*První město ze seznamu se vloží do proměnné*/
        $this->optimalRoute[] = $currentCity->getName(); 

        while (!empty($unvisitedCities)) { /*Provádí se dokud seznam není prázdný */
            $minDistance = PHP_INT_MAX;
            $nearestCity = null;

            foreach ($unvisitedCities as $key => $city) { 
                $distance = $this->distances[$currentCity->getName()][$city->getName()]; /*Získání vzdálenosti mezi aktuální městem a navštíveným městem */
                if ($distance < $minDistance) { /*Pokud je vzdálenost menší než dosud nalezená nejkratší vzdálenost - aktualizuje se nejbližší soused. */
                    $minDistance = $distance;
                    $nearestCity = $city;
                    $nearestKey = $key;
                }
            }

            $currentCity = $nearestCity;
            $this->optimalRoute[] = $currentCity->getName(); /*Přidání nejbližšího města do pole optimální trasy*/
            $this->totalDistance += $minDistance; /*Přičtění vzdálenosti nejbližšího města k celkové vzdálenosti */
            unset($unvisitedCities[$nearestKey]); /*Odstranění nejbližšího města ze seznamu nenavštívených měst */
        }
    }
    /*Získání výsledných dat o optimální trase, celkové vzdálenosti a seznamu měst */
    public function getOptimalRoute() {
        return $this->optimalRoute;
    }

    public function getTotalDistance() { 
        return $this->totalDistance;
    }

    public function getCities() { 
        return $this->cities;
    }
}
?>