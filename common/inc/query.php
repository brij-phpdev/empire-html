<?php

// get list of services..


//// get list of agents...
//$servicetable_sql = "SELECT * FROM `servicetable`";
//if ($servicetable_res = mysqli_query($link, $servicetable_sql)) { 
//    if (mysqli_num_rows($servicetable_res) > 0) { 
//        echo "<table>"; 
//        echo "<tr>"; 
//        echo "<th>Firstname</th>"; 
//        echo "<th>Lastname</th>"; 
//        echo "<th>age</th>"; 
//        echo "</tr>"; 
//        while ($servicetable_row = mysqli_fetch_array($servicetable_res)) { 
//            echo "<tr>"; 
//            echo "<td>".$row['agentName']."</td>"; 
//            echo "<td>".$row['Lastname']."</td>"; 
//            echo "<td>".$row['Age']."</td>"; 
//            echo "</tr>"; 
//        } 
//        echo "</table>"; 
//        mysqli_free_result($res); 
//    } 
//    else { 
//        echo "No matching records are found."; 
//    } 
//} 
//else { 
//    echo "ERROR: Could not able to execute $sql. "
//                                .mysqli_error($link); 
//} 



//                //CREATE TABLE `ps_fast2sms` (`id` INT NOT NULL AUTO_INCREMENT , `mobile` VARCHAR(15) NULL , `sent_otp` VARCHAR(8) NULL , `shop_id` INT(11) NULL DEFAULT '0' , `ip_address` VARCHAR(30) NULL , `user_agent` VARCHAR(100) NULL , `api_response` LONGTEXT NULL , `error` VARCHAR(255) NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;