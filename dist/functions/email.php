<?php
// wp api custom endpoints
add_action('rest_api_init', 'rg_register_routes');
function rg_register_routes () {
  register_rest_route('rg-mail/v1', 'contact', array(
    'methods' => WP_REST_Server::CREATABLE,
    'callback' => 'rg_serve_route'
  ));
}
// function for handling post request to new api route
function rg_serve_route () {
  require('wp-load.php');
  $data = json_decode(file_get_contents("php://input"), true);
  $from = 'info@levineorthodontics.com';
  // $to = 'matt@roostergrin.com';
  $to = 'info@levineorthodontics.com';
  $subject = 'Levine Orthodontics Form Submission';
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $message = '<html><body>';
  $message .= '<p><h4><strong>Form Submission by: </strong></h4>' . $data['fullname'] . '</p>';
  $message .= '<p><h4><strong>Email: </strong></h4>' . $data['email'] . '</p>';
  $message .= '<p><h4><strong>Phone: </strong></h4>' . $data['phone'] . '</p>';
  $message .= '<p><h4><strong>Message:</strong></h4> ' . $data['message'] . '</p>';
  $message .= '</body></html>';
  $sent_message = wp_mail($to, $subject, $message, $headers);
  if ($sent_message) {
    echo 'Email has been received!';
  } else {
    echo 'Could not send email.';
  }
}
