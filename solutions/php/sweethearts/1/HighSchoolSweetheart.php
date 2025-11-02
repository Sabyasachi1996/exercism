<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return ucfirst($this->firstLetter($name)).".";
    }

    public function initials(string $name): string
    {
        $nameArray = explode(" ",trim($name));
        $init1 = $this->initial($nameArray[0]);
        $init2 = $this->initial($nameArray[1]);
        return "$init1 $init2";
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials_a = $this->initials($sweetheart_a);
        $initials_b = $this->initials($sweetheart_b);
        return <<<EOD
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $initials_a  +  $initials_b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
EOD;
    }
}
