<?php
    // Super class
class person {
    
    var $name;
        function set_name ($new_name){
            $this ->name = $new_name;
        }
        function get_name(){
            return $this-> $new_name;
        }

    var $religion;
        function set_religion ($new_religion){
            $this ->religion = $new_religion;
        }
        function get_religion(){
            return $this-> $new_religion;
        }

    var $age;
        function set_age($new_age){
            $this ->age = $new_age;
        }
        function get_age(){
            return $this ->age;
        }
    
}

    
?>

<?php
    $tomi = new person;
    $dafa = new person;
    $bayu = new person;

        $tomi ->set_name("tomi raharja");
        $dafa ->set_name("daffa yanu refandra");
        $bayu ->set_name("bayu skak");

        $tomi ->set_age("15");
        $dafa ->set_age("25");
        $bayu ->set_age("19");

        $tomi ->set_religion("katolik");
        $dafa ->set_religion("budha");
        $bayu ->set_religion("islam");

            echo "Nama lengkap :    ". $tomi ->name."        ". $dafa ->name."         ".$bayu ->name;
            echo "
";
            echo "Umur         :    "."    ".$tomi ->age."                      ".$dafa ->age."                    ".$bayu ->age;
            echo "
";  
            echo "Agama        :    "." ".$tomi ->religion."                   ".$dafa ->religion."                 ".$bayu ->religion;
?>