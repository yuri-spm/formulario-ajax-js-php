<?php

require ('Core/Helper.php');


$search = show();

if(!empty($search)){
    foreach($search as $user){
?> 

    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $user['name']; ?></td>
      <td><?php echo $user['telefone']; ?></td>
      <td><?php echo $user['email']; ?></td>
    </tr>

<?php
    }
}