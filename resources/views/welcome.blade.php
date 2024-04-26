<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="sidebar">
        <a href="#">Produto 1</a>
        <a href="#">Produto 2</a>
        <a href="#">Produto 3</a>
    </div>
    <div class="content">
        <!-- Cards com nomes e valores dos produtos -->
        <div class="container">
          <div class="card">
             <h3>Produto 1</h3>
             <p>Valor: $100</p>
          </div>
          <div class="card">
             <h3>Produto 2</h3>
             <p>Valor: $150</p>
          </div>
          <div class="card">
             <h3>Total</h3>
             <p>Valor Total: $250</p>
          </div>
        </div>
        <!-- Gráficos -->
        <div class="container">
          <div class="chart">
             <canvas id="graficoProduto1"></canvas>
          </div>
          <div class="chart">
             <canvas id="graficoProduto2"></canvas>
          </div>
          <div class="chart">
             <canvas id="graficoProduto3"></canvas>
          </div>
        </div>
    </div>

    <script>
        // Dados de exemplo para os gráficos
        var dadosProduto1 = {
            labels: ['A', 'B', 'C'],
            datasets: [{
                label: 'Dados Produto 1',
                data: [300, 50, 100],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        var dadosProduto2 = {
            labels: ['X', 'Y', 'Z'],
            datasets: [{
                label: 'Dados Produto 2',
                data: [100, 200, 150],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        var dadosProduto3 = {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: '#ff6384',
                yAxisID: 'y-axis-1',
            }, {
                label: 'Despesas',
                data: [1, 2, 1, 1, 2, 2],
                borderColor: '#36a2eb',
                yAxisID: 'y-axis-2',
            }]
        };

        // Opções para o gráfico de linha com eixo múltiplo
        var optionsProduto3 = {
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
                }],
            }
        };

        // Criar os gráficos
        var ctxProduto1 = document.getElementById('graficoProduto1').getContext('2d');
        var myPieChart1 = new Chart(ctxProduto1, {
            type: 'pie',
            data: dadosProduto1
        });

        var ctxProduto2 = document.getElementById('graficoProduto2').getContext('2d');
        var myPieChart2 = new Chart(ctxProduto2, {
            type: 'pie',
            data: dadosProduto2
        });

        var ctxProduto3 = document.getElementById('graficoProduto3').getContext('2d');
        var myLineChart3 = new Chart(ctxProduto3, {
            type: 'line',
            data: dadosProduto3,
            options: optionsProduto3
        });
    </script>
</body>
</html>