<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Классы и объекты</title>
</head>

<body>


    <?php
    class Animal
    {

        public $вес, $возраст, $окрас;

        public function __construct($weight, $age, $color)
        {
            $this->вес = $weight;
            $this->возраст = $age;
            $this->окрас = $color;
        }
    }

    class Lion extends Animal
    {
        public $когти;

        public function __construct($weight, $age, $color, $claw)
        {
            parent::__construct($weight, $age, $color);
            $this->когти = $claw;
        }

        public function displayInfo()
        {
            return "Максимальный вес львов - {$this->вес} кг, 
       средний  возраст - {$this->возраст} лет,
         шерсть имеет {$this->окрас} цвет, 
         когти взрослого льва могут достигать в длину {$this->когти} ";
        }
    }

    $lion = new Lion(400, 20, 'рыжий', '7 см');



    class Rubbit extends Animal
    {
        public $уши;

        public function __construct($weight, $age, $color, $ears)
        {
            parent::__construct($weight, $age, $color);
            $this->уши = $ears;
        }

        public function displayInfo()
        {
            return "Максимальный вес кроликов - {$this->вес} кг, 
       средний  возраст - {$this->возраст} лет,
         шерсть имеет {$this->окрас}, cамые длинные уши у кроликов равны почти {$this->уши} ";
        }
    }


    $rab = new Rubbit(80, 5, 'серый', '80 см');

    class Wolf extends Animal
    {
        public $глаза;

        public function __construct($weight, $age, $color, $eyes)
        {
            parent::__construct($weight, $age, $color);
            $this->глаза = $eyes;
        }

        public function displayInfo()
        {
            return  "Максимальный вес волков - {$this->вес} кг, 
       средний  возраст - {$this->возраст} лет,
         шерсть имеет {$this->окрас}, 
           волчата всегда рождаются с {$this->глаза} глазами ";
        }
    }

    $wolf = new Wolf(70, 6, 'серый', 'голубыми');
    ?>

    <div class="items">
        <h2>Animals</h2>
        <div class="item">
            <p><?php echo  $lion->displayInfo(); ?></p>
            <p><?php echo $rab->displayInfo(); ?></p>
            <p><?php echo $wolf->displayInfo(); ?></p>
        </div>
    </div>

</body>

</html>