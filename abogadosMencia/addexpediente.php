<?php
extract($_POST);
require_once("conexion.php");
$data = $cnx->prepare("INSERT INTO mencia_files (id,name,number,DNI,client,phone_number,location,email,date_in,date_out,date_solution,judged,attendants,helpers,witnesses,identification,evidence,documents,image,others,solution,pacts,appeals,extra_bill,total_bill,coments) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$data->bind_param("ssssssssssssssssssssssssss",$id,$name,$number,$DNI,$client,$phone_number,$location,$email,$date_in,$date_out,$date_solution,$judged,$attendants,$helpers,$witnesses,$identification,$evidence,$documents,$image,$others,$solution,$pacts,$appeals,$extra_bill,$total_bill,$coments);
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>







