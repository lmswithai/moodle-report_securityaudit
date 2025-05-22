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
 * @copyright   2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoutside'] = 'Dane dostępne z zewnątrz';
$string['action'] = 'Akcje';
$string['area'] = 'Obszar';
$string['auditpanel'] = 'Panel audytowy';
$string['backups'] = 'Kopie zapasowe';
$string['btnbackas'] = 'Powrót do "Administracja serwisu"';
$string['checkadminhasmfa'] = 'Konta administratorów z MFA';
$string['checkadminhasmfadetails'] = 'Rozważ włączenie dwuskładnikowego uwierzytelnienia dla kont administratorów w celu podniesienia bezpieczeństwa.';
$string['checkadminhasmfaerror'] = 'Niektórzy administratorzy nie mają włączonego MFA.';
$string['checkadminhasmfahok'] = 'Wszystkie konta administracyjne mają włączone MFA.';
$string['checkadminhasmfainfo'] = 'Aby administrator zniknął z powyższej listy powinnien choć raz zalogować się za pomoca MFA.';
$string['checkadminhasmfanoenabled'] = 'Wtyczka MFA nie jest włączona.';
$string['checkbackup_auto_active'] = 'Kopie zapasowe kursów';
$string['checkbackup_auto_activedetails'] = '';
$string['checkbackup_auto_activeerror'] = 'Nie są skonfigurowane żadne automatyczne ani ręczne kopie zapasowe kursów.';
$string['checkbackup_auto_activehok'] = 'Kopie zapasowe są włączone. Warto od czasu do czasu przejrzeć poprawność ich wykonywania.';
$string['checkcleantext'] = 'Czyszczenie tekstu';
$string['checkcleantextdetails'] = 'Możesz również rozważyć włączenie eksperymentalnej funkcjonalności "Czyszczenie treści wszędzie" która restrykcyjniej podchodzi do oczyszczania tekstu.';
$string['checkcleantexterror'] = 'Masz włączone ustawienie "Zezwalaj na zaufaną zawartość" co umożliwia użytkowniką wstawianie m.in. skryptów które mogą stanowić naruszenie bezpieczeństwa.<br>Upewnij się że ta opcja jest potrzebna.';
$string['checkcleantextok'] = '"Zezwalaj na zaufaną zawartość" jest wyłączone.';
$string['checkcookiesecure'] = 'Tylko bezpieczne ciasteczka';
$string['checkcookiesecuredetails'] = 'Zgodnie z informacjami z ustawień.';
$string['checkcookiesecureerror'] = 'Jeśli serwer akceptuje tylko połączenia HTTPS, zaleca się włączyć wysyłanie bezpiecznych ciasteczek.';
$string['checkcookiesecurehok'] = 'Włączone są tylko bezpieczne ciasteczka.';
$string['checkcron'] = 'Działanie Crona';
$string['checkcrondetails'] = '';
$string['checkcronerror'] = 'Cron nie działa prawidłowo.';
$string['checkcronhok'] = 'Cron działa.';
$string['checkdebug'] = 'Komunikaty usuwania błędów';
$string['checkdebugdetails'] = '';
$string['checkdebugerror'] = 'Ustawiona jest inna opcja niż <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkdebugdisplay'] = 'Wyświetlanie komunikatów błędów';
$string['checkdebugdisplaydetails'] = '';
$string['checkdebugdisplayerror'] = 'Włączone wyświetlanie komunikatów błędów, które trafią na strony HTML.';
$string['checkdebugdisplayhok'] = 'Wyświetlanie komunikatów błędów jest wyłączone.';
$string['checkdebughok'] = 'Ustawione na <i>ŻADNE: Nie pokazuj żadnych błędów ani komunikatów</i>.';
$string['checkenablewebservices'] = 'Aktywne protokoły usług sieciowych';
$string['checkenablewebservicesdetails'] = 'Do zweryfikowania możesz sprawdzić <a href="{$a}">Aktywne protokoły usług sieciowych</a>.';
$string['checkenablewebserviceserror'] = 'Włączone usługi sieciowe. Jeśli niepotrzebne, to należy je wyłączyć.';
$string['checkenablewebserviceshok'] = 'Usługi sieciowe są wyłączone, co zwiększa bezpieczeństwo.';
$string['checkguestloginbutton'] = 'Przycisk logowania jako gość';
$string['checkguestloginbuttondetails'] = '';
$string['checkguestloginbuttonerror'] = 'Przycisk logowania jako gość na stronie logowania jest dostępny.';
$string['checkguestloginbuttonhok'] = 'Przycisk logowania jako gość jest ukryty.';
$string['checklogs'] = 'Sprawdź logi';
$string['checkminpasswordlength'] = 'Długość hasła';
$string['checkminpasswordlengthdetails'] = '';
$string['checkminpasswordlengtherror'] = 'Długość hasła wynosi {$a}, standardowe minimum wynosi 8 znaków.';
$string['checkminpasswordlengthhok'] = 'Długość hasła spełnia minimum.';
$string['checkpasswordexpiration'] = 'Włącz wygaśnięcie hasła dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationdetails'] = '';
$string['checkpasswordexpirationerror'] = 'Wymuś zmianę hasła po okreslonej liczbie dni od jego ostatniego zaktualizowania dla autoryzacji <i>auth_manual</i>.';
$string['checkpasswordexpirationhok'] = 'Wygaśnięcie hasła jest włączone.';
$string['checkw2u'] = 'Zdalne sprawdzenie luk';
$string['checkw2u_desc'] = 'Sprawdzaj luki oprogramowania z wykorzystaniem <a href="https://when2update.lmswithai.com" target="_blank">when2update.lmswithai.com</a> (może wydłużyć czas wczytywanie raportu ze względu na komunikację z serwerem zewnętrznym).';
$string['checkvulnerabilities'] = 'Znane podatności';
$string['checkvulnerabilities_db'] = 'Bezpieczeństwo bazy danych';
$string['checkvulnerabilities_moodle'] = 'Bezpieczeństwo Moodle';
$string['checkvulnerabilities_php'] = 'Bezpieczeństwo PHP';
$string['checkvulnerabilitiesdetails'] = '<h2>Znalezione podatności:</h2>';
$string['checkvulnerabilitieserror'] = 'Błąd odczytu wersji Moodle. Zgłoś autorowi wtyczki.';
$string['checkvulnerabilitiesfounderror'] = 'Znaleziono <span class="badge badge-danger">{$a}</span> podatności dla tej wersji Moodle.';
$string['checkvulnerabilitieshok'] = 'Na ten moment nie są zgłoszone żadne podatności dla tej wersji Moodle.';
$string['checkvulnerabilitieshunknown'] = 'Nie udało się nawiązać połączenia do serwera analizy.';
$string['checkvulnerabilitiesnosupporterror'] = 'Ta wersja Moodle nie ma już wsparcia bezpieczeństwa, zalecana jest aktualizacja do nowszej wersji.';
$string['check_vuls_error_db'] = 'Błąd odczytu wersjie bazy danych. Zgłoś do autora wtyczki.';
$string['check_vuls_error_moodle'] = 'Błąd odczytu wersjie Moodle. Zgłoś do autora wtyczki.';
$string['check_vuls_error_php'] = 'Błąd odczytu wersjie PHP. Zgłoś do autora wtyczki.';
$string['check_vuls_founderror_db'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji bazy danych.';
$string['check_vuls_founderror_moodle'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji Moodle.';
$string['check_vuls_founderror_php'] = 'Znaleziono <span class="badge badge-pill bg-danger">{$a}</span> luk bezpieczeństwa w tej wersji PHP.';
$string['check_vuls_getdata'] = 'Pobierz dane, aby uzyskać więcej informacji';
$string['check_vuls_nosupporterror_db'] = 'Ta wersja PHP nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_nosupporterror_moodle'] = 'Ta wersja Moodle nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_nosupporterror_php'] = 'Ta wersja PHP nie ma już wsparcia bezpieczeństwa, zaleca się aktualizację do nowszej wersji.';
$string['check_vuls_ok_db'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji bazy danych.';
$string['check_vuls_ok_moodle'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji Moodle.';
$string['check_vuls_ok_php'] = 'W tej chwili nie zgłoszono żadnych luk w zabezpieczeniach tej wersji PHP.';
$string['check_vuls_unknown_db'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.lmswithai.com">when2update.lmswithai.com</a>';
$string['check_vuls_unknown_moodle'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.lmswithai.com">when2update.lmswithai.com</a>';
$string['check_vuls_unknown_php'] = 'Nie udało się nawiązać połączenia z serwerem analiz. Możesz to zrobić ręcznie na naszej stronie <a target="_blank" href="https://when2update.lmswithai.com">when2update.lmswithai.com</a>';
$string['countfailed'] = 'Liczba zgłoszonych potencjalnych problemów';
$string['countsuccess'] = 'Liczba prawidłowych';
$string['critical'] = 'Krytyczne';
$string['critical_desc'] = 'Zajmij się nimi niezwłocznie';
$string['cve'] = 'CVE';
$string['description'] = 'Opis';
$string['envirolment'] = 'Środowisko uruchomieniowe LMS';
$string['formlmswitaibtn'] = 'Zgłoś błąd / prośbę o pomoc / nową funkcjonalność';
$string['gdpr'] = 'RODO';
$string['incorrectlogins'] = 'Błędne logowania';
$string['info'] = 'Informacje';
$string['info_desc'] = 'Sprawdź w wolnej chwili...';
$string['lastcheck'] = 'Ostatnie sprawdzenie:';
$string['logfailmodule'] = 'Liczba błędów z 7 dni';
$string['moderate'] = 'Średnie';
$string['moderate_desc'] = 'Zapoznaj się i zdecyduj';
$string['monitor_title_failureslogin'] = 'Ilość błędnych logowań (z 30 dni)';
$string['monitor_title_failureslogintop'] = 'Błędne próby logowania (top 10 z 30 dni)';
$string['monitorcronlog'] = 'Sprawdzenia błędnych logowań wykonuje się raz dziennie zgodnie z ustawieniami zdania w cornie, domyślnie o 1:00 w nocy.';
$string['monitoring'] = 'Monitorowanie';
$string['nisactions'] = 'Działania';
$string['nisantivirusforlms'] = 'Antywirus dla LMS';
$string['nisapprovedsecuritypolicy'] = 'Zatwierdzona polityka bezpieczeństwa i procedury zarządzania incydentami zgodne z wymogami NIS2.';
$string['nisassessmentofserverinfrastructure'] = 'Ocena infrastruktury serwerowej: Przegląd wszystkich komponentów serwera (system operacyjny, sieć, oprogramowanie) oraz ich zgodność z wymogami NIS2.';
$string['nisauditreportidentifyingvulnerabilities'] = 'Raport z audytu identyfikujący luki w zabezpieczeniach serwera i platformy LMS oraz rekomendacje dotyczące działań naprawczych.';
$string['niscategory'] = 'Kategoria';
$string['niscollaborationwithexternalcompany'] = 'Współpraca z zewnętrzną firmą';
$string['niscollaborationwithnationalcenter'] = 'Współpraca z krajowym ośrodkiem odpowiedzialnym za wdrożenie i monitoring dyrektywy NIS2: Kontynuacja współpracy z zespołami reagowania na incydenty w celu reagowania na incydenty i wymiany informacji.';
$string['nisconductinginternalaudit'] = 'Przeprowadzenie wewnętrznego audytu w celu oceny zgodności działań instytucji i infrastruktury IT z wymogami NIS2.';
$string['nisconfigurationbyitdepartment'] = 'Konfiguracja przez dział IT';
$string['niscontinuoussystemmonitoring'] = 'Stałe monitorowanie systemu: Regularne monitorowanie serwera i platformy LMS w celu wykrywania i przeciwdziałania nowym zagrożeniom. Monitorowanie logów, incydentów i ruchu sieciowego.';
$string['niscorrectionsandfixes'] = 'Korekty i poprawki: Na podstawie wyników testów i audytu, wprowadzenie ewentualnych poprawek, optymalizacja polityki bezpieczeństwa oraz aktualizacja systemów.';
$string['nisdataencryption'] = 'Szyfrowanie danych: Wprowadzenie pełnego szyfrowania danych przesyłanych pomiędzy użytkownikami a serwerem (SSL/TLS), jak również szyfrowanie danych przechowywanych na serwerze (w bazach danych LMS).';
$string['nisdatabasesecurity'] = 'Zabezpieczenie bazy danych: Dodatkowe środki bezpieczeństwa dla bazy danych LMS, takie jak zabezpieczenie przed SQL injection, regularne backupy oraz segmentacja bazy, program antywirusowy dedykowany dla LMS.';
$string['nisdevelopmentofsecuritypolicy'] = '2. Opracowanie polityki bezpieczeństwa';
$string['nisdocumentation'] = 'Dokumentacja';
$string['nisenhancedmonitoringoflmsandserver'] = 'Rozszerzony monitoring LMS i serwera';
$string['nisfullcompliancewithnis2'] = 'Pełna zgodność z wymogami NIS2 oraz utrzymanie ciągłej aktualizacji i monitorowania bezpieczeństwa.';
$string['nisincidentmanagementprocedurecreation'] = 'Tworzenie procedur zarządzania incydentami: Opracowanie i wdrożenie procedur dotyczących zgłaszania i zarządzania incydentami związanymi z cyberbezpieczeństwem (np. ataki hakerskie, wycieki danych).';
$string['nisincidentsimulationexercises'] = 'Ćwiczenia z symulacji incydentów: Organizacja symulacji cyberataków i incydentów (np. phishing), aby pracownicy IT oraz użytkownicy mogli przećwiczyć procedury reagowania.';
$string['nisincreasedcybersecurityawareness'] = 'Zwiększona świadomość cyberbezpieczeństwa wśród personelu i użytkowników platformy LMS.';
$string['nislmsandserversecuritypolicy'] = 'Polityka bezpieczeństwa LMS i serwera: Opracowanie kompleksowej polityki bezpieczeństwa obejmującej platformę LMS, serwer, zarządzanie danymi użytkowników i dostępem. Polityka ta musi określać standardy dotyczące haseł, autoryzacji, backupów oraz monitorowania systemu.';
$string['nislmsandserverupdates'] = 'Aktualizacje LMS i serwera';
$string['nislmssoftwareaudit'] = 'Audyt oprogramowania LMS: Zlecenie audytu zewnętrznego, który oceni poziom zabezpieczeń LMS i serwera. Obejmuje sprawdzenie konfiguracji serwera, baz danych, systemów backupowych oraz zarządzania użytkownikami.';
$string['nismethodofimplementation'] = 'Metoda realizacji';
$string['nismonitoringandcontinuousimprovement'] = '6. Monitorowanie i ciągłe doskonalenie';
$string['nismonitoringandlogging'] = 'Monitoring i logowanie: Wdrożenie narzędzi do monitorowania ruchu sieciowego, logowania aktywności użytkowników i rejestrowania zdarzeń na poziomie serwera oraz platformy LMS, WAF dedykowany dla platformy e-learning (Web Application Firewall).';
$string['nispenetrationtesting'] = 'Testy penetracyjne: Przeprowadzenie testów penetracyjnych (np. OWASP Top 10), które sprawdzą skuteczność wdrożonych zabezpieczeń serwera i platformy LMS. Testy te mają na celu symulację potencjalnych ataków.';
$string['nispreparationofriskmanagementplan'] = 'Przygotowanie planu zarządzania ryzykiem: Dokument określający zasady zarządzania ryzykiem, jego identyfikację i kontrolę, ze szczególnym uwzględnieniem danych użytkowników LMS.';
$string['nisregularsecurityupdates'] = 'Regularne aktualizacje zabezpieczeń: Kontynuacja cyklicznego wgrywania aktualizacji dla serwera, oprogramowania LMS oraz wszelkich narzędzi zabezpieczających.';
$string['nisresult'] = 'Wynik';
$string['nisriskanalysis'] = 'Analiza ryzyka: Identyfikacja zagrożeń związanych z hostingiem LMS, nieautoryzowany dostęp do danych użytkowników, takich jak podatność na ataki DDoS, czy malware.';
$string['nissecurityauditandriskanalysis'] = '1. Audyt bezpieczeństwa i analiza ryzyka';
$string['nissecuritypolicyreviews'] = 'Przeglądy polityki bezpieczeństwa: Regularne przeglądy i aktualizacje polityki bezpieczeństwa, co najmniej raz w roku, z uwzględnieniem nowych zagrożeń i zmian prawnych.';
$string['nissecuritytestingandnis2complianceaudit'] = '5. Testowanie zabezpieczeń i audyt zgodności z NIS2';
$string['nissecuritytraininginlms'] = 'Szkolenie - Jak bezpiecznie korzystać z LMS?';
$string['nisserverandlmssecurityupgrades'] = '3. Modernizacja zabezpieczeń serwera i LMS';
$string['nisserverupdate'] = 'Aktualizacja serwera: Zainstalowanie najnowszych poprawek bezpieczeństwa dla systemu operacyjnego serwera oraz oprogramowania LMS. Konfiguracja zapory sieciowej (firewall), systemów wykrywania zagrożeń (IDS/IPS) dla serwera, dedykowany WAF dla platformy e-learning (Web Application Firewall).';
$string['nistrainingforitteam'] = 'Szkolenia dla zespołu IT: Specjalistyczne szkolenia techniczne z zakresu zarządzania serwerami, aktualizacji bezpieczeństwa oraz reagowania na cyberzagrożenia.';
$string['nistrainingforusersoflms'] = 'Szkolenia dla użytkowników platformy LMS: Przygotowanie programów szkoleń dla użytkowników (nauczycieli, studentów, administracji), obejmujących bezpieczne korzystanie z LMS, ochronę haseł oraz najlepsze praktyki w zakresie cyberbezpieczeństwa.';
$string['nistrainingofitstaffandusers'] = '4. Szkolenia personelu IT i użytkowników';
$string['nisupdatedstrengthenedserver'] = 'Zaktualizowany i wzmocniony serwer, zwiększone bezpieczeństwo platformy LMS i poprawa mechanizmów zarządzania danymi.';
$string['niswafforlms'] = 'WAF dla LMS';
$string['nofail_desc'] = 'Ten obszar nie zgłasza problemów.';
$string['nofail_title'] = 'Dobrze!';
$string['nointernallogerror'] = 'Monitorowania błędnych logowań wspiera jedynie wewnętrzną baze logów.';
$string['nodata'] = 'Brak danych';
$string['normal'] = 'Prawidłowe';
$string['normal_desc'] = 'Bardzo dobrze';
$string['notassigned'] = 'Nieprzypisane';
$string['other'] = 'Reszta';
$string['overallmodule'] = 'Ogólna ocena';
$string['password_expire_stats'] = 'Statystyki zmiany haseł';
$string['pluginname'] = 'Raport audytu bezpieczeństwa według NIS2 i RODO';
$string['quantity'] = 'Liczba';
$string['recommended_minimum_update'] = 'Zaktualizuj platformę minimum do wersji <strong>{$a}</strong>, aby wyeliminować poniższe podatności. Jeśli chcesz wyeliminować tylko konkretne podatności zaktualizowanie platformy e-learning do wersji przedstawojej tabeli bądź (jeśli dostępne) rekomendujemy wyłącz dany element w celu zapewnienia bezpieczeństwa.';
$string['requirementsnistwo'] = 'Wymagania NIS2';
$string['security'] = 'Bezpieczeństwo';
$string['securityaudit'] = 'Audyt zabezpieczeń';
$string['securityaudit:monitor'] = 'Zobacz monitor audytu zabezpieczeń';
$string['securityaudit:nis'] = 'Zobacz raport NIS2';
$string['securityaudit:view'] = 'Pokaż raport audytu zabezpieczeń';
$string['setting'] = 'Ustawienia';
$string['status'] = 'Status';
$string['tooltipcheckbtn'] = 'Pobierz informacje z serwera when2update.lmswithai.com';
$string['tooltipfaillogs'] = 'Ilość błędnych logowań z 30 dni';
$string['unknown'] = 'Nieznany';
$string['user_login_failed_stats'] = 'Statystyki błędnych logowań';
$string['usersaccount'] = 'Konta użytkowników';
$string['versionfixed'] = 'Wersja poprawiona';
$string['vulnerabilities'] = 'Luki bezpieczeństwa w oprogramowaniu';
$string['vulnerabilitie'] = 'Podatność';
