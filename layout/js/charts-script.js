/***************************************** bar Chart **************************************************/
var bardata = {
    labels: ["Kids", "Teachers", "CEO", "blabla", "Mohamed", "hoba", "lalalal"],
    datasets: [{
        label: "Numbers",
        backgroundColor: "rgba(0, 51, 153, 0.8)",
        borderColor: "rgba(0, 51, 153,1)",
        borderWidth: 2,
        hoverBackgroundColor: "rgba(0, 0, 153, 0.9)",
        hoverBorderColor: "rgba(0, 0, 153,1)",
        data: [65, 59, 20, 81, 56, 55, 40]
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
    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
    datasets: [
        {
            label: "Population (millions)",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: [2478,5267,734,784,433]
        }
    ]
};

var pieoptions = {
    title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
    }
};

var myPieChart = new Chart(pie,{
    type: 'pie',
    data: piedata,
    options: pieoptions
});
/***************************************** pie Charts **************************************************/
/***************************************** doughnut Charts **************************************************/
var doughnutdata = {
    labels: ["IOS", "Android", "Blackberry", "Symbian", "Sony", "Others"],
    datasets: [{
        backgroundColor: ["rgba(52, 152, 219,0.8)","rgba(231, 76, 60,0.8)","rgba(155, 89, 182,0.8)","rgba(38, 185, 154,0.8)","rgba(255,99,132,1)","rgba(189, 195, 199,0.8)"],
        borderWidth: 2,
        hoverBackgroundColor: ["rgba(52, 152, 219,1)","rgba(231, 76, 60,1)","rgba(155, 89, 182,1)","rgba(38, 185, 154,1)","rgba(255,99,132,1)","rgba(189, 195, 199,1)"],
        data: [65, 59, 20, 81, 56, 55]
    }]
};

var doughnutoptions = {
    title: {
        display: true,
        text: 'Mobile phone to blabla bla'
    }
};

var myDoughnutChart = new Chart(doughnut, {
    type: 'doughnut',
    data: doughnutdata,
    options: doughnutoptions
});
/***************************************** doughnut Charts **************************************************/