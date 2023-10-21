<?php
//Path to run <?php
//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php 
//Butuh Framework phpunit
use PHPUnit\Framework\TestCase;

//Class yang mau di test.
require_once "Wordcount.php";

//Class untuk run testing.
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        //kita pakai class yang mau di test.
        $Wc = new WordCount();

        //kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Joko"; //4 Kata
        $Wordcount = $Wc->countWords($TestSentence);

        // $this adalaha variabel petunjuk. assertEquals digunakan untuk mengecek, apakah isi dari $Wordcount adalah 4 kata 
        $this->assertEquals(4, $Wordcount);   
    }
    
}
?>