<?php
/**
 * Created by PhpStorm.
 * User: Florian Bogendorfer
 */

/**
 * Interface BallInterface
 */

interface BallInterface
{
    /**
     * @return float
     */
    public function getVolumen(): float;

    public function __toString(): string;

}