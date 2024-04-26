<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('img/user.png') }}" alt="user">
        <h1>Victor</h1>
        <h3>victor@gmail</h3>
        <a href="#">Home</a>
        <a href="#">File</a>
        <a href="#">Graph</a>
    </div>
    <div class="content">
        <nav class="nav-bar">
            <h1>Dashboard</h1>
            <img src="" alt="menu">
        </nav>
        <div class="container-card">
          <div class="card">
             <h3>Earning</h3>
             <h1>R$ 26.000</h1>
          </div>
          <div class="card">
             <h3>Share</h3>
             <h1>2.434k</h1>
          </div>
          <div class="card">
             <h3>Likes</h3>
             <h1>12.590k</h1>
          </div>
          <div class="card">
             <h3>Rating</h3>
             <h1>8,5</h1>
          </div>
        </div>
        <div class="container">
          <div class="card-graph">
            <div class="chart">
               <canvas id="multiAxisChart"></canvas>
            </div>
            <div class="chart">
               <canvas id="lineChart"></canvas>
            </div>
          </div>
          <div class="chart">
             <canvas id="doughnutChart"></canvas>
          </div>
        </div>
    </div>

    <script>
        var dataMultiAxis = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales',
                data: [65, 59, 80, 81, 56, 55],
                yAxisID: 'y-axis-1',
                borderColor: '#ff6384',
                borderWidth: 2,
                fill: false
            }, {
                label: 'Expenses',
                data: [28, 48, 40, 19, 86, 27],
                yAxisID: 'y-axis-2',
                borderColor: '#36a2eb',
                borderWidth: 2,
                fill: false
            }]
        };

        var optionsMultiAxis = {
            scales: {
                yAxes: [{
                    type: 'linear',
                    display: true,
                    position: 'left',
                    id: 'y-axis-1',
                }, {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    id: 'y-axis-2',
                    gridLines: {
                        drawOnChartArea: false,
                    },
                }]
            }
        };

        var ctxMultiAxis = document.getElementById('multiAxisChart').getContext('2d');
        var multiAxisChart = new Chart(ctxMultiAxis, {
            type: 'line',
            data: dataMultiAxis,
            options: optionsMultiAxis
        });

        var dataLine = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Performance',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: '#ff6384',
                fill: false
            }]
        };

        var ctxLine = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctxLine, {
            type: 'line',
            data: dataLine
        });

        var dataDoughnut = {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        var ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
        var doughnutChart = new Chart(ctxDoughnut, {
            type: 'doughnut',
            data: dataDoughnut
        });
    </script>
</body>
</html>