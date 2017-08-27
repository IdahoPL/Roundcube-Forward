<?php

/* Author: Łukasz Wąsikowski */

$labels = array();
$labels['forward'] = 'Przekazywanie';
$labels['forwardforwards'] = 'Adresy docelowe (oddzielone przecinkami, średnikami lub nowymi liniami) \n np. email@email.com,email2@email2.com';
$labels['forwardkeepcopies'] = 'Zachowaj kopię oryginalnej wiadomości';

$messages = array();
$messages['forwardinvalidforwards'] = 'Adres e-mail jest niepoprawny';
$messages['forwardnovalidforwards'] = 'Brak poprawnego adresu docelowego';
$messages['forwardsuccessfullysaved'] = 'Lista przekazywania została zapisana';
$messages['forwarddriverconnecterror'] = 'Błąd połączenia z bazą danych';
$messages['forwarddriverprocesserror'] = 'Błąd zapytania do bazy danych';
$messages['forwardinternalerror'] = 'Błąd odczytu z bazy danych';

?>
