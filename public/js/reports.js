document.addEventListener('DOMContentLoaded', function() {
    // --- Donations Bar Chart ---
    const donationsCtx = document.getElementById('donationsBarChart').getContext('2d');
    new Chart(donationsCtx, {
        type: 'bar',
        data: {
            labels: ['APR', 'MAY', 'JUN', 'JUL', 'SEP', 'AUG'], // Based on image labels
            datasets: [{
                label: 'Donations',
                data: [150000, 160000, 175000, 210000, 215000, 205000], // Approximate values from image
                backgroundColor: 'var(--chart-bar-color)', // Using CSS variable
                borderRadius: 8, // Rounded bars
                barThickness: 35, // Adjust bar thickness
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false // Hide legend
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return '₱' + context.raw.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true,
                        color: '#f0f0f0', // Light grid lines
                    },
                    ticks: {
                        callback: function(value) {
                            if (value >= 1000) return '₱' + (value / 1000).toLocaleString() + 'K';
                            return '₱' + value;
                        },
                        color: '#757575'
                    }
                },
                x: {
                    grid: {
                        display: false // Hide x-axis grid lines
                    },
                    ticks: {
                        color: '#757575'
                    }
                }
            }
        }
    });

    // --- Campaigns by Category Pie Chart ---
    const pieCtx = document.getElementById('campaignPieChart').getContext('2d');
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Tuition Fee', 'Emergency Fund', 'Living Essentials', 'Health Assistance', 'Learning Materials'],
            datasets: [{
                data: [45, 24, 28, 18, 32], // Values from your image text
                backgroundColor: [
                    'var(--chart-pie-color-1)',
                    'var(--chart-pie-color-2)',
                    'var(--chart-pie-color-3)',
                    'var(--chart-pie-color-4)',
                    'var(--chart-pie-color-5)',
                ],
                borderColor: '#ffffff', // White borders between slices
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false // Hide legend as numbers are on the chart
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed !== null) {
                                label += context.parsed;
                            }
                            return label;
                        }
                    }
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }
        }
    });
}); 