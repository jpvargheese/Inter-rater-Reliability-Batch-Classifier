<script type="text/javascript" src="<?php echo base_url() . "/js/classifier.js" ?>"></script>
 
<!-- a more thorough description and commenting of this view to be uploaded later and this comment removed
     essentially this loads all responses with attributes and sets up the relevant ids to be used by jquery
     to retain the original index, while randomising the classification selection. This is very important
     to ensure responses are classified in a random order by each user !-->

<?php
//get data
echo form_open('irr/user_classification/');

foreach ($strategy as $row) {
    $thestrategy = $row->text;
}


echo '<input type="hidden" name="category" id="category" value="'.$category.'">';
//echo $category;


$min = 0;
$max = 9;
$randomIndex = array();

for ($j = 0; $j < 10; $j++) {

    $h = rand($min, $max);
   // print array_key_exists($h, $randomIndex);

    while (in_array($h, $randomIndex)) {

        $h = rand($min, $max);
    }

    $randomIndex[$j] = $h;
}


for ($l = 0; $l < 10; $l++) {
    $i = $randomIndex[$l];
      
      
?>

<?php
echo '<div id="scenario'.$i.'" class="scenario">
    <p>Assume you have been invited to attend a social event. This could involve activities such as going to the cinema, bar, restaurant, music or sporting event, club, community or association meeting.
There will be other people attending the event who you may not know personally. This includes the person who is inviting you. All attendees including yourself will have something in common such as age, profession, educational background, interests etc. </p></div>';


echo '<div class="strategy" id="strategy'. $i . '"><h3> Strategy:" '. $thestrategy. '"</h3></div>';

echo '<div class="attributes" id="attributes'.$i . '"><ul>
                                                        <li>Rating: ' . $results[$i]->rating . '</li>
                                                        <li>Age: ' . $results[$i]->age . '</li>
                                                        <li>Gender: ' . $results[$i]->gender . '</li>
                                                        <li>Agreeableness: ' . $results[$i]->agr . '</li>
                                                         <li>Extraversion: ' . $results[$i]->ext . '</li>
                                                          <li>Conscientiousness: ' . $results[$i]->con . '</li>
                                                           <li>Emotional stability: ' . $results[$i]->es . '</li>
                                                               <li>Openness to experience: ' . $results[$i]->oe . '</li>
                                                                  <li>Participant type: Target </li>
</ul></div>';



echo '<div class="response" id="responseid'. $i .'"> <h3>Response: "'.$results[$i]->response.'" </h3></div>';

?>

<?php
//form

echo validation_errors();

$attributesP = array(
    'name' => 'classification' . $i,
    'class' => 'classificationP',
    'id' => 'classificationP' . $i,
    'value' => 'proargument'
);

$attributesN = array(
    'name' => 'classification' . $i,
    'class' => 'classificationN',
    'id' => 'classificationN' . $i,
    'value' => 'neutral'
);

$attributesC = array(
    'name' => 'classification' . $i,
    'class' => 'classificationC',
    'id' => 'classificationC' . $i,
    'value' => 'counterargument'
);

echo '<div class="radio" id="response_radio'.$i.'">';


echo '<label>' . form_radio($attributesP) . 'proargument</label>';

echo '<label>' . form_radio($attributesN) . 'neutral</label>';

echo '<label>' . form_radio($attributesC) . 'counterargument</label>';
echo '</div>';
}
$strategiesIndex = $randomIndex;

echo '<script type="text/javascript">

var strategyIndex ="'.json_encode($strategiesIndex).'"</script>';// the original index is made accessible in js
                                                                // so the database is updated correctly on submission


echo' <div class="buttons">';

echo '<div class="previous"><input id="previous" "previous" type="button" value="previous"/></div>';
echo '<div class="next"><input id="next" type="button" value="next"/></div>';
echo '<p id="sub_class"><id="sub_class">' . form_submit('enter', 'submit classifications') . '</p>';
echo "</div>";

echo form_close();
?>
