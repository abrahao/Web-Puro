<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como o Site Funciona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
        }

        /* Media queries for responsiveness */
        @media (max-width: 600px) {
            main {
                padding: 10px;
            }
        }

        @media (max-width: 400px) {
            p {
                font-size: 16px;
            }
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        a[href="index.php"] {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            background-color: #fff;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a[href="index.php"]:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Como o Site Funciona</h1>
    </header>
    <main>
        <a href="index.php">Voltar</a>
<br>
        <p>Este site permite que você crie e salve notas diárias.</p>
        <ol>
            <li>Preencha o campo "Título" com um título para a sua nota. Campo não obrigatório.</li>
            <li>Use o campo "Escreva suas notas aqui..." para digitar o conteúdo da sua nota diária.</li>
            <li>Clique no botão "Salvar" para salvar a nota.</li>
            <li>Uma vez salva, a nota será armazenada em um arquivo de texto para download.</li>
            <li>Visando a sua privacidade o arquivo gerado não será salvo em nenhum banco de dados, será apenas em seu dispositivo</li>
        </ol>
    </main>
    <footer>
        <p>&copy; 2023 - <span id="currentYear"></span> Abrahão Eneias</p>
    </footer>
    <script>
        const currentYearElement = document.getElementById("currentYear");
        const currentYear = new Date().getFullYear();
        currentYearElement.textContent = currentYear;
    </script>
</body>
</html>
