<?php 
class Student{

    private $name;
    private $age;
    private $class;

    public function __construct($name='',$age='',$class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}

$s = new Student('Sayful','14','8');
$s->name = "Sakibul \n";
echo $s->name;

/**
 * __get()
 * __set()
 * __isset()
 */
class MotorCycle{

    private $param;

    function __construct($displacement,$capacity,$mileage)
    {
        $this->param = [];
        $this->param['displacement'] = $displacement;
        $this->param['capacity'] = $capacity;
        $this->param['mileage'] = $mileage;
    }

    function __isset($name)
    {
        if(!isset($this->param[$name])){
            echo "{$name} is not found";
            return false;
        }
        return true;
    }

    function __unset($name)
    {
        print_r($this->param);
        unset($this->param[$name]);
        print_r($this->param);
    }

    function __call($name, $arguments)
    {
        if('run' == $name){
            if($arguments){
                echo "I am running at {$arguments[0]}";
            }else{      
                echo "I am running";
            }
        }
    }

    static function __callStatic($name, $arguments)
    {
        echo "Static Call";
    }

    function __get($name){
        echo $this->param[$name]; // $this->displacement
    }

    function __set($name, $value){
        echo $this->param[$name] = $value;
    }
}

$pulsur = new MotorCycle('150cc','24ltr','40kmph');
$pulsur->displacement;
if(isset($pulsur->tiresize)){
    echo $pulsur->tiresize;
}
unset($pulsur->mileage);
$pulsur->run('100kmph');
MotorCycle::wash();