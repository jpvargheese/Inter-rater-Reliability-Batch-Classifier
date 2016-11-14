<?php echo doctype("html5") ?>
<html lang="en">
    <head>
        <title>IRR</title>
        <meta charset="utf-8">

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
    </head>
    <body id ="<?php
    
    echo  $this->uri->segment(2);
    ?>">
        <div id="container">

            <div id="title">
                <h2> Inter rater reliability batch classifier</h2>
            </div>
<!--            <div id="status"><?php echo "<p>". $this->session->userdata('username')." logged on</p>"; ?></div>-->

