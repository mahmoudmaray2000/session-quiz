<?php
class Person {
    protected $name;
    protected $address;

    public function __construct ($name, $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getAddress() : string {
        return $this->address;
    }

    public function setAddress($address) : void {
        $this->address = $address;
    }

    public function toString() {
        return "Person {$this->name} , Address {$this->address}";
    }
}


class Student extends Person{
    private $program;
    private $year;
    private $fee;

    public function __construct ($name, $address, $program, $year, $fee){
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram() : string {
        return $this->program;
    }

    public function setProgram($program) : void {
         $this->program = $program;
    }

    public function getYear() : int {
        return $this->year;
    }

    public function setYear($year) : void {
         $this->year = $year;
    }

    public function getFee() : float {
        return $this->fee;
    }

    public function setFee($fee) : void {
         $this->fee = $fee;
    }

    public function toString() {
        return parent::toString() . " , Program {$this->program} , Year {$this->year} , Fee {$this->fee}";
    }
}


$student = new Student("Mahmoud", "Mansoura", "CS", 4, 200);

echo $student->toString();
?>

> Mahmoud Maray:
<?php
abstract class Shape {
    protected $color;
    protected $filled;

    public function __construct($color, $filled){
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() : string {
       return $this->color;
    }

    public function setColor($color) : void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled($filled) : void {
         $this->filled = $filled;
    }

    public abstract function getArea();
    public abstract function getPerimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($color, $filled, $radius){
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}


class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($color, $filled, $length, $width){
        parent::__construct($color, $filled);
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

?>

> Mahmoud Maray:
<?php
abstract class Shape {
    protected $color;
    protected $filled;

    public function __construct($color, $filled){
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() : string {
       return $this->color;
    }

    public function setColor($color) : void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled($filled) : void {
         $this->filled = $filled;
    }

    public abstract function getArea();
    public abstract function getPerimeter();
}

class Circle extends Shape {
    private $radius;

    public function __construct($color, $filled, $radius){
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}


class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($color, $filled, $length, $width){
        parent::__construct($color, $filled);
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

class Square extends Rectangle {
    private $side;

    public function __construct($color, $filled, $side){
        parent::__construct($color, $filled, $side, $side);
        $this->side = $side;
    }

    public function getSide() {
        return $this->side;
    }

    public function setSide($side) {
        $this->side = $side;
        $this->setLength($side); // Set both length and width to the same value
        $this->setWidth($side);
    }
}


?>
