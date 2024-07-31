<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     report_securityaudit
 * @copyright   2024, when2update.com <consultations@when2update.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Raport audytu zabezpieczeń';
$string['securityaudit'] = 'Audyt zabezpieczeń';
$string['checkenablewebservices'] = 'Aktywne protokoły usług sieciowych';
$string['checkenablewebserviceserror'] = 'Włączone usługi sieciowe. Jeśli niepotrzebne, to należy je wyłączyć.';
$string['checkenablewebserviceshok'] = 'Usługi sieciowe są wyłączone, co zwiększa bezpieczeństwo.';
$string['checkenablewebservicesdetails'] = 'Do zweryfikowania możesz sprawdzić <a href="{$a}">Aktywne protokoły usług sieciowych</a>.';
$string['checkcookiesecure'] = 'Tylko bezpieczne ciasteczka';
$string['checkcookiesecureerror'] = 'Jeśli serwer akceptuje tylko połączenia HTTPS, zaleca się włączyć wysyłanie bezpiecznych ciasteczek.';
$string['checkcookiesecurehok'] = 'Włączone są tylko bezpieczne ciasteczka.';
$string['checkcookiesecuredetails'] = 'Zgodnie z informacjami z ustawień.';
$string['checkdebug'] = 'Komunikaty usuwania błędów';
$string['checkdebugerror'] = 'Ustawiona jest inna opcja niż <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkdebughok'] = 'Ustawione na <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkdebugdetails'] = '';
$string['checkdebugdisplay'] = 'Wyświetlanie komunikatów błędów';
$string['checkdebugdisplayerror'] = 'Włączone wyświetlanie komunikatów błędów, które trafią na strony HTML.';
$string['checkdebugdisplayhok'] = 'Wyświetlanie komunikatów błędów jest wyłączone.';
$string['checkdebugdisplaydetails'] = '';
$string['checkpasswordexpiration'] = 'Włącz wygaśnięcie hasła dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationerror'] = 'Wymuś zmianę hasła po okreslonej liczbie dni od jego ostatniego zaktualizowania dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationhok'] = 'Wygaśnięcie hasła jest włączone.';
$string['checkpasswordexpirationdetails'] = '';
$string['checkminpasswordlength'] = 'Długość hasła';
$string['checkminpasswordlengtherror'] = 'Długość hasła wynosi {$a}, standardowe minimum wynosi 8 znaków.';
$string['checkminpasswordlengthhok'] = 'Długość hasła spełnia minimum.';
$string['checkminpasswordlengthdetails'] = '';
$string['checkguestloginbutton'] = 'Przycisk logowania jako gość';
$string['checkguestloginbuttonerror'] = 'Przycisk logowania jako gość na stronie logowania jest dostępny.';
$string['checkguestloginbuttonhok'] = 'Przycisk logowania jako gość jest ukryty.';
$string['checkguestloginbuttondetails'] = '';
$string['checkbackup_auto_active'] = 'Kopie zapasowe kursów';
$string['checkbackup_auto_activeerror'] = 'Nie są skonfigurowane żadne automatyczne ani ręczne kopie zapasowe kursów.';
$string['checkbackup_auto_activehok'] = 'Kopie zapasowe są włączone. Warto od czasu do czasu przejrzeć poprawność ich wykonywania.';
$string['checkbackup_auto_activedetails'] = '';
$string['checkvulnerabilities'] = 'Znane podatności';
$string['checkvulnerabilitieserror'] = 'Błąd odczytu wersji Moodle. Zgłoś autorowi wtyczki.';
$string['checkvulnerabilitiesnosupporterror'] = 'Ta wersja Moodle nie ma już wsparcia bezpieczeństwa, zalecana jest aktualizacja do nowszej wersji.';
$string['checkvulnerabilitiesfounderror'] = 'Znaleziono <span class="badge badge-danger">{$a}</span> podatności dla tej wersji Moodle.';
$string['checkvulnerabilitieshok'] = 'Na ten moment nie są zgłoszone żadne podatności dla tej wersji Moodle.';
$string['checkvulnerabilitiesdetails'] = '<h2>Znalezione podatności:</h2>';
$string['checkvulnerabilitieshunknown'] = 'Nie udało się nawiązać połączenia do serwera analizy.';
$string['vulnerabilitie'] = 'Podatność';
$string['cve'] = 'CVE';
$string['checkcron'] = 'Działanie Crona';
$string['checkcronerror'] = 'Cron nie działa prawidłowo.';
$string['checkcronhok'] = 'Cron działa.';
$string['checkcrondetails'] = '';
$string['btnbackas'] = 'Wróć do administracji serwisu';
$string['lastcheck'] = 'Ostatnie sprawdzenie:';
$string['logfailmodule'] = 'Liczba błędów z 7 dni';
$string['overallmodule'] = 'Ogólna ocena';
$string['envirolment'] = 'Środowisko uruchomieniowe LMS';
$string['accessoutside'] = 'Dane dostępne z zewnątrz';
$string['gdpr'] = 'RODO';
$string['security'] = 'Bezpieczeństwo';
$string['usersaccount'] = 'Konta użytkowników';
$string['backups'] = 'Kopie zapasowe';
$string['notassigned'] = 'Nieprzypisane';
$string['description'] = 'Opis';
$string['action'] = 'Akcje';
$string['status'] = 'Status';
$string['countfailed'] = 'Liczba zgłoszonych potencjalnych problemów';
$string['countsuccess'] = 'Liczba prawidłowych';
$string['nofail_title'] = 'Dobrze!';
$string['nofail_desc'] = 'Ten obszar nie zgłasza problemów.';
$string['critical'] = 'Krytyczne';
$string['critical_desc'] = 'Zajmij się nimi prędko!';
$string['moderate'] = 'Średnie';
$string['moderate_desc'] = 'Zapoznaj się i zdecyduj.';
$string['info'] = 'Informacje';
$string['info_desc'] = 'Sprawdź w wolnej chwili...';
$string['normal'] = 'Prawidłowe';
$string['normal_desc'] = 'Bardzo dobrze.';
$string['unknown'] = 'Nieznany';
$string['other'] = 'Reszta';
$string['quantity'] = 'Liczba';
$string['formlmswitaibtn'] = 'Zgłoś błąd / prośbę o pomoc / nową funkcjonalność';
$string['securityaudit:view'] = 'Pokaż raport audytu zabezpieczeń';
$string['vulnerabilities'] = 'Luki bezpieczeństwa w oprogramowaniu';
$string['checkvulnerabilities'] = 'Znane podatności';
$string['vulnerabilitie'] = 'Podatność';
$string['cve'] = 'CVE';

