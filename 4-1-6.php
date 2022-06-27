<?php

    //税金計算クラス
    class TaxClass {
        public $TaxEx = 0;
        public $TaxIn = 0;
        public $TaxRate = 0.1;
        
        function InputPrice($ItemPrice) {
            $this->TaxEx = $ItemPrice;
            $this->TaxIn = $ItemPrice*($this->TaxRate+1.0);
        }
        
        function GetTaxEx() {
            echo "税抜".$this->TaxEx."円です。" . PHP_EOL;
        }
        
        function GetTaxIn() {
            echo "税込".$this->TaxIn."円です。" . PHP_EOL;
        }
    }
    
    //本の値段
    $Book = new TaxClass();
    $Book->InputPrice(200);
    $Book->GetTaxEx();
    $Book->GetTaxIn();

?>