<head>
    <link rel="stylesheet" href="/css/app.css">
</head>

<div>
    <h1>Lista de Peixes</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th></th>
                    <th>Criado em</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peixes as $peixe)
                    <tr>
                        <td>{{ $peixe->id }}</td>
                        <td>{{ $peixe->nome }}</td>
                        <td>&nbsp;&nbsp;</td>
                        <td>{{ $peixe->created_at}}</td>
                        <td>
                        <a href="{{ route('peixes.editar', ['id' => $peixe->id]) }}" class="botao-editar">Editar</a>
                            <form method="POST" action="{{ route('peixes.deletar', ['id' => $peixe->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="botao-deletar"onclick="return confirm('Tem certeza?')">Deletar</button>
                             </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <br>
            <a href="{{ route('peixes.paginaCriacao') }}" class="botao-criar">Criar Peixe</a>
        </div>
    </div>
    <div class="text-center">
        <a href="/" class="btn btn-secondary">Voltar</a>
    </div>
</div>

