<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Menu no topo -->
    @include('partials.navbar')

    <!-- Container principal -->
    <div class="dashboard-container">

        <h1>Lista de Genéticas (Strains)</h1>
        <br>
         <!-- Tabela adicionada -->
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Strain</th>
                    <th style="text-align:center;">N°Culturas</th>
                    <th style="text-align:center;"> Admin</th>
                    <th style="text-align:center;"> Data </th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($strains as $strain)
                <tr>
                    
                    <td style="width:1%;text-align:center;"> {{ $strain->id }} </td>
                    <td style="width:25%;text-align:left;"> <b>  {{ $strain->nome }} </b> </td>
                    
                    <td style="width:1%;text-align:center; color: {{ $strain->culturas->count() == 0 ? 'red' : 'inherit' }};"> {{ $strain->culturas->count() }} </td>
                    <td style="width:1%;text-align:center;"> <a href="{{ route('culturas', ['strainSigla' => $strain->sigla]) }}" style="
    background: #bc008c;
    display: block;
    color: #ffffff;
    text-decoration: none;
    padding: 10px;
">Gerenciar</a>  </td>
                    <td style="width:2%;text-align:center;">{{ \Carbon\Carbon::parse($strain->dataCriacao)->format('d/m/Y') }}</td>

                </tr>
            @endforeach
              


                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>

        
    </div>
</body>
</html>
