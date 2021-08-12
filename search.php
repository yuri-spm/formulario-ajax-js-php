<?php

require ('Core/Helper.php');


$search = show();
//  echo json_encode($search);


$i =1;
 if(!empty($search)){
    foreach($search as $user){
?>  

    <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $user->name; ?></td>
    <td><?php echo $user->phone; ?></td>
    <td><?php echo $user->email; ?></td>
    </tr>

    <?php
  }
}