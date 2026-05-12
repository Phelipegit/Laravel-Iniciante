<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

</head>
<body>

<p>oi</p>
<input id="nome" placeholder="Digite seu nome"/>
<input id="senha" placeholder="Digite sua senha"/>
<button onclick="devolver()"></button>
<p id="mensagem"></p>




<button onclick="recolherDadosDB()">Recolher dados</button>


<p id="dados"></p>
<script>

    async function recolherDadosDB() {
        const response = await fetch('/all');

        const data = await response.json();

        data.all.forEach(usuario => {
            document.getElementById("dados").innerHTML += `<p>${usuario.nome} = ${usuario.password}</p>`
        })
    }

    async function devolver() {
        const nome = document.getElementById("nome").value;
        const senha = document.getElementById("senha").value;
        const response = await fetch('/register', {
            method: 'POST',
            headers: {
                'Content-Type':'application/json'
            },
            body:JSON.stringify({"nome":nome,"senha":senha})
        });

        const data = await response.json();

        document.getElementById("mensagem").innerHTML = data.response;
    }
</script>


</body>
</html>
