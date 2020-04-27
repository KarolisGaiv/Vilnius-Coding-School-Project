// Vaidoto kodas

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);

    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    var el = document.querySelectorAll('.tabs');
    var instance = M.Tabs.init(el);

    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);

    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);

    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);

    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);

});

// Romano kodas
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
});

//CHARTS PIES
var myChartMen = document.getElementById('myChartMen').getContext('2d');
var massPopChart = new Chart(myChartMen, {
    type: 'pie', // Kiti diagramu tipai: bar, horizontalBar,line, doughnut, radar, polarArea
    data: {
        labels: ['Men', 'Women'],
        datasets: [{
            label: 'Gender',
            data: [70, 30],
            backgroundColor: ['rgba(157,194,85, 0.6)', 'green'],
            borderWidth: 1,
            borderColor: ['rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)'],
            hoverBorderWidth: 3,
            hoverBorderColor: ['rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Webpage Guests Gender',
            fontColor: 'black',
            fontSize: 20,
        },
        legend: {
            labels: {
                fontColor: 'black',
            }
        }
    }
});

var myChartAge = document.getElementById('myChartAge').getContext('2d');
var massPopChart = new Chart(myChartAge, {
    type: 'pie',
    data: {
        labels: ['<18', '<40', '<60'],
        datasets: [{
            label: 'Age',
            data: [25, 70, 5],
            backgroundColor: ['rgba(157,194,85, 0.6)', 'rgba(97,171,232, 0.6)', '#AF7AC5'],
            borderWidth: 1,
            borderColor: ['rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)'],
            hoverBorderWidth: 3,
            hoverBorderColor: ['rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Webpage Guests Age',
            fontColor: 'black',
            fontSize: 20,
        },
        legend: {
            labels: {
                fontColor: 'black',
            }
        }
    }
});

var myChartInterests = document.getElementById('myChartInterests').getContext('2d');
var massPopChart = new Chart(myChartInterests, {
    type: 'pie',
    data: {
        labels: ['Engineer', 'IT', 'Photography', 'Web Development', 'Data Analysis'],
        datasets: [{
            label: 'Interests',
            data: [12, 30, 5, 42, 11],
            backgroundColor: ['#5DADE2', '#F7DC6F', '#AF7AC5', '#E59866', '#CB4335'],
            borderWidth: 1,
            borderColor: ['rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)'],
            hoverBorderWidth: 3,
            hoverBorderColor: ['rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Webpage Guests Interests',
            fontColor: 'black',
            fontSize: 20,
        },
        legend: {
            labels: {
                fontColor: 'black',
            }
        }
    }
});

//CHARTS BARS
var myChartBarsMen = document.getElementById('myChartBarsMen').getContext('2d');
var barChart = new Chart(myChartBarsMen, {
    type: 'bar',
    data: {
        labels: ['Men', 'Women'],
        datasets: [{
            label: 'Gender',
            barThickness: 50,
            data: [70, 30],
            backgroundColor: ['rgba(157,194,85, 0.6)', 'green'],
            borderWidth: 1,
            borderColor: ['rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)'],
            hoverBorderWidth: 3,
            hoverBorderColor: ['rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Webpage Guests Gender',
            fontColor: 'black',
            fontSize: 20,
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'black',
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
    }
});

var myChartBarsAge = document.getElementById('myChartBarsAge').getContext('2d');
var barChart = new Chart(myChartBarsAge, {
    type: 'bar',
    data: {
        labels: ['<18', '<40', '<60'],
        datasets: [{
            label: 'Age',
            barThickness: 50,
            data: [25, 70, 5],
            backgroundColor: ['rgba(157,194,85, 0.6)', 'rgba(97,171,232, 0.6)', '#AF7AC5'],
            borderWidth: 1,
            borderColor: ['rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)', 'rgba(141,141,141, 0.6)'],
            hoverBorderWidth: 3,
            hoverBorderColor: ['rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)', 'rgba(12,12,12, 0.6)']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Webpage Guests Age',
            fontColor: 'black',
            fontSize: 20,
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'black',
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }]
        }
    }
});