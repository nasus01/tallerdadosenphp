<?php

class Dados{


private $valorSerie;

public function _construct(){

    $this->valorSerie =0;
}

public function getValorSerie(){
    return $this->valorSerie;
}
public function setValorSerie($valor){
    $this-> valorSerie = $valor;
    
}
    public function ejedados(){


        $al1 = rand(1,10);
        $al2 = rand(1,10);
        $al3 = rand(1,10);

       

        if ($al1 <> 6 and $al2 <> 6 and $al3 <> 6)  {
            
            echo  " ganaste 10";
        }else {
            if ($al1 = $al2 and $al2 = $al1 and $al3 <> $al1 and $al3 <> $al2){
                echo  "<br> ganaste 5";

            }else{
                if ($al1 = 6 and $al2v= 6 and $al3 = 6){
                    echo  "<br> ganaste 20";

                }
            }

        }
            



    }
  






}





?>