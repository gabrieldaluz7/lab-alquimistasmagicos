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
    <nav class="navbar">
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Carimbos</a></li>
            <li><a href="#">Cultura Sólida</a></li>
            <li><a href="#">Cultura Líquida</a></li>
            <li><a href="#">Spawn</a></li>
            <li><a href="#">Monotube</a></li>
            <li><a href="#">Casing</a></li>
            <li><a href="{{ route('logout') }}">Sair</a></li>
        </ul>
    </nav>

    <!-- Container principal -->
    <div class="dashboard-container">
        <h1>Dashboard</h1>

         <!-- Tabela adicionada -->
        <table class="dashboard-table">
            <!-- <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>DATA</th>
                </tr>
            </thead> -->
            <tbody>
                <tr>
                    <td>Carimbos</td>
                    <td>15</td>
           

                </tr>
                <tr>
                    <td>Seringa de Esporos</td>
                    <td>15</td>
           

                </tr>
                <tr>
                    <td>Swab</td>
                    <td>8</td>
           

                </tr>
                <tr>
                    <td>Cultura Sólida</td>
                    <td>25</td>
           

                </tr>
                <tr>
                    <td>Cultura Liquida</td>
                    <td>0</td>
           

                </tr>

                <tr>
                    <td>Spawn</td>
                    <td>8</td>
           

                </tr>

                <tr>
                    <td>Monotube</td>
                    <td>6</td>
           

                </tr>

                <tr>
                    <td>Casing</td>
                    <td>0</td>
           

                </tr>


                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>

        
    </div>
</body>
</html>
