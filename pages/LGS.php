<?php
 $firstSub = $Sec->post("subVars");
 $secSubMat = $Sec->post("subMat");
 if(!empty($firstSub) || !empty($secSubMat)){
            if(!empty($secSubMat)){
                
                $des->show_submited_Mat($Sec->post("n"), $Sec->post("n"), 1);
                $des->show_submited_Mat($Sec->post("n"), 1, 2);
                echo "<span class='Loesungsspan'>Der Lösungsvektor heißt</span>";
                echo "<div class='Loesungsdiv'>";
                $des->show(
                            $mat->LGS(
                                $des->ret_submited_Mat($Sec->post("n"), $Sec->post("n"), 1),
                                $des->ret_submited_Mat($Sec->post("n"), 1, 2)
                            )
                        );
                echo "</div>";
            }else{
                echo 
                "<form method='POST'>";
                $des->get_area($Sec->post("n§1"), $Sec->post("n§1"), 1);
                $des->get_area($Sec->post("n§1"), 1, 2);
                $des->hidden("n", $Sec->post("n§1"));
                $des->submit("subMat");
                echo "</form>";
            }
        }else{
            echo "Wie viel Variablen gibts ? ";
            echo 
            "<form method='POST'>";
                $des->select_box(1);
                $des->submit("subVars");
            echo "</form>";
        }
?>