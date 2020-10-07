<?php
    class User{
        public $name;
        public $surname;
        
        public function setName($value){
            $this->name = $value;
    }

        public function setSurname($value){
            $this->surname = $value;
}

        

    public function getData(){
        $data = <<<DATA
            Dane:<br>
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            
DATA;
        return $data;
    }
}

    // Dodaj do klasy możliwość dodania wieku oraz wzrostu
    // Dodaje metodę która umożliwia ustaweinie wszystkich składowych
    // Utwórz metodę która zwróci wszystkie dane w formacie:
       /* 
        Dane:
        Imię: ...
        Nazwisko: ...
        Wiek: ...lat
        Wzrost: ...cm
*/
    ?>
