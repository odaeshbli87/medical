<?php
    function getDataFromTable($TableName ,$ColumnsName ,$Condition){
        if($TableName == ""){
            echo 'يرجى كتابة اسم الجدول';
            return;
        }
        if($ColumnsName !=""){
            $q="SELECT $ColumnsName FROM $TableName";
        }
        if($ColumnsName !="" & $Condition !=""){
            $q="SELECT $ColumnsName FROM $TableName WHERE $Condition";
        }

        if($Condition == ""){
            $q="SELECT * FROM $TableName";
        }else{
            $q="SELECT * FROM $TableName WHERE $Condition";
        }
    
    }   
?>