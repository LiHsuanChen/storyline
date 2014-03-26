<?php 
    // Note that we have received a big $data array
    // $data contains all the products, 
    // Their respective versions that are active,
    // And the respective queries on each version

    //  Now the fun begins where we compile the view:
    //    First we declare view specific CSS and JS files inside $include
    //    Then send it to the respective views for appending to the DOM
    //    As usual, CSS to the header, JS to the footer.
    $include = array( 
        'top'       => '<link rel="stylesheet" href="/assets/css/main.css">',
        'bottom'    => '<script src="/assets/js/main.js"></script>'
    );
 
    $this->load->view('templates/header', $include);
?>

<div class="container">
    <h1>Roar</h1>
</div><!-- /container -->

<?php 
    $this->load->view('templates/footer', $include); 
?>



