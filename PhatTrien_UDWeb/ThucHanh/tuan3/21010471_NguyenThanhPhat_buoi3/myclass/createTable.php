<?php
    class table {
        public function taoBang($rows)
        {   
            echo '
                <form id="form1" name="form1" method="post">
                    <table width="950" border="1" align="center">
                    <tbody>
                        <tr class="tieude">
                        <td width="145" align="center"><strong>STT</strong></td>
                        <td width="299" align="center"><strong>Loại CPU</strong></td>
                        <td width="247" align="center"><strong>Thông Số Kỹ Thuật</strong></td>
                        <td width="231" align="center"><strong>Giá Thành</strong></td>
                        </tr>';
            $count = 1;
            for ($i=0; $i < $rows; $i++) { 
                if($i%2==0)
                {
                    echo '
                        <tr class="chanle">
                            <td align="center"><strong>'.$count.'</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center">&nbsp;</td>
                        </tr>  
                    ';
                }else
                {
                    echo '
                        <tr>
                            <td align="center"><strong>'.$count.'</strong></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="center">&nbsp;</td>
                        </tr>
                    '; 
                }
                echo '      </tbody>
                        </table>
                    </form>'; 
                
            }
        }
        
    }

?>