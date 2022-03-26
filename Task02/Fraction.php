<?php

/* Description of the Vector class */
class Vector
{
    private $xCord, $yCord, $zCord;

    /* Vector Class Constructor */
    public function __construct($xCord, $yCord, $zCord)
    {
        if ($this->isNumber($xCord) && $this->isNumber($yCord) && $this->isNumber($zCord)) {
            $this->xCord = $xCord;
            $this->yCord = $yCord;
            $this->zCord = $zCord;
        } else {
            echo 'Error: invalid value entered' . PHP_EOL;
        }
    }

    /* Checking for valid values */
    private function isNumber($string): bool
    {
        $string .= '';
        if ($string != '') {
            $chars = $string[0];
        } else {
            return false;
        }
        if (!(($chars >= '0' and $chars <= '9') or ($chars == '-'))) {
            return false;
        }
        $length_string = strlen($string);
        $flag_float = 0;
        for ($cycle_step = 1; $cycle_step < $length_string; $cycle_step++) {
            $chars = $string[$cycle_step];
            if ($chars >= '0' and $chars <= '9') {
                continue;
            } else {
                if ($chars == '.' or $chars == ',') {
                    $flag_float += 1;
                    if ($flag_float == 1) {
                        continue;
                    }
                }
                return false;
            }
        }

        return true;
    }

    /* Addition of vectors */
    public function addVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCord = $this->xCord + $vector1->xCord;
        $vector->yCord = $this->yCord + $vector1->yCord;
        $vector->zCord = $this->zCord + $vector1->zCord;

        return $vector;
    }

    /* Vector subtraction */
    public function subVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCord = $this->xCord - $vector1->xCord;
        $vector->yCord = $this->yCord - $vector1->yCord;
        $vector->zCord = $this->zCord - $vector1->zCord;

        return $vector;
    }

    /* Multiplying a vector by a number */
    public function product($number): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCord = $number * $this->xCord;
        $vector->yCord = $number * $this->yCord;
        $vector->zCord = $number * $this->zCord;

        return $vector;
    }

    /* Scalar product of vectors */
    public function scalarProduct(Vector $vector1)
    {
        return $this->xCord * $vector1->xCord + $this->yCord * $vector1->yCord + $this->zCord * $vector1->zCord;
    }

    /* Vector product of vectors */
    public function vectorProduct(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCord = (int)$this->yCord * (int)$vector1->zCord - (int)$this->zCord * (int)$vector1->yCord;
        $vector->yCord = -((int)$this->xCord * (int)$vector1->zCord - (int)$this->zCord * (int)$vector1->xCord);
        $vector->zCord = (int)$this->xCord * (int)$vector1->yCord - (int)$this->yCord * (int)$vector1->xCord;

        return $vector;
    }

    /* Symbolic representation of a vector */
    public function __toString()
    {
        return '(' . $this->xCord . ';' . $this->yCord . ';' . $this->zCord . ')';
    }
}
