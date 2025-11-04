<?php
include './Size.php';
include './Position.php';
class ProgramWindow
{
    public $x=null;
    public $y=null;
    public $width=null;
    public $height=null;
    public function __construct(){
        $this->x = 0;
        $this->y = 0;
        $this->width = 800;
        $this->height = 600;
    }
    public function resize(Size $size){
        $this->width = $size->width;
        $this->height = $size->height;
    }
    public function move(Position $position){
        $this->x = $position->x;
        $this->y = $position->y;
    }
}
