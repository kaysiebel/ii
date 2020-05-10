<div class="accordion ripple">Statistik</div>
<div class="accordion-panel">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>




    <a href="/statistic">
        <div class="canvas-sm">
            <canvas id="myChart"></canvas>
        </div>
    </a>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var mixedChart = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: 'Bestand',
                    data: [12000, 10700, 10700, 9400, 8400, 10400, 8700, 9000, ],

                    // Changes this dataset to become a line
                    type: 'line',
                    backgroundColor: 'rgba(10, 92, 143, 0.1',
                    borderColor: 'rgba(10, 92, 143, 1)',
                    borderWidth: 2
                }, {
                    label: 'Verbrauch',
                    data: [1000, 1300, 2000, 1300, 1000, 2000, 1700, 1300, ],

                    // Changes this dataset to become a line
                    type: 'bar',
                    backgroundColor: 'rgba(220, 0, 0, 0.6',
                    borderColor: 'rgba(220, 0, 0, 1)',
                    borderWidth: 2
                }, {
                    label: 'Eingänge',
                    data: [4000, 0, 2000, 0, 0, 4000, 0, 1000, ],
                    backgroundColor: 'rgba(150, 188, 58, 0.6',
                    borderColor: 'rgba(150, 188, 58, 1)',
                    borderWidth: 2
                }],
                labels: ["01.05.", "02.05.", "03.05", "04.05", "05.05", "6.05.", "7.05.", "8.05.", ]
            },

            // var myChart = new Chart(ctx, {
            //     type: 'bar',
            //     data: {
            //         labels: ["01.05.", "02.05.", "04.05", "05.05", "08.05", "10.05."],
            //         datasets: [{
            //             label: 'Eingänge',
            // data: [4000, 2000, 4000, 1000, 4000, 2000],
            // backgroundColor: 'rgba(150, 188, 58, 0.6',
            // borderColor: 'rgba(150, 188, 58, 1)',
            // borderWidth: 1
            //         }]
            //     },
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
    </script>

</div>