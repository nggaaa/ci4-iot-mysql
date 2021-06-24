/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(".pwstrength").pwstrength();

("use strict");

$("[data-checkboxes]").each(function () {
  var me = $(this),
    group = me.data("checkboxes"),
    role = me.data("checkbox-role");

  me.change(function () {
    var all = $(
        '[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'
      ),
      checked = $(
        '[data-checkboxes="' +
          group +
          '"]:not([data-checkbox-role="dad"]):checked'
      ),
      dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
      total = all.length,
      checked_length = checked.length;

    if (role == "dad") {
      if (me.is(":checked")) {
        all.prop("checked", true);
      } else {
        all.prop("checked", false);
      }
    } else {
      if (checked_length >= total) {
        dad.prop("checked", true);
      } else {
        dad.prop("checked", false);
      }
    }
  });
});

$("#table-1").dataTable({
  dom: "Bfrtip",
  columnDefs: [
    {
      sortable: false,
      targets: [2, 3],
    },
  ],
  lengthMenu: [
    [10, 25, 50, 100, 200, -1],
    [10, 25, 50, 100, 200, "All"],
  ],
  buttons: ["copy", "csv", "excel", "pdf", "print"],
});
$("#table-2").dataTable({
  columnDefs: [{ sortable: false, targets: [0, 2, 3] }],
  lengthMenu: [
    [10, 25, 50, 100, 200, -1],
    [10, 25, 50, 100, 200, "All"],
  ],
});
("use strict");

var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Statistics",
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: "#6777ef",
        borderColor: "#6777ef",
        borderWidth: 2.5,
        pointBackgroundColor: "#ffffff",
        pointRadius: 4,
      },
    ],
  },
  options: {
    legend: {
      display: false,
    },
    scales: {
      yAxes: [
        {
          gridLines: {
            drawBorder: false,
            color: "#f2f2f2",
          },
          ticks: {
            beginAtZero: true,
            stepSize: 150,
          },
        },
      ],
      xAxes: [
        {
          ticks: {
            display: false,
          },
          gridLines: {
            display: false,
          },
        },
      ],
    },
  },
});

var ctx = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Statistics",
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: "#6777ef",
        borderColor: "#6777ef",
        borderWidth: 2.5,
        pointBackgroundColor: "#ffffff",
        pointRadius: 4,
      },
    ],
  },
  options: {
    legend: {
      display: false,
    },
    scales: {
      yAxes: [
        {
          gridLines: {
            drawBorder: false,
            color: "#f2f2f2",
          },
          ticks: {
            beginAtZero: true,
            stepSize: 150,
          },
        },
      ],
      xAxes: [
        {
          ticks: {
            display: false,
          },
          gridLines: {
            display: false,
          },
        },
      ],
    },
  },
});

var ctx = document.getElementById("myChart3").getContext("2d");
var myChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    datasets: [
      {
        data: [80, 50, 40, 30, 20],
        backgroundColor: [
          "#191d21",
          "#63ed7a",
          "#ffa426",
          "#fc544b",
          "#6777ef",
        ],
        label: "Dataset 1",
      },
    ],
    labels: ["Black", "Green", "Yellow", "Red", "Blue"],
  },
  options: {
    responsive: true,
    legend: {
      position: "bottom",
    },
  },
});

var ctx = document.getElementById("myChart4").getContext("2d");
var myChart = new Chart(ctx, {
  type: "pie",
  data: {
    datasets: [
      {
        data: [80, 50, 40, 30, 100],
        backgroundColor: [
          "#191d21",
          "#63ed7a",
          "#ffa426",
          "#fc544b",
          "#6777ef",
        ],
        label: "Dataset 1",
      },
    ],
    labels: ["Black", "Green", "Yellow", "Red", "Blue"],
  },
  options: {
    responsive: true,
    legend: {
      position: "bottom",
    },
  },
});
