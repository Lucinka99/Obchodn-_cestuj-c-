# Obchodn-_cestuj-c-
Problém obchodního cestujícího
Algoritmizace a programování
Lucie Tichá
V3D
2023/2024
Úvod
Program je navržen pro řešení tzv. "problému obchodního cestujícího" (Traveling Salesman
Problem, TSP). Problém spočívá v nalezení nejkratší cesty, která spojí všechna zadaná
města. Implementace tohoto programu je rozdělena do čtyř hlavních souborů: City.php,
Index.php, Style.css a TravelingSalesman.php.
Veřejná webová adresa je následující: https://webyskola.jednoduse.cz/index.php

Soubory

City.php

Soubor obsahuje definici třídy City, která reprezentuje jednotlivá města. Tato třída obsahuje
informace o názvu města a jeho souřadnicích.

Index.php

Indexový soubor obsahuje uživatelské rozhraní, které zobrazuje výsledky řešení TSP. Zde
jsou vytvořeny instance měst a instance třídy TravelingSalesman, přidávají se města do
seznamu, vypočítává se optimální trasa a zobrazují se výsledky.

Style.css

CSS soubor definuje vzhled webové stránky, která zobrazuje výsledky. Obsahuje styly pro
formátování textu, rozložení prvků a pozadí stránky.

TravelingSalesman.php

Tento soubor obsahuje implementaci třídy TravelingSalesman, která řeší problém TSP.
Obsahuje metody pro přidávání měst, přidávání vzdáleností mezi městy a aplikování
algoritmu "Nearest Neighbor" pro nalezení optimální trasy.

Vývojový diagram

Vývojový diagram byl vytvořen v bezplatném online softwaru na tvorbu diagramů s názvem
www.draw.io.


Popis funkcionality

Program pracuje následovně:

Vytvoření měst: Pro každé město v zadání se vytvoří instance třídy City obsahující název
města a jeho souřadnice.

Vytvoření instance TravelingSalesman: Vytvoří se instance třídy TravelingSalesman, která
bude sloužit k řešení problému.

Přidání měst a vzdáleností: Města se přidají do seznamu a pro každou dvojici měst se
zadá vzdálenost.

Řešení problému TSP: Použije se algoritmus "Nearest Neighbor" pro nalezení optimální
trasy.

Zobrazení výsledků: Zobrazení výsledné optimální trasy a celkové vzdálenosti na webové
stránce.

Spuštění programu

Pro spuštění programu stačí otevřít soubor index.php. Program automaticky vypočítá
optimální trasu a celkovou vzdálenost a zobrazí výsledky na stránce.

Poznámka k implementaci

Efektivita algoritmu: Algoritmus "Nearest Neighbor" je zvolen pro svoji jednoduchost při
řešení problému TSP.

Závěr
Program poskytuje jednoduché řešení problému obchodního cestujícího
