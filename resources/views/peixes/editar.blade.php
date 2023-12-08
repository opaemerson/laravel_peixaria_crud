<head>
    <link rel="stylesheet" href="/css/app.css">
</head>

<div>
    <h1>Editar Peixe</h1>
    <form action="{{ route('peixes.atualizar', ['id' => $peixe->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $peixe->nome }}" required>
        </div>

        <div>
            <br>
            <button type="submit" class="botao-criar">Salvar</button>
            <br><br>
            <a href="{{ route('peixes.index') }}" class="botao-deletar">Cancelar</a>
        </div>
    </form>
</div>