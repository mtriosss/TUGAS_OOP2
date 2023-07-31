<?php
    class Bantal 
    {
        public $warna;
        protected $merk;
        private $bahan;
    
        function __construct($merk, $bahan) {
            $this->merk = $merk;
            $this->bahan = $bahan;
        }
    
        public function __destruct() {
            echo "Bantal ini berwarna {$this->warna}, bermerk {$this->merk}, dan berbahan {$this->bahan}. <br>";
        }
    
        function set_Bantal($warna){
            $this->warna = $warna;
        }
    
        function get_Bantal()
        {
            return "Bantal empuk dan nyaman";
        }
    
        public function all(){
            echo "<br> Warna : {$this->warna}<br> Merk : {$this->merk}<br> Bahan : {$this->bahan} <br>";
        }
    }
    
    class Guling extends Bantal 
    {
        private $ukuran;
    
        function __construct($merk, $bahan){
            parent::__construct($merk, $bahan);
        }
    
        function __destruct(){
            echo "Guling ini berwarna {$this->warna}, bermerk {$this->merk},serta berukuran {$this->ukuran}. <br>";
        }
    
        function set_Guling($ukuran, $warna){
            $this->ukuran = $ukuran;
            $this->warna = $warna;
        }
    
        function get_Guling(){
            return "Guling lembut dan berukuran besar";
        }
    }
    
    $bantal1 = new Bantal("Canon", "Feather atau Bulu");
    $bantal1->set_Bantal("Merah Jambu");
    echo "{$bantal1->get_Bantal()}";
    $bantal1->all();
    
    echo "<br>";
    
    $guling1 = new Guling("Superland", "Feather atau Bulu <br>");
    $guling1->set_Guling("Sedang", "Biru");
    echo "{$guling1->get_Guling()}";
    $guling1->all();
?>