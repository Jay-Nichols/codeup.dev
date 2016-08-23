
<?php
// Middleware
function loadContacts()
{
    $content = trim(file_get_contents('contacts_2.txt'));
    $lines = explode("\n", $content);
    $contacts = [];
    foreach ($lines as $line) {
        $contact = explode('|', $line);
        addContact($contacts, $contact[0], $contact[1]);
    }
    return $contacts;
}
function saveContacts($contacts)
{
    $content = '';
    foreach ($contacts as $contact) {
        $content .= implode('|', $contact) . "\n";
    }
    file_put_contents('contacts_2.txt', $content);
}
?>