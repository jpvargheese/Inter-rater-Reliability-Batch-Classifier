<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//this is the main controller for the inter rater reliability batch classifier
//this is version 1 and so included are comments for how the application can be extended
//and improved
class irr extends CI_Controller {

    //we always want the index call from a browser to trigger the home function
    public function index() {
        $this->home();
    }

    //The home function calls the login function, most likely redundant but these functions remain here for future expansion of the application
    //Ideally the home page would give more information about the app and overview of the research but this is the intial version only
    public function home() {
        $this->login();
    }

    //show the login page which is split across 3 views
    public function login() {
        $this->load->view('header_view');
        $this->load->view('login_view');
        $this->load->view('footer_view');
    }

    //This function will load the login view if the user is logged in
    public function loggedOn() {
        //check that user is logged in before displaying the logged on views
        //look in the session for is_logged_in 
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('header_view');
            //this call will be removed in future versions
            $this->load->view('title-links_view');
            $this->load->view('loggedOn_view');
            $this->load->view('footer_view');
        } else {
            //not logged in, show the restricted view
            redirect('irr/restricted');
        }
    }
    
    
    public function categories() {
        //currently viewing categories to be classified is restricted to only valid users
        //so just to be sure, we check again in the session if there are logged on
        if ($this->session->userdata('is_logged_in')) {
            //load the progress_model, which is required to pull the status of user classifications
            //completed so far, and then used to be loaded into the categories 'summary' view
            $this->load->model('progress_model');
            //with the model loaded we can now run the status_check() function within the model to get
            //the users classification progress so far
            $data['status'] = $this->progress_model->status_check();
            //load categories view, which is split across 3 views for future customisation and extension
            $this->load->view('header_view');
            //this call will be removed in future versions 
            $this->load->view('categories_link_view');
            //load the main body of the view with the returned data from status_check()
            $this->load->view('categories_view', $data);
            $this->load->view('footer_view');
        } else {
            redirect('irr/restricted');
        }
    }

    //this function will load a view with a link to the login page and notification
    //that users must be logged in to view categories and classify responses  
    public function restricted() {
        $this->load->view('header_view');
        $this->load->view('restricted_view');
        $this->load->view('footer_view');
    }

    //logout function, kill the session and redirect to the login page, since no home page exists
    //in this version
    public function logout() {
        $this->session->sess_destroy();
        redirect('irr/login');
    }

    public function login_check() {
        //set form validation rules using inbuilt codeigniter validation methods to remove white space,
        //prevent cross site request scripting (cookie hijacking etc.) 
        //and use a callback to run the validate credentials when this function has returned
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
        //again for the password field, set rules, encryption type and prevent cross site scripting, or at least attempt to
        $this->form_validation->set_rules('password', 'Password', 'required|[REPLACE WITH YOUR CHOICE OF ENCRYPTION]|trim|xss_clean');

        if ($this->form_validation->run()) {
            //create an array within the session data with username equal to the user and is_logged_on set to true / 1
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => 1
            );
            //initialise the session with the data array intialised above
            $this->session->set_userdata($data);
            //call the loggedOn function of this controller
            redirect('irr/loggedOn');
        } else {
            //form_validation returned false so just show the login_view
            $this->load->view('login_view');
        }
        //with the email previously entered in the email field of the login field
        echo $this->input->post('email');
    }

    public function validate_credentials() {
        //this will run from the callback in the function above
        //load the model so we can run the allow_loggin method
        $this->load->model('users_model');
        //return true if credentials are validated and user exists with correct password entered
        if ($this->users_model->allow_login()) {
            return true;
        } else {
            //invalid credentials so form validation will return false
            //this needs to be updated to include the app's css because currently this will
            //just display the raw form with the message of "incorrect ..."
            $this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
            return false;
        }
    }

    public function classifier() {
        //maybe paranoid but we always want to check the user is logged in because
        //they could be testing the controller methods and routes at the URL of the app etc.
        if ($this->session->userdata('is_logged_in')) {
            //are they logged in?
            $this->load->model('response_select');
            //get a response to be classified
            $data['results'] = $this->response_select->get_a_response();

            $this->load->view('header_view');
            $this->load->view('title-links_view');
            //load the view with the response
            $this->load->view('classifer_view', $data);
            $this->load->view('footer_view');
        } else {
            //they can't view responses and classify them without being logged in
            redirect('irr/restricted');
        }
    }

    
    //name is slightly confusing as this is the individual category classifier
    //it was named this way to indicate that multiple models and related functions are called
    //to provide as much data as possible to the user to assist with the classification task
    public function classifierAll() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->model('response_select');
            //this is a cheap way of checking what category they have selected
            //we use the third segment of the URL and we can use this to determine
            //what category has been selected to be classified and then pull
            //the relevant responses from the database
            $category = $this->uri->segment(3);
            //check what category has been selected and load appropriate strategy and responses
            
                $this->load->model('response_select');
                //we need to get the category so we can load the relevant strategy associated with the text
                //to be classified
                $data['category'] = $category;
                //used the category to get the right strategy
                $data['strategy'] = $this->response_select->get_strategy($category);
                //get the response to be classifed and attributes
                //the attributes will be may help the user to determine their classification
                //and so since we have the data, this may as well be included
                //further more, it may yield additional insights during the analysis
                $data['results'] = $this->response_select->get_response($category);
                $this->load->view('header_view');
                //we remove the links because ideally we want them to complete one batch at a time
                //currently this is not a problem, even if the user moves to another page using browser
                //controls, however future versions should address this more thoroughly perhaps with an alert
                //informing the user that a batch has not been completed and further iterations, ensuring a more flexible
                //classification user experience i.e. editing previous classifications
                //this feature was not implemented in the current version as it would invalidate the 
                //intra-class-correlation test assumptions (statistical analysis)
                //$this->load->view('title-links_view'); //left here as a reminder for future version updates
                //load body with the returned data from the model
                $this->load->view('all_classifier_view', $data);
                $this->load->view('footer_view');
            
        } else {
            //not logged and so...
            redirect('irr/restricted');
        }
    }

    public function user_classification() {
        //again, we want to enter the classification in the database, so we hope they are 
        //logged on before we do so
        if ($this->session->userdata('is_logged_in')) {
            //load the model
            $this->load->model('classifier_model');
            //run the add_user_classification function from the model to update the database
            //with the users classification
            $this->classifier_model->add_user_classification();
            //go back to the progress page
            redirect('irr/categories');
            
            
        } else {
            //not logged in so guess what?
            redirect('irr/restricted');
        }
    }

    

}
