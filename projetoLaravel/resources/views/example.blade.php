<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form>
            @csrf
            <p>Opa, você está na rota example</p>
            <input id="n1" placeholder="Digite o número 1"/>
            <input id="n2" placeholder="Digite o número 2"/>
            <button type="button" onclick="calcular()">Calcular soma</button>
        </form>
            <p id="result"></p>
    </div>
    <script>
        async function calcular() {
            const num1 = Number(document.getElementById("n1").value);
            const num2 = Number(document.getElementById("n2").value);

            const response = await fetch('/calcularSoma', {
                method:'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({num1,num2})
            })

            const data = await response.json();

            document.getElementById("result").innerHTML = 'Resultado =' + data.soma;
        }
    </script>
</body>
</html>
