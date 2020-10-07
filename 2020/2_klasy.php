<?php
    class User{
        public $name;
        public $surname;
        public $color;

        public function setName($value){
            $this->name = $value;
    }

        public function setSurname($value){
            $this->surname = $value;
}

        public function setColor($value){
            $this->color = $value;
    }

    public function getData(){
        $data = <<<DATA
            Dane:<br>
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Kolor: $this->color<br>
DATA;
        return $data;
    }
}

$user1 = new User();

$user1->setName("Anna");
$user1->setSurname("Nowak");
$user1->setColor("Czarny");
echo $user1->GetData();

// napisać metodę wyświetlającą dane w heredoc
// metode ustawiającą nazwisko oraz kolor
// napisać metodę która wyświetla wszystkie właściwości


    ?>
