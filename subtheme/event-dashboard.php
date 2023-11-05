<div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
    <div class="tab-pane-header">
        <div class="row g-0 align-items-center mb-5">
            <main class="col-md-9 col-lg-10 px-md-4" style="padding-top:50px">
                <div class="row">
                    <!-- Participant Card -->
                    <div class="col-md-3">
                        <div class="dashboard-card participant-card">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h3>Total Participants</h3>
                            <p>500</p>
                        </div>
                    </div>

                    <!-- Sponsors Card -->
                    <div class="col-md-3">
                        <div class="dashboard-card sponsor-card">
                            <i class="fa fa-handshake" aria-hidden="true"></i>
                            <h3>Total Sponsors</h3>
                            <p>20</p>
                        </div>
                    </div>

                    <!-- Posters Card -->
                    <div class="col-md-3">
                        <div class="dashboard-card poster-card">
                            <i class="fa fa-file-image" aria-hidden="true"></i>
                            <h3>Total Posters Submitted</h3>
                            <p>100</p>
                        </div>
                    </div>

                    <!-- Revenue Card -->
                    <div class="col-md-3">
                        <div class="dashboard-card revenue-card">
                            <i class="fa fa-dollar" aria-hidden="true"></i>
                            <h3>Total Revenue</h3>
                            <p>$5,000</p>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:50px;margin-bottom:50px;">
                    <div class="col-md-6">
                        <div class="dashboard-chart">
                            <canvas id="pieChart" width="200" height="200"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dashboard-chart">
                            <canvas id="barChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>
</div>
<script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Create a pie chart
                    var pieData = {
                        labels: ['Participants', 'Sponsors', 'Speakers', 'Others'],
                        datasets: [{
                            data: [300, 50, 75, 25], // Replace with your actual data
                            backgroundColor: ['#FF5733', '#33FF57', '#3366FF', '#FF3366'] // Define colors for each section
                        }]
                    };

                    var pieCtx = document.getElementById('pieChart').getContext('2d');
                    new Chart(pieCtx, {
                        type: 'pie',
                        data: pieData,
                        options: {
                            responsive: true,
                        }
                    });

                    // Create a bar chart
                    var barData = {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        datasets: [{
                            label: 'Monthly Registrations',
                            data: [30, 45, 60, 75, 90, 60, 45, 30, 75, 90, 45, 30],
                            backgroundColor: 'rgba(51, 102, 255, 0.5)', // Change the bar color and opacity
                            borderColor: 'rgba(51, 102, 255, 1)', // Change the border color
                            borderWidth: 1, // Adjust the border width
                        }]
                    };

                    var barCtx = document.getElementById('barChart').getContext('2d');
                    new Chart(barCtx, {
                        type: 'bar',
                        data: barData,
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
                });
            </script>