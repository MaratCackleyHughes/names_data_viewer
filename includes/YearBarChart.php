<?php
class YearBarChart extends BarChart
{
    function getValue($point)
    {
        return 100 * $point->getCount() / $point->getTotal();
    }

    function getLabel($point)
    {
        return $point->getName();
    }

    function getTitle($point)
    {
        return $point->getName() . ": " . $point->getCount();
    }

    function getAnchor($point)
    {
        return 'name.php?' . NAME_KEY . '=' . $point->getName() . '&' . GENDER_KEY . '=' . $point->getGender();
    }
}