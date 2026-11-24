<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$input = json_decode(file_get_contents('php://input'), true);

if (!$input && isset($_POST['message'])) {
    $message = $_POST['message'];
} elseif (isset($input['message'])) {
    $message = $input['message'];
} else {
    echo json_encode(array("status" => "error", "reply" => "Please provide a message."));
    exit();
}

$message = strtolower(trim($message));
$reply = "I'm sorry, I didn't quite understand that. You can ask me about our services, booking an appointment, or our contact information.";

// Basic Keyword Matching
if (strpos($message, 'hello') !== false || strpos($message, 'hi') !== false || strpos($message, 'hey') !== false) {
    $reply = "Hello! Welcome to Xcel Hair Salon. How can I assist you today?";
} elseif (strpos($message, 'book') !== false || strpos($message, 'appointment') !== false) {
    $reply = "You can easily book an appointment by logging into your customer account and navigating to the booking section.";
} elseif (strpos($message, 'service') !== false || strpos($message, 'haircut') !== false || strpos($message, 'color') !== false) {
    $reply = "We offer a variety of services including haircuts, styling, coloring, and treatments. Please login to see our full list of services and prices.";
} elseif (strpos($message, 'contact') !== false || strpos($message, 'where') !== false || strpos($message, 'location') !== false || strpos($message, 'address') !== false) {
    $reply = "Xcel Hair Salon is located at Poornima University, Vidhani, Jaipur. You can also reach us via the Contact Us page.";
} elseif (strpos($message, 'time') !== false || strpos($message, 'hour') !== false || strpos($message, 'open') !== false) {
    $reply = "Our barbers set their own slots. You can check available time slots for your preferred barber on our booking page.";
} elseif (strpos($message, 'thank') !== false) {
    $reply = "You're welcome! Let me know if you need anything else.";
} elseif (strpos($message, 'price') !== false || strpos($message, 'cost') !== false) {
    $reply = "Prices vary depending on the service and the barber. Please check the services page after logging in for detailed pricing.";
}

$response = array(
    "status" => "success",
    "reply" => $reply
);

echo json_encode($response);
?>
