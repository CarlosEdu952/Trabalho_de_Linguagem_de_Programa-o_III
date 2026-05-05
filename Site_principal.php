<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusDigital - Iniciando</title>

    <style>
        body {
            background: #f5ecd9;
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(90,59,28,0.06) 10%, transparent 60%);
            animation: moveBg 25s linear infinite;
            pointer-events: none;
        }

        @keyframes moveBg {
            from { transform: translate(0,0); }
            to { transform: translate(-60px, -60px); }
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .box {
            background: #fffaf0;
            padding: 40px;
            border: 3px solid #5a3b1c;
            box-shadow: 6px 6px 15px rgba(0,0,0,0.3);
            width: 450px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #3b2a1a;
            margin-bottom: 10px;
            animation: pulse 2.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.03); }
        }

        p {
            color: #5a3b1c;
            margin-bottom: 20px;
        }

        .loader {
            width: 100%;
            height: 10px;
            border: 2px solid #5a3b1c;
            margin-bottom: 25px;
            background: #f5ecd9;
            overflow: hidden;
        }

        .bar {
            height: 100%;
            width: 0%;
            background: #5a3b1c;
            animation: load 3s ease forwards;
        }

        @keyframes load {
            from { width: 0%; }
            to { width: 100%; }
        }

        .info {
            text-align: left;
            font-size: 14px;
            color: #3b2a1a;
            margin-top: 10px;
            line-height: 1.5;
            background: rgba(245, 236, 217, 0.5);
            padding: 10px;
            border: 1px solid #5a3b1c;
        }

        .info strong {
            color: #2a1d12;
        }

        /* MENU FIXO */
        .menu {
            position: fixed;
            bottom: 20px;
            left: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 10;
        }

        .menu a {
            background: #5a3b1c;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            font-size: 14px;
            border: 2px solid #3b2a1a;
            box-shadow: 3px 3px 0 #2a1d12;
            transition: 0.2s;
        }

        .menu a:hover {
            background: #3b2a1a;
            transform: translateX(3px);
        }

        .menu a:active {
            transform: translateX(1px);
            box-shadow: 1px 1px 0 #2a1d12;
        }

        /* EASTER EGG NO TÍTULO */
        .easter-inline {
            font-size: 12px;
            margin-left: 8px;
            text-decoration: none;
            color: transparent;
            opacity: 0.25;
            transition: 0.3s;
        }

        .easter-inline:hover {
            color: #3b2a1a;
            opacity: 1;
        }

        .box::after {
            content: "";
            position: absolute;
            top: -100%;
            left: -50%;
            width: 200%;
            height: 300%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255,255,255,0.2),
                transparent
            );
            transform: rotate(25deg);
            animation: shine 6s infinite;
            pointer-events: none;
        }

        @keyframes shine {
            0% { top: -100%; }
            100% { top: 100%; }
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="box">

            <h1>
                NexusDigital
                <a href="https://www.friv.com/" class="easter-inline" title="...">.</a>
            </h1>

            <p>Sistema inicializando ambiente seguro...</p>

            <div class="loader">
                <div class="bar"></div>
            </div>

            <div class="info">
                <strong>Fatos do sistema:</strong><br>
                • Interface inspirada em sistemas clássicos dos anos 70<br>
                • Estrutura leve e otimizada para navegação rápida<br>
                • Design baseado em papel e estética vintage<br>
                • Segurança básica de sessão integrada<br><br>

                <strong>Características:</strong><br>
                • Estilo visual retrô (bege e marrom)<br>
                • Animações suaves e não intrusivas<br>
                • Experiência focada em simplicidade<br>
                • Navegação direta e funcional
            </div>

        </div>
    </div>

    <!-- MENU -->
    <div class="menu">
        <a href="Login.php">Sair</a>
    </div>

</body>
</html>