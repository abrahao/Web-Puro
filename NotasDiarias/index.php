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

        a[href="como-funciona.php"] {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            background-color: #fff;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a[href="como-funciona.php"]:hover {
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
</head>

<body>
    <header>
        <h1>Notas Diárias</h1>
    </header>
    <main>
        <div class="link-container">
            <a href="como-funciona.php" class="left-link">Sobre</a>
            <a href="enviar-feedback.php" class="right-link">Enviar Feedback</a>
        </div>
        <br><br>
        <input type="text" id="titulo" placeholder="Título">
        <textarea id="diario" placeholder="Escreva suas notas aqui..."></textarea>
        <button id="salvar">Salvar</button>
    </main>


    <footer>
        <p>&copy; 2023 - <span id="currentYear"></span> Abrahão Eneias</p>
    </footer>

    <script>
        const tituloInput = document.getElementById('titulo');
        const diarioTextarea = document.getElementById('diario');
        const salvarButton = document.getElementById('salvar');

        salvarButton.addEventListener('click', function () {
            const titulo = tituloInput.value;
            const diarioTexto = diarioTextarea.value.trim(); // Remove espaços em branco no início e no fim

            if (diarioTexto) {
                // Obtém a data e hora atuais
                const dataAtual = new Date();
                const dia = dataAtual.getDate().toString().padStart(2, '0');
                const mes = (dataAtual.getMonth() + 1).toString().padStart(2, '0');
                const ano = dataAtual.getFullYear();
                const hora = dataAtual.getHours().toString().padStart(2, '0');
                const minuto = dataAtual.getMinutes().toString().padStart(2, '0');

                // Define o nome do arquivo com base na data e hora
                const nomeArquivo = `${dia}-${mes}-${ano}_${hora}h-${minuto}min.txt`;

                // Conteúdo do arquivo a ser salvo
                const data_hora = `${dia}/${mes}/${ano} - ${hora}:${minuto}`;
                const conteudoArquivo = `${data_hora}\n\nTítulo: ${titulo}\n\nNota:\n${diarioTexto}`;

                downloadDiario(conteudoArquivo, nomeArquivo);
            }
            tituloInput.value = '';
            diarioTextarea.value = '';
        });

        function downloadDiario(text, filename) {
            const blob = new Blob([text], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = filename;

            a.style.display = 'none';
            document.body.appendChild(a);

            a.click();

            window.URL.revokeObjectURL(url);
        }

        const currentYearElement = document.getElementById("currentYear");
        const currentYear = new Date().getFullYear();
        currentYearElement.textContent = currentYear;

    </script>

</body>

</html>