<?php
class APC {
    protected $sysvars;
    protected $uservars;
    protected $tempvars;

    public function __construct(){
        define('APC_VERSION','1.0.0.0');
        define('APC_VENDOR','fr.danielvalat');
    }
    public function setLocal($var,$value){
        $this->uservars[$var] = $value;
    }
    public function getLocal($var,$fatal = true){
        if(!isset($this->uservars[$var])){
            if($fatal = true){ die('Fatal: var '.htmlentities($var).' is not set'); }
            return false;
        }
        return $this->uservars[$var];
    }
}
?>