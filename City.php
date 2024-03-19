<?php
class City { /*Deklarace třídy City */
    private $name;
    private $x;
    private $y;

    public function __construct($name, $x, $y) { /*Nová instance města s názvem a souřadnicemi */
        $this->name = $name;
        $this->x = $x;
        $this->y = $y;
    }

    public function getName(): string { /*Vrací název města ve formě řetězce */
        return $this->name;
    }

    public function getX(): float { /*Vrací souřadnici města jako float údaj */
        return $this->x;
    }

    public function getY(): float { /*Vrací souřadnici města jako float údaj */
        return $this->y;
    }
}
?>