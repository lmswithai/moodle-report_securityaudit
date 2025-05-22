/**
 * Display chart overallrating.
 *
 * @module     report_securityaudit/overallrating
 * @copyright  2025, when2update.lmswithai.com <consultations@when2update.lmswithai.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

const pluginCenterText = {
  id: 'centerText',
  beforeDraw: (chart, args, options) => {
    var width = chart.width,
    height = chart.height,
    ctx = chart.ctx;
    ctx.restore();
    var fontSize = (height / 114).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.fillStyle = "#495057";
    ctx.textBaseline = "middle";

    var percentage = options.percentage + '%',
    textX = Math.round((width - ctx.measureText(percentage).width) / 2),
    textY = height / 2;

    ctx.fillText(percentage, textX, textY);
    ctx.save();
  },
  defaults: {
    percentage: 0
  }
};

window.addEventListener('load', () => {

  if (typeof dataoverallrating == 'undefined') {
    window.console.log('Fail to load data overallrating');
    return;
  }
  var success = dataoverallrating.success;
  var other = dataoverallrating.other;
  var strsuccess =   dataoverallrating.strnormal;
  var strother =  dataoverallrating.strother;
  var strquantity =  dataoverallrating.strquantity;
  var total = success + other;
  var percentage = Math.round((success / total) * 100);

  const pieChartData = {
    labels: [strsuccess, strother],
    datasets: [
      {
        data: [
          success,
          other,
        ],
        backgroundColor: [
          "#3ac47d",
          "#eeeeee",
        ],
        label: strquantity,
      },
    ],
  };

  const overallRatingData = Object.assign({}, pieChartData);

  var config = {
    type: "doughnut",
    data: overallRatingData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
      },
        title: {
          display: false,
          text: "Ogólna ocena",
        },
        centerText: {
          percentage: percentage,
        }
      },
    },
    plugins: [pluginCenterText],
  };


  if (document.getElementById("overall-rating")) {
    const ctx = document.getElementById("overall-rating").getContext("2d");
    window.myDoughnut = new Chart(ctx, config);
  }
});