$string['checkvulnerabilities_moodle'] = 'Bezpieczeństwo Moodle';
$string['check_vuls_error_moodle'] = 'Błąd odczytu wersjie Moodle. Zgłoś do autora wtyczki.';
$string['check_vuls_nosupporterror_moodle'] = 'Ta wersja Moodle nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_founderror_moodle'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji Moodle.';
$string['check_vuls_ok_moodle'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji Moodle.';
$string['check_vuls_details_moodle'] = '<h2>Znaleziono luki:</h2>';
$string['check_vuls_unknown_moodle'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkvulnerabilities_php'] = 'Bezpieczeństwo PHP';
$string['check_vuls_error_php'] = 'Błąd odczytu wersjie PHP. Zgłoś do autora wtyczki.';
$string['check_vuls_nosupporterror_php'] = 'Ta wersja PHP nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_founderror_php'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji PHP.';
$string['check_vuls_ok_php'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji PHP.';
$string['check_vuls_unknown_php'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkvulnerabilities_db'] = 'Bezpieczeństwo bazy danych';
$string['check_vuls_error_db'] = 'Błąd odczytu wersjie bazy danych. Zgłoś do autora wtyczki.';
$string['check_vuls_nosupporterror_db'] = 'Ta wersja PHP nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_founderror_db'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji bazy danych.';
$string['check_vuls_ok_db'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji bazy danych.';
$string['check_vuls_unknown_db'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.com">when2update.com</a>';

$string['checkw2a'] = 'Zdalne sprawdzenie luk';
$string['checkw2a_desc'] = 'Sprawdzaj luki oprogramowania z wykorzystaniem <a href="https://czyaktualizowac.pl" target="_blank">czyaktualizowac.pl</a> (może wydłużyć czas wczytywanie raportu ze względu na komunikację z serwerem zewnętrznym).';
$string['setting'] = 'Ustawienia';