<?php
/**
 * Created by PhpStorm.
 * User: Florian Bogendorfer
 */

/**
 * Class fußball
 */

require_once "ball.php";

require_once "ballInterface.php";

class basketball extends ball implements BallInterface
{

    private $volumen;

    /**
     * @return float
     */
    public function getVolumen(): float
    {
        return $this->volumen;
    }

    /**
     * basketball constructor.
     * @param string $name
     * @param float $durchmesser
     * @param string $material
     */
    public function __construct(string $name,
                                float $durchmesser,
                                string $material
    )
    {
        parent::__construct($name, $durchmesser, $material);
        $this->volumen = round(1/6 * pi() * $this->getDurchmesser()**3,0);

    }

    public function __toString(): string
    {
        return parent::__toString() . " Volumen: " . $this->getVolumen();
    }

}