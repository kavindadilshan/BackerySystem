$(document).ready(function(){
    //bar chart
    var ctx = document.getElementById("barChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["July-18", "August-18", "September-18", "October-18", "November-18", "December-18", "January-19", "February-19", "March-19", "April-19", "May-19", "June-19", ],
            datasets: [
                {
                    label: "Online Sale Amount",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1968.20, 21630.60, 10126.00 ],
                    borderColor: "rgba(55, 160, 0, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(55, 160, 0, 0.5)"
                },
                {
                    label: "Online Order number",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 23, 16 ],
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,0,0,0.07)"
                },
                {
                    label: "Offline Sale Amount",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 112831.50, 60539.07 ],
                    borderColor: "rgba(55,160,0,0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(55,160,0,0.9)"
                },
                {
                    label: "Offline Order number",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 81, 74 ],
                    borderColor: "rgba(125,134,255,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(125,134,255,0.4)"
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    //line chart
    var ctx = document.getElementById("lineChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["July-18", "August-18", "September-18", "October-18", "November-18", "December-18", "January-19", "February-19", "March-19", "April-19", "May-19", "June-19", ],
            datasets: [
                {
                    label: "Sale Amount",
                    borderColor: "rgba(0,0,0,.09)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0,0,0,.07)",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1968.20, 134462.10, 70665.07 ]
                },
                {
                    label: "Order number",
                    borderColor: "rgba(55, 160, 0, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(55, 160, 0, 0.5)",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 104, 90 ]
                }
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }
        }
    });
});
function searchmonth(){
    monthyear=$("#datepicker3").val();
    var myurl ='http://restaurant.bdtask.com/dashboard/home/checkmonth';
    var dataString = "monthyear="+monthyear;
    $.ajax({
        type: "POST",
        url: myurl,
        data: dataString,
        success: function(data) {
            $('#salechart').html(data);
        }
    });


}