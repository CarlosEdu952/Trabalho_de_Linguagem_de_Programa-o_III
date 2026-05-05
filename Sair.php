<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção</title>

    <style>
        body {
            background: #f5ecd9;
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        /* leve textura animada */
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
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .box {
            background: #fffaf0;
            padding: 50px;
            border: 3px solid #5a3b1c;
            box-shadow: 6px 6px 15px rgba(0,0,0,0.3);
            width: 400px;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #3b2a1a;
            margin-bottom: 10px;
            animation: blink 2s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        p {
            color: #5a3b1c;
            font-size: 18px;
            margin-bottom: 25px;
        }

        /* engrenagem animada simples */
        .gear {
            font-size: 50px;
            display: inline-block;
            animation: rotate 4s linear infinite;
            margin-bottom: 15px;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        a {
            display: inline-block;
            padding: 12px 25px;
            background: #5a3b1c;
            color: white;
            text-decoration: none;
            font-size: 16px;
            box-shadow: 0 4px 0 #3b2a1a;
            transition: 0.2s;
        }

        a:hover {
            background: #3b2a1a;
            transform: translateY(-2px);
        }

        a:active {
            transform: translateY(2px);
            box-shadow: 0 1px 0 #2a1d12;
        }

        /* brilho suave passando */
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

            <div class="gear">⚙️</div>

            <h1>Site em manutenção</h1>
            <p>Estamos melhorando sua experiência.<br>Voltamos em breve.</p>

            <a href="Site_principal.php">Desculpe estamos com problemas</a>

        </div>
    </div>

</body>
</html>