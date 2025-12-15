<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @include('partials.navbar')
        </h1>
    </x-slot>
    <div>
        <div class="border-10 border-gray-300 p-4 rounded-3xl">
            <h1 class="text-center text-3xl font-bold">Results for {{ $session->user->name }}</h1>
            <p class="text-center text-2xl">Recorded on: {{ $session->created_at->format('Y-m-d H:i') }}</p>
            <div class="grid grid-cols-2 mt-6">
                <div>

                </div>
                <div class="mt-6">
                    <canvas id="radarChart" width="550" height="550"></canvas>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/Chart.min.js') }}"></script>
        <script>
            const sessionData = @json($session);

            const labels = ['Pitch level', 'Pitch variability', 'Articulation', 'Energy', 'Pauses'];
            const dataValues = [
                sessionData.meanF0,
                sessionData.F0std,
                sessionData.meanF1,
                sessionData.H1minusA3,
                sessionData.pauseCount
            ];

        document.fonts.ready.then(() => {
            Chart.defaults.font.family = 'Poppins';

            const ctx = document.getElementById('radarChart').getContext('2d');
            new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Session Value',
                        data: dataValues,
                        backgroundColor: 'rgba(7, 7, 7, 0.6)',
                        borderColor: 'rgba(14, 16, 14, 1)',
                        borderWidth: 1,
                        pointBackgroundColor: '#020302ff',
                        pointRadius: 8,    
                        pointHoverRadius: 12 
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            enabled: true
                        }
                    },
                    scales: {
                        r: {
                            min: 0,
                            max: 5,
                            ticks: {
                                stepSize: 1,
                                font: {family: 'Poppins', size: 16 },
                                showLabelBackdrop: false
                            },
                            pointLabels: {
                                font: {
                                    family: 'Poppins',
                                    size: 24
                                }
                            },
                            grid: {
                                circular: true
                            }
                        }
                    }
                },
                plugins: [
                    {
                        id: 'zoneBackground',
                        beforeDraw: (chart) => {
                            const { ctx, scales } = chart;
                            const rScale = scales.r;
                            const centerX = rScale.xCenter; 
                            const centerY = rScale.yCenter;

                            const zones = [
                                { max: 1, color: 'rgba(255, 0, 0, 1)' },       
                                { max: 2, color: 'rgba(255, 232, 22, 1)' },     
                                { max: 3, color: 'rgba(1, 209, 1, 1)' },      
                                { max: 4, color: 'rgba(255, 232, 22, 1)' },     
                                { max: 5, color: 'rgba(255, 0, 0, 1)' }        
                            ];

                            for (let i = zones.length - 1; i >= 0; i--) {
                                const zone = zones[i];
                                const radius = (zone.max / rScale.max) * rScale.drawingArea;
                                ctx.beginPath();
                                ctx.arc(centerX, centerY, radius, 0, Math.PI * 2);
                                ctx.fillStyle = zone.color;
                                ctx.fill();
                            }
                        }
                    }
                ]
            });
        });
        </script>
    </div>
</x-app-layout>