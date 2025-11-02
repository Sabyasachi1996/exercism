<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizza_quantity,$person_per_pizza)
    {
        return $pizza_quantity * ((20 * $person_per_pizza) + 200);
    }

    public function calculateSauceRequirement($pizza_quantity,$can_capacity)
    {
        return ceil(($pizza_quantity * 125)/$can_capacity);
    }

    public function calculateCheeseCubeCoverage($cheese_dimension,$thickness,$pizza_diameter)
    {
        return floor(($cheese_dimension**3) / ($thickness * M_PI * $pizza_diameter));
    }

    public function calculateLeftOverSlices($pizza_quantity,$friend_quantity)
    {
        return ((8 * $pizza_quantity)%$friend_quantity);
    }
}
