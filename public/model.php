<?php

// Model
function addContact(&$contacts, $name, $number)
{
    $contacts[] = [
        'name' => $name,
        'number' => $number,
    ];
}



function searchContact($contacts, $name)
{
    $matches = [];
    foreach ($contacts as $contact) {
        if (strpos($contact['name'], $name) !== false) {
            $matches[] = $contact;
        }
    }
    return $matches;
}
function deleteContacts(&$contacts, $name)
{
    foreach ($contacts as $index => $contact) {
        if (strpos($contact['name'], $name) !== false) {
            unset($contacts[$index]);
        }
    }
}

?>