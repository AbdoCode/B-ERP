/***************************************** bar Chart **************************************************/
var bardata = {
    labels: ["Kids", "Teachers", "Operation Manager", "Supervisors", "Academy Heads", "Receptionist"],
    datasets: [{
        label: "New Members For This Month ( December )",
        backgroundColor: "rgba(0, 51, 153, 0.8)",
        borderColor: "rgba(0, 51, 153,1)",
        borderWidth: 2,
        hoverBackgroundColor: "rgba(0, 0, 153, 0.9)",
        hoverBorderColor: "rgba(0, 0, 153,1)",
        data: [27, 8, 7, 4, 6, 3]
    }]
};

var baroptions = {
    maintainAspectRatio: false,
    scales: {
        yAxes: [{
            stacked: true,
            gridLines: {
                display: true,
                color: "rgba(221, 221, 221,0.5)"
            }
        }],
        xAxes: [{
            gridLines: {
                display: false
            }
        }]
    }
};

Chart.Bar('bar', {
    options: baroptions,
    data: bardata
});
/***************************************** bar Charts **************************************************/
/***************************************** pie Charts **************************************************/
var piedata = {
    labels: ["BackPackerz", "EbnBatota", "Samaloote"],
    datasets: [
        {
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
            data: [136, 92, 31]
        }
    ]
};

var pieoptions = {
    title: {
        display: true,
        text: 'Number of kids per branch until now'
    }
};

var myPieChart = new Chart(pie, {
    type: 'pie',
    data: piedata,
    options: pieoptions
});
/***************************************** pie Charts **************************************************/
/***************************************** doughnut Charts **************************************************/
var doughnutdata = {
    labels: ["Completed", "Postponed", "Cancelled", "In Progress", "Pending"],
    datasets: [{
        backgroundColor: ["rgba(52, 152, 219,0.8)", "rgba(231, 76, 60,0.8)", "rgba(155, 89, 182,0.8)", "rgba(38, 185, 154,0.8)", "rgba(255,99,132,1)", "rgba(189, 195, 199,0.8)"],
        borderWidth: 2,
        hoverBackgroundColor: ["rgba(52, 152, 219,1)", "rgba(231, 76, 60,1)", "rgba(155, 89, 182,1)", "rgba(38, 185, 154,1)", "rgba(255,99,132,1)", "rgba(189, 195, 199,1)"],
        data: [7, 2, 1, 3, 5]
    }]
};

var doughnutoptions = {
    title: {
        display: true,
        text: 'Number of Events for this Month ( December )'
    }
};

var myDoughnutChart = new Chart(doughnut, {
    type: 'doughnut',
    data: doughnutdata,
    options: doughnutoptions
});
/***************************************** doughnut Charts **************************************************/