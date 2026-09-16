<?php
require_once "../lib/database.php";
$config = require "../conf/config.php";
$pdo = connect_db();

$json = file_get_contents("php://input");
$payload = json_decode($json, true);
error_log(print_r($payload, true));
function required_field($payload, $key) {
    if(isset($payload[$key]) && (!is_array($payload[$key]) || count($payload[$key]) > 0)) {
        return $payload[$key];
    } else {
        error_log('expected ' . $key);
        error_log($payload[$key]);
        http_response_code(400);
        exit;
    }
}
$sql = <<<SQL
    INSERT INTO signup
        (
            for_date,
            first_name,
            last_name,
            email,
            phone,
            pronouns,
            dietary_needs,
            volunteer_selection,
            comments
        )
    VALUES
        (
            :for_date,
            :first_name,
            :last_name,
            :email,
            :phone,
            :pronouns,
            :dietary_needs,
            :volunteer_selection,
            :comments
        )
SQL;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':for_date' => $config['next_dinner_date'],
    ':first_name' => required_field($payload, 'field-first-name'),
    ':last_name' => required_field($payload, 'field-last-name'),
    ':email' => required_field($payload, 'field-email'),
    ':phone' => required_field($payload, 'field-phone-number'),
    ':pronouns' => implode(', ', required_field($payload, 'field-pronouns')),
    ':dietary_needs' => implode(', ', required_field($payload, 'field-dietary-needs')),
    ':volunteer_selection' => implode(', ', required_field($payload, 'field-volunteer')),
    ':comments' => $payload['field-comments']
]);
?>