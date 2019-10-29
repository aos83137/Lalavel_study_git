<?php
class TestClass{
    public $name = "";
    public $math = 0;
    public $english = 0;
    public $japanes = 0;

    public function printScore(): void
    {
        $sum = $this->$math + $this->$english + $this->$japanes;
        $average = $sum / 3;
        print($this->$name."의 합계: ".$this->$sum. " 평균 : ".$this->$average."<BR>");
    }
}