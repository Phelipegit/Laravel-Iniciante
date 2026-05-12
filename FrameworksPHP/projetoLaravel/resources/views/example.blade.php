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
            <select id="select">
                <option value="x">x</option>
                <option value="+">+</option>
                <option value="-">-</option>
            </select>
            <input id="n1" placeholder="Digite o número 1"/>
            <input id="n2" placeholder="Digite o número 2"/>
            <button type="button" onclick="calcular()">Calcular soma</button>
        </form>
            <p id="result"></p>
    </div>
    <div>
        <input id="nome" placeholder="Insira o nome do produto"/>
        <input id="valor" placeholder="Insira o valor do produto"/>
        <button onclick="criarNovoProduto()">Criar</button>
        <p id="result_lista"></p>
    </div>

    <div>
        <p id="all"></p>
    </div>

    <div>
        <button onclick="deletarTudo()">Deletar Tudo</button>
    </div>
    <script>
        async function deletarTudo() {
            await fetch('/deletarAll', {
               method:'DELETE',
               headers: {
                   'Content-Type': 'application/json',
                   'X-CSRF-TOKEN': '{{ csrf_token() }}'
               }
            });
        }
        async function calcular() {
            const num1 = Number(document.getElementById("n1").value);
            const num2 = Number(document.getElementById("n2").value);
            const select = document.getElementById("select").value;

            const response = await fetch('/calcularSoma', {
                method:'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({num1,num2,select})
            })

            const data = await response.json();

            document.getElementById("result").innerHTML = 'Resultado =' + data.result;
        }
        async function criarNovoProduto() {
            const nome = (document.getElementById("nome").value);
            const valor = (document.getElementById("valor").value);

            const response = await fetch('/criarNovoProduto', {
                method:'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({nome,valor})
            })

            const data = await response.json();

            document.getElementById("result_lista").innerHTML = data.response;
        }

        document.addEventListener('DOMContentLoaded', async () => {
            const response = await fetch('/pegarProdutosAll');
            const data = await response.json();
            data.forEach(produto => {
                document.getElementById("all").innerHTML += `<p>${produto.nome} - ${produto.preco}</p>`;
            })
        });
    </script>
</body>
</html>
