



<?php

echo form_open('irr/login_check');

echo validation_errors();
echo"<p></p>";
echo "<p> Username:  ";
echo form_input('username', $this->input->post('username'));
echo "</p>";

echo "<p> Password :  ";
echo form_password('password');
echo "</p>";

echo "<p>";
echo form_submit('login_submit', 'Login');
echo "</p>";
echo form_close();
?>

