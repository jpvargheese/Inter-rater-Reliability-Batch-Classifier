<script type="text/javascript" src="<?php echo base_url() . "/js/classifier.js" ?>"></script>

<div id="scenario">
    
    
</div>
    
    
    <?php
//get data
echo form_open('irr/post_response');

foreach ($results as $row) {
    $id = $row->id;
    $response = $row->response;
    $rating = $row->rating;
    //echo $row->response;
}
$j = count($results);
$h = 2;
for ($i = 0; $i < $j; $i++) {
    //echo "<p>".$i."</p>";
    $id = ($results[$i]->id);
    //$response = ($results[$i]->response);
    //$rating = ($results[$i]->rating);
    //echo $j;
    
    //try to randomise
    $min = 0;
    $max = 9;
    $random = rand($min, $max);
    
    echo '<h3 id="responseid' . $i . '">Response: ' . $results[$i]->response . '</h3>';

    //form

    echo validation_errors();

    $attributesP = array(
        'name' => 'classification' . $i,
        'class' => 'classification' . $i,
        'id' => 'classificationP' . $i,
        'value' => 'proargument'
    );

    $attributesN = array(
        'name' => 'classification' . $i,
        'class' => 'classification' . $i,
        'id' => 'classificationN' . $i,
        'value' => 'neutral'
    );

    $attributesC = array(
        'name' => 'classification' . $i,
        'class' => 'classification' . $i,
        'id' => 'classificationC' . $i,
        'value' => 'counterargument'
    );

    echo '<div id="response_radio' . $i . '">';
    echo '<p>' . form_radio($attributesP) . 'proargument</p>';

    echo '<p>' . form_radio($attributesN) . 'neutral</p>';

    echo '<p>' . form_radio($attributesC) . 'counterargument</p>';
    echo '</div>';
}

echo '<p><input id="next" type="button" value="next"/></p>';
echo '<p><input id="previous" type="button" value="previous"/></p>';
echo '<p id="sub_class">' . form_submit('enter', 'submit classifications') . '</p>';
echo form_close();
?>