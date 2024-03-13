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
 * @copyright   2024, LMSwithAI <contact@lmswithai.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Raport audyt zabezpieczeń';
$string['securityaudit'] = 'Audyt zabezpieczeń';

// New security check.
// enablewebservices.
$string['checkenablewebservices'] = 'Aktywne protokoły usług sieciowych';
$string['checkenablewebserviceserror'] = 'Włączone usługi sieciowe. Jeśli niepotrzebne to wyłączyć.';
$string['checkenablewebserviceshok'] = 'Usługi sieciowe są wyłaczone, co zwiększa bezpieczeństwo.';
$string['checkenablewebservicesdetails'] = 'Do zweryfikowania możesz sprawdzić <a href="{$a}">Aktywne protokoły usług sieciowych</a>.';

// cookiesecure.
$string['checkcookiesecure'] = 'Tylko bezpieczne ciasteczka';
$string['checkcookiesecureerror'] = 'Jeśli serwer akceptuje tylko połączenia https: zaleca się włączyć wysyłanie bezpiecznych ciasteczek.';
$string['checkcookiesecurehok'] = 'Włączone są tylko bezpieczne ciasteczka';
$string['checkcookiesecuredetails'] = 'Zgodnie z informacjami z ustawień.';

// debug.
$string['checkdebug'] = 'Komunikaty usuwania błędów';
$string['checkdebugerror'] = 'Ustawiona jest inna opcja niż <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkdebughok'] = 'Ustawione na <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkdebugdetails'] = '';

// debugdisplay.
$string['checkdebugdisplay'] = 'Wyświetl komunikaty błędów';
$string['checkdebugdisplayerror'] = 'Włączone wyświetlane komunikatów błędów które trafią na strony HTML.';
$string['checkdebugdisplayhok'] = 'Wyświetl komunikatów błędów jest wyłączone.';
$string['checkdebugdisplaydetails'] = '';

// debugdisplay.
$string['checkpasswordexpiration'] = 'Włącz wygaśnięcie hasła dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationerror'] = 'Wymuś zmien hasła po x dniach od jego ostatniego zaktualizowania dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationhok'] = 'Włączone wygaśnięcie hasła.';
$string['checkpasswordexpirationdetails'] = '';

// minpasswordlength.
$string['checkminpasswordlength'] = 'Długość hasła';
$string['checkminpasswordlengtherror'] = 'Długość hasła wynosi {$a}, standardowe minimum wynosi 8 znaków.';
$string['checkminpasswordlengthhok'] = 'Długość hasła spełnia minimum.';
$string['checkminpasswordlengthdetails'] = '';

// guestloginbutton.
$string['checkguestloginbutton'] = 'Przycisk logowania jako gościa';
$string['checkguestloginbuttonerror'] = 'Przycisk logowania gościa na stronie logowania jest dostępny.';
$string['checkguestloginbuttonhok'] = 'Przycisk logowania gościa ukryty.';
$string['checkguestloginbuttondetails'] = '';

// backup_auto_active.
$string['checkbackup_auto_active'] = 'Kopie zapasowe kursów';
$string['checkbackup_auto_activeerror'] = 'Nie są skonfigurowane żadne kopie zapasowę automatyczne bądź ręczne kursów.';
$string['checkbackup_auto_activehok'] = 'Kopie zapasowe właczone. Warto od czasu do czasu przejrzeć poprawność ich wykonywania.';
$string['checkbackup_auto_activedetails'] = '';

// cron.
$string['checkcron'] = 'Działanie Crona';
$string['checkcronerror'] = 'Cron nie działa prawidłowo.';
$string['checkcronhok'] = 'Cron działa.';
$string['checkcrondetails'] = '';
