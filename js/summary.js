/**
 * Display chart overallrating.
 *
 * @module     report_securityaudit/summary
 * @copyright  2024, when2update.com <consultations@when2update.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


window.addEventListener('load', () => {
  if (typeof datasummary == 'undefined') {
    window.console.log('Fail to load data datasummary');
    return;
  }
  var critical = datasummary.critical;
  var moderate = datasummary.moderate;
  var info      = datasummary.info;
  var normal   = datasummary.normal;
  var criticalUp = new countUp.CountUp('summary-critical', critical);
  criticalUp.start();
  var moderateUp = new countUp.CountUp('summary-moderate', moderate);
  moderateUp.start();
  var infoUp = new countUp.CountUp('summary-info', info);
  infoUp.start();
  var normalUp = new countUp.CountUp('summary-normal', normal);
  normalUp.start();
});