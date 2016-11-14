<?php

class users_model extends CI_Model {
    //simple enough method to check whether there is an entry in the database
    //matching the supplied form details passed from the form in the view, back
    //to the controller and from the controller to the model
    public function allow_login() {
        //active records query, rather than mysql
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', [REPLACE WITH YOUR CHOICE OF ENCRYPTION]($this->input->post('password')));
        //run the query
        $query = $this->db->get('users');
        //if we get rows back then the user exists
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}

?>
