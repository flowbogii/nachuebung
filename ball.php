<?php
/**
 * Created by PhpStorm.
 * User: Florian Bogendorfer
 */

/**
 * Class ball
 */

abstract class ball
{

    private $name;
    private $durchmesser;
    private $material;

    /**
     * ball constructor.
     * @param string $name
     * @param float $durchmesser
     * @param string $material
     */
    public function __construct(string $name, float $durchmesser, string $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getDurchmesser(): float
    {
        return $this->durchmesser;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    public function __toString()
    {
        return "Name: " . $this->getName() .
            "<br>Material: " . $this->getMaterial() .
            "<br>Durchmesser :" . $this->getDurchmesser() .
            "<br>";
    }

    public function printData(string $format){


        switch ($format) {
            case "xml":

                echo "&ltball&gt<br>";
                echo "    &ltname&gt" . $this->getName() . "&lt/name&gt<br>";
                echo "    &ltdurchmesser&gt" . $this->getDurchmesser() . "&lt/durchmesser&gt<br>";
                echo "    &ltmaterial&gt" . $this->getMaterial() . "&lt/material&gt<br>";
                echo "    &ltvolumen&gt" . $this->getVolumen() . "&lt/volumen&gt<br>";
                echo "&lt/ball&gt<br>";

                break;
            case "json":
                echo "<br>{<br>";
                echo "\"Name\": \"" . $this->getName() . "\";<br>";
                echo "\"Durchmesser\": \"" . $this->getDurchmesser() . "\";<br>";
                echo "\"Material\": \"" . $this->getMaterial() . "\";<br>";
                echo "\"Volumen\": \"" . $this->getVolumen() . "\";<br>}";

                break;
            case "html":
                echo "<p>Name: " . $this->getName() . "</p>";
                echo "<p>Durchmesser: " . $this->getDurchmesser() . "</p>";
                echo "<p>Material: " . $this->getMaterial() . "</p>";
                echo "<p>Volumen: " . $this->getVolumen() . "</p>";
        }
    }
}