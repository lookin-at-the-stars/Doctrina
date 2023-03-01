var data = [5, 8, 6, 9];

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Bimestre 1', 'Bimestre 2', 'Bimestre 3', 'Bimestre 4'],
        datasets: [{
            label: 'Desempenho do Aluno',
            data: data,
            backgroundColor: 'transparent',
            borderColor: '#800a21',
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 10
                }
            }]
        }
    }
});
