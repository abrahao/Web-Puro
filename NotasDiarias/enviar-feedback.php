<!-- Notas Diárioas -->
<!-- Github: https://github.com/abrahao/Web-Puro/tree/main/NotasDiarias -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário</title>
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

        input[type="text"],
        textarea {
            width: 100%;
            font-size: 18px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        textarea {
            height: 300px;
            font-size: 16px;
            resize: none;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        /* Media queries for responsiveness */
        @media (max-width: 600px) {
            main {
                padding: 10px;
            }
        }

        @media (max-width: 400px) {

            input[type="text"],
            textarea {
                font-size: 16px;
                padding: 8px;
            }

            button {
                padding: 8px 16px;
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

        a[href="enviar-feedback.php"] {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            background-color: #fff;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a[href="enviar-feedback.php"]:hover {
            background-color: #333;
            color: #fff;
        }

        /* Updated CSS */
        .link-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .left-link {
            order: 1;
        }

        .right-link {
            order: 2;
        }
    </style>
    <style>
        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
        }

        #feedbackMessage {
            margin-top: 20px;
        }
    </style>


</head>

<body>
    <header>
        <h1>Notas Diárias</h1>
    </header>

    <main>
        <form id="feedbackForm" method="post">
            <div class="link-container">
                <a href="index.php" class="left-link">Voltar</a>
            </div>
            <br><br>
            <textarea id="feedback" name="feedback" placeholder="Escreva seu feedback aqui..."></textarea>
            <button type="submit" name="submit">Enviar</button>
        </form>
        <div id="feedbackMessage">
            <!-- A mensagem de sucesso ou erro será inserida aqui. -->
        </div>

    </main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $to = "abrahao.eneias@icloud.com";

        $subject = "Feedback do App Notas Diárias";
        $message = $_POST["feedback"];

        if (mail($to, $subject, $message)) {
            echo '<div id="feedbackMessage" class="success-message">O feedback foi enviado com sucesso. Obrigado!</div>';
        } else {
            echo '<div id="feedbackMessage" class="error-message">Desculpe, houve um erro ao enviar o feedback.</div>';
        }
    }
    ?>

    <footer>
        <p>&copy; 2023 - <span id="currentYear"></span> Abrahão Eneias</p>
    </footer>
</body>


</html>