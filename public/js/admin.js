document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('donationsChart').getContext('2d');

    // Data points are calculated based on the image's vertical placement and labels.
    const chartData = {
        labels: ['SUN', 'MON', 'TUES', 'WEDS', 'THURS', 'FRI', 'SAT'],
        datasets: [{
            label: 'Donations',
            data: [5521, 5888, 3967, 2744, 5604, 8403, 9962],
            backgroundColor: 'rgba(76, 88, 223, 0.1)', // Light fill for the area under the line
            borderColor: '#4C58DF', // The primary line color
            borderWidth: 3,
            tension: 0.4, // Smooth curve
            pointRadius: 6, 
            pointBackgroundColor: '#4C58DF',
            pointBorderColor: '#fff',
            pointHoverRadius: 8,
            fill: true,
            
        }]
    };

    // Custom labels array matching the image's values
    const customLabels = [
        { amount: '5,521', percent: '13.2%' },
        { amount: '5,888', percent: '14.0%' },
        { amount: '3,967', percent: '9.4%' },
        { amount: '2,744', percent: '6.5%' },
        { amount: '5,604', percent: '13.3%' },
        { amount: '8,403', percent: '19.9%' },
        { amount: '9,962', percent: '23.6%' },
    ];

    const donationsChart = new Chart(ctx, {
        type: 'line',
        data: chartData,
        options: {
            maintainAspectRatio: false, // Allows chart to fit in its container
            plugins: {
                legend: {
                    display: false // Hide the dataset legend
                },
                tooltip: {
                    enabled: false, // Disable default tooltips
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 10000, // Max value slightly above the highest data point (9962)
                    ticks: {
                        stepSize: 1000,
                        callback: function(value, index, ticks) {
                            return index === 0 ? '' : value.toLocaleString(); // Format Y-axis ticks
                        }
                    },
                    grid: {
                        drawBorder: false,
                    }
                },
                x: {
                    grid: {
                        display: false // Hide vertical grid lines
                    }
                }
            },
            
            // Custom drawing to recreate the data labels above the points
            plugins: [
                {
                    id: 'customDataLabels',
                    afterDatasetsDraw(chart, args, options) {
                        const { ctx, data, scales: { x, y } } = chart;
                        ctx.save();
                        
                        data.datasets[0].data.forEach((datapoint, index) => {
                            const { amount, percent } = customLabels[index];
                            const xPos = x.getPixelForValue(index);
                            const yPos = y.getPixelForValue(datapoint);

                            // Draw Amount Label
                            ctx.fillStyle = '#333';
                            ctx.font = '600 1rem Inter';
                            ctx.textAlign = 'center';
                            ctx.fillText(amount, xPos, yPos - 30);
                            
                            // Draw Percentage Label
                            ctx.fillStyle = '#777';
                            ctx.font = '0.9rem Inter';
                            ctx.fillText(percent, xPos, yPos - 10);
                        });
                        
                        ctx.restore();
                    }
                }
            ]
        }
    });
});