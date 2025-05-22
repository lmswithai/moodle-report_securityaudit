/**
 * Display chart overallrating.
 *
 * @module     report_securityaudit/overallrating
 * @copyright  2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

window.addEventListener('load', () => {

  if (typeof datafailureslogin == 'undefined') {
    window.console.log('Fail to load data failures login');
    return;
  }

  if (datafailureslogin.length == 0) {
    return;
  }

  const labels = datafailureslogin.map(item => item.date);
  const failures = datafailureslogin.map(item => item.failures);

  const lineChartData = {
    labels: labels,
    datasets: [
      {
        label: stringsfailureslogin.incorrectlogins,
        borderColor: "#d92550",
        borderWidth: 1,
        data: failures,
      },
    ],
  };

  // Line Chart
  setTimeout(function () {
    if (document.getElementById("line-chart")) {
      const ctx = document.getElementById("line-chart").getContext("2d");
      window.myLineChart = new Chart(ctx, {
        type: "line",
        data: lineChartData,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
            },
            title: {
              display: false,
              text: ''
            },

          },
          scales: {
            x: {
              display: true,
              grid: {
                display: false,
              },
            },
            y: {
              display: true,
              grid: {
                display: false,
              },
            },
          },
          layout: {
            padding: {
              left: 10,
              right: 10,
              top: 10,
              bottom: 0,
            },
          },
        },
      });
    }
  }, 500);
});