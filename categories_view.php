<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//print_r($status);

$category = array('F', 'PF', 'FF', 'Fs', 'PFs', 'FFs', 'As', 'FUN', 'INC', 'SUP', 'OO', 'TNO');
$label = array('Friend present', 'Potential friend present','Facilitator friend present',
        'Friends present', 'Potential friends present', 'Facilitator friends present', 'Acquaintances present',
    'Fun','Incentive','Support','Observe only','Try no obligation');

echo "<div id='category_instructions'>
    <p>Please choose a category below to begin classifying. This will load a batch of 10 responses which 
    need to be classified before proceeding to another category / batch of responses.</p>
    <table>
        <tr><th> Category</th> <th>Status</th></tr> ";
//print_r($status);


for($i = 0;$i < sizeof($category);$i++ ){
    echo "<tr><td><a href='".base_url()."irr/classifierAll/".$category[$i]."'>".$label[$i]."</a></td>";
    echo "<td>".$status[$i]."</td></tr>";
    
}

?>


        
    </table>
    
</div>