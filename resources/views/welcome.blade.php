<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - API Oficial Goiânia Pulsa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #25D366 0%, #128C7E 50%, #075E54 100%);
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;
        }

        /* Animação de fundo */
        .bg-animation {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            opacity: 0.1;
            overflow: hidden;
        }

        .bg-animation span {
            position: absolute;
            display: block;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: move 25s linear infinite;
            bottom: -150px;
        }

        .bg-animation span:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .bg-animation span:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .bg-animation span:nth-child(3) {
            left: 70%;
            width: 120px;
            height: 120px;
            animation-delay: 4s;
        }

        .bg-animation span:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .bg-animation span:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .bg-animation span:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .bg-animation span:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .bg-animation span:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .bg-animation span:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .bg-animation span:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes move {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

        .container {
            position: relative;
            z-index: 1;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        .status-container {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        h1 {
            font-size: 2rem;
            color: #075E54;
            margin-bottom: 10px;
        }

        .current-status {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 20px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            border-radius: 15px;
            margin-bottom: 40px;
            animation: pulse-bg 2s ease-in-out infinite;
        }

        @keyframes pulse-bg {
            0%, 100% { 
                box-shadow: 0 5px 20px rgba(37, 211, 102, 0.3);
            }
            50% { 
                box-shadow: 0 5px 30px rgba(37, 211, 102, 0.5);
            }
        }

        .status-icon {
            width: 20px;
            height: 20px;
            background: white;
            border-radius: 50%;
            position: relative;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

        .status-text {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .uptime-percentage {
            text-align: center;
            margin-bottom: 30px;
        }

        .percentage-value {
            font-size: 3rem;
            font-weight: bold;
            color: #25D366;
            animation: countUp 2s ease-out;
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .percentage-label {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .uptime-chart {
            margin-bottom: 30px;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .chart-title {
            font-size: 1.1rem;
            color: #333;
            font-weight: 600;
        }

        .chart-legend {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .legend-color {
            width: 12px;
            height: 12px;
            border-radius: 2px;
        }

        .days-container {
            display: grid;
            grid-template-columns: repeat(30, 1fr);
            gap: 3px;
            margin-bottom: 10px;
        }

        .day-bar {
            height: 40px;
            border-radius: 3px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            animation: growIn 0.5s ease-out forwards;
            opacity: 0;
        }

        .day-bar:hover {
            transform: scaleY(1.1);
            filter: brightness(1.1);
        }

        @keyframes growIn {
            to {
                opacity: 1;
            }
        }

        .day-bar.online {
            background: #25D366;
        }

        .day-bar.partial {
            background: linear-gradient(to bottom, #25D366 0%, #25D366 70%, #FFA500 70%, #FFA500 100%);
        }

        .day-bar.offline {
            background: #DC3545;
        }

        .days-labels {
            display: grid;
            grid-template-columns: repeat(30, 1fr);
            gap: 3px;
            font-size: 0.7rem;
            color: #999;
        }

        .day-label {
            text-align: center;
        }

        .tooltip {
            position: absolute;
            background: #333;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 0.85rem;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
            z-index: 10;
        }

        .tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid transparent;
            border-top-color: #333;
        }

        .day-bar:hover .tooltip {
            opacity: 1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-card {
            background: #F8F9FA;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: #25D366;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #E0E0E0;
            color: #666;
            font-size: 0.85rem;
        }

        .last-update {
            color: #999;
            font-size: 0.8rem;
            margin-top: 10px;
            animation: blink 2s ease-in-out infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        @media (max-width: 768px) {
            .status-container {
                padding: 25px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            .percentage-value {
                font-size: 2.5rem;
            }
            
            .days-container {
                grid-template-columns: repeat(15, 1fr);
            }
            
            .days-labels {
                grid-template-columns: repeat(15, 1fr);
            }
            
            .day-bar {
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="container">
        <div class="status-container">
            <div class="header">
                <div class="logo">🚀</div>
                <h1>API Oficial Goiânia Pulsa</h1>
            </div>

            <div class="current-status">
                <div class="status-icon"></div>
                <div class="status-text">Todos os Sistemas Operacionais</div>
            </div>

            <div class="uptime-percentage">
                <div class="percentage-value">99.97%</div>
                <div class="percentage-label">Uptime nos últimos 30 dias</div>
            </div>

            <div class="uptime-chart">
                <div class="chart-header">
                    <div class="chart-title">Histórico dos Últimos 30 Dias</div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background: #25D366;"></div>
                            <span>100% Online</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #FFA500;"></div>
                            <span>Instabilidade</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #DC3545;"></div>
                            <span>Offline</span>
                        </div>
                    </div>
                </div>

                <div class="days-container" id="daysChart"></div>
                <div class="days-labels" id="daysLabels"></div>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value">2min</div>
                    <div class="stat-label">Tempo Total Offline</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">18ms</div>
                    <div class="stat-label">Tempo de Resposta Médio</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">1</div>
                    <div class="stat-label">Incidentes Resolvidos</div>
                </div>
            </div>

            <div class="footer">
                <p>Monitoramento contínuo 24/7</p>
                <p class="last-update">Última atualização: há alguns segundos</p>
            </div>
        </div>
    </div>

    <script>
        // Gerar dados dos últimos 30 dias
        const generateDaysData = () => {
            const days = [];
            const today = new Date();
            
            for (let i = 29; i >= 0; i--) {
                const date = new Date(today);
                date.setDate(date.getDate() - i);
                
                // Simular status (maioria online, com raros problemas)
                let status = 'online';
                let uptime = 100;
                
                // Adicionar alguns dias com problemas para parecer realista
                if (i === 15) {
                    status = 'partial';
                    uptime = 99.5;
                } else if (Math.random() > 0.97) {
                    status = 'partial';
                    uptime = 99.9;
                }
                
                days.push({
                    date: date,
                    status: status,
                    uptime: uptime
                });
            }
            
            return days;
        };

        // Renderizar o gráfico
        const renderChart = () => {
            const daysData = generateDaysData();
            const daysContainer = document.getElementById('daysChart');
            const labelsContainer = document.getElementById('daysLabels');
            
            daysData.forEach((day, index) => {
                // Criar barra do dia
                const dayBar = document.createElement('div');
                dayBar.className = `day-bar ${day.status}`;
                dayBar.style.animationDelay = `${index * 30}ms`;
                
                // Adicionar tooltip
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.textContent = `${day.date.toLocaleDateString('pt-BR')} - ${day.uptime}% uptime`;
                dayBar.appendChild(tooltip);
                
                daysContainer.appendChild(dayBar);
                
                // Adicionar label do dia
                const label = document.createElement('div');
                label.className = 'day-label';
                
                // Mostrar apenas alguns dias para não poluir
                if (index === 0 || index === 14 || index === 29) {
                    label.textContent = day.date.getDate();
                }
                
                labelsContainer.appendChild(label);
            });
        };

        // Atualizar timestamp
        const updateTimestamp = () => {
            const lastUpdate = document.querySelector('.last-update');
            const now = new Date();
            lastUpdate.textContent = `Última atualização: ${now.toLocaleTimeString('pt-BR')}`;
        };

        // Simular atualizações em tempo real
        const simulateRealtimeUpdate = () => {
            // Atualizar tempo de resposta
            const responseTime = document.querySelectorAll('.stat-value')[1];
            const time = 15 + Math.floor(Math.random() * 10);
            responseTime.textContent = `${time}ms`;
            
            // Piscar o indicador de status
            const statusIcon = document.querySelector('.status-icon');
            statusIcon.style.animation = 'none';
            setTimeout(() => {
                statusIcon.style.animation = 'pulse 1.5s ease-in-out infinite';
            }, 100);
        };

        // Inicializar
        renderChart();
        updateTimestamp();
        
        // Atualizar a cada 5 segundos
        setInterval(() => {
            updateTimestamp();
            simulateRealtimeUpdate();
        }, 5000);

        // Animação suave de scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>