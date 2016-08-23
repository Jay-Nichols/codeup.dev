<?php 


// View
function longestNameLength($contacts)
{
    $longest = -1;
    foreach ($contacts as $contact) {
        $nameLength = strlen($contact['name']);
        if ($nameLength > $longest) {
            $longest = $nameLength;
        }
    }
    return $longest;
}
function longestPhoneNumber($contacts)
{
    $longest = -1;
    $max = 12; // Max length for phone numbers is 12, after format
    foreach ($contacts as $contact) {
        $numberLength = strlen($contact['number']);
        $formatLength = $numberLength == 7 ? 1 : 2;
        if ($numberLength + $formatLength > $longest) {
            $longest = $numberLength + $formatLength;
        }
        if ($longest === $max) {
            break;
        }
    }
    return $longest;
}
function formatNumber($number) {
    if (strlen($number) == 7) {
        return substr($number, 0, 3) . '-' . substr($number, 3);
    }
    if (strlen($number) == 10) {
        return substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6);
    }
    return $number;
}
function formatContacts($contacts)
{
    $nameLength = longestNameLength($contacts);
    $phoneLength = longestPhoneNumber($contacts);
    array_unshift($contacts, ['name' => 'Name', 'number' => 'Phone']);
    $table = '';
    foreach ($contacts as $contact) {
        $table .= '| '
            . str_pad($contact['name'], $nameLength) . ' | '
            . str_pad(formatNumber($contact['number']), $phoneLength) . " |\n";
    }
    return $table;
}

?>