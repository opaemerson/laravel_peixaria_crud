<head>
    <link rel="stylesheet" href="/css/app.css">
</head>


<div>
    <h1 class="text-center">Criar Peixe</h1>
    <form action="{{ route('peixes.peixecriado') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="d-flex justify-content-between">

        <div>
            <br>
                <button type="submit" class="botao-criar">Criar</button>
            </div>
        </div>
    </form>
    <div>
                <a href="{{ route('peixes.index') }}" >Voltar</a>
            </div>
</div>

