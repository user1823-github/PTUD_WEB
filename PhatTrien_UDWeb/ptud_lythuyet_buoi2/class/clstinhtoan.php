<?php
    class pheptinh {
        public function tinhtoan($a, $b, $toantu) {
            $ketqua= '';
            switch ($toantu) {
                case '+':
                    $ketqua = $a+$b;
                    break;
                case '-':
                    $ketqua = $a-$b;
                    break;
                case '*':
                    $ketqua = $a*$b;
                    break;
                case '/':
                    if($b != 0)
                    {
                        $ketqua = $a/$b;
                        break;
                    }else
                    {   
                        $ketqua = 'so b phai != 0';
                        break;
                    }
                default:
                    $ketqua = 'Toan tu khong hop le';
                    break;
            }
            return $ketqua;
        }
        
    }

?>