<?php
    session_name('Global');
    session_id('pgbl');
    require 'src/login/connect.php';   
    $query = "CALL get_roleNames()";
    $result= $conn->query($query);
    if (!$result){
        echo "<script type='text/javascript'>alert('failed-lista-roles')</script>";
    } else{
        if ($result->num_rows > 0){
            $i = 0;
            $j = 0;
            while($row = $result->fetch_assoc()){
                if ($row['tipos'] == 1){
                    $permanentRoles[$i] = $row['roles'];
                    $permanentId[$i] = $row['id'];
                    $i ++;
                } else{
                    $temporaryRoles[$j] = $row['roles'];
                    $temporaryId[$j] = $row['id'];
                    $j++;
                }                
            }
        }
    }

