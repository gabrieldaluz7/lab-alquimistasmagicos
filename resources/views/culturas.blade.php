<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="{{ asset('fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('fontawesome/css/solid.css') }}" rel="stylesheet" />

    
</head>
<body>
    <!-- Menu no topo -->
    @include('partials.navbar')

    <!-- Container principal -->
    <div class="dashboard-container">

        <h1>Gerenciador de Culturas Vivas </h1>
        <br>
         <!-- Tabela adicionada -->
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">Sigla</th>
                    <th style="text-align:center;">Strain</th>
                    <th style="text-align:center;">Tipo</th>
                    <th style="text-align:center;">Obs</th>
                    <th style="text-align:center;">Filhos</th>
                    <th style="text-align:center;"> Gerenciar</th>
                    <th style="text-align:center;">Data</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($culturas as $cultura)
                <tr>
                    
                    <td style="width:5%;text-align:center;"> {{ $cultura->id }} </td>
                    <td style="width:1%;text-align:center;">

                        @if ($cultura->status == 0)
                        <i class="fa-solid fa-circle" style="color: red;"></i> <!-- Círculo vermelho -->
                        @elseif ($cultura->status == 1)
                            <i class="fa-solid fa-circle" style="color: #27f915;"></i> <!-- Círculo verde -->
                        @else
                            <i class="fa-solid fa-circle" style="color: gray;"></i> <!-- Opcional: círculo cinza -->
                        @endif
                        
                    </td>
                    <td style="width:5%;text-align:center;"> {{ $cultura->strain->sigla }} </td>

                    <td style="width:25%;text-align:left;"> <b> {{ $cultura->strain->nome }} </b> </td>
                    <td style="width:15%;text-align:center;">
                    @if($cultura->tipo == 'liquida')
                        Cultura Líquida
                    @elseif($cultura->tipo == 'solida')
                        Cultura Sólida
                    @else
                        {{ $cultura->tipo }}
                    @endif
                    </td>
                    <td style="width:30%;text-align:center;">{{ $cultura->observacao }}</td>
                    <td style="width:5%;text-align:center; color: {{ $cultura->filhos->count() > 0 ? '#00f8ff' : 'red' }};"> <b>{{ $cultura->filhos->count() }}</b> </td>
                    <td style="width:10%;text-align:center;"> <a href="{{ route('cultura.show', $cultura->id) }}" style="
    background: #bc008c;
    display: block;
    color: #ffffff;
    text-decoration: none;
    padding: 10px;
">Gerenciar</a>  </td>
                    <td style="width:10%;text-align:center;">{{ \Carbon\Carbon::parse($cultura->dataCriacao)->format('d/m/Y') }}</td>

                </tr>
            @endforeach
              


                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>

        
    </div>
</body>
</html>
