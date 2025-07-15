@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #EDE9E3;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #A38F85;
        margin-top: 20px;
    }

    .search-form {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        
    }

    .search-input {
        width: calc(50% - 16px);
        padding: 10px;
        border: 1px solid #A38F85;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 20px;
        width: 30%;
        margin-left: 58%;
    }

    .search-button {
        width: 100px;
        padding: 10px;
        background-color: #A38F85;
        color: #EDE9E3;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: #CDC6C3;
    }

    .btn-success {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #D4B2A7;
        color: #EDE9E3;
        text-decoration: none;
        padding: 10px;
        border-radius: 4px;
        margin: 35px ;
        width: 15%;
    }

    .btn-success:hover {
        background-color: #E7D7C9;
    }

    .custom-table {
        margin-top: 20px;
        margin: 0 auto;
        width: 90%;
        border-collapse: collapse;
    }

    table {
        width: 90%;
    }

    th, td {
        border: 1px solid #CDC6C3;
        padding: 10px;
        text-align: center;
        height: 130px;
    }

    th {
        background-color: #A38F85;
        color: #EDE9E3;
    }

    .small-image {
        width: 30px;
        margin-left: 10px;
    }

    .image-button {
        border: none;
        background: none; 
        padding: 0;
    }

    .form-container {
        display: flex;
    }

    .form-inline {
        margin-right: 10px;
        padding-top: 40px;
        padding-bottom: 41px;
    }
    
</style>
@endsection

<x-master title="Page d'accueil">
    <h1><strong>Factures</strong></h1>
    <form action="{{ route('search') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="search-input" placeholder="Recherche..." name="search">
            <button class="search-button" type="submit">Rechercher</button>
        </div>
    </form>
    <a class="btn-success" href="{{ route('factures.create') }}">Ajouter Facture <img src="{{ asset('images/add.png') }}" alt="Voir Facture" class="small-image"></a>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom Complet</th>
                    <th>Date</th>
                    <th>Monture</th>
                    <th>Qté de Monture</th>
                    <th>Prix TTC de Monture</th>
                    <th>OD & OG</th>
                    <th>Qté de OD</th>
                    <th>Prix TTC de OD</th>
                    <th>Qté de OG</th>
                    <th>Prix TTC de OG</th>
                    <th>Description de OD</th>
                    <th>Description de OG</th>
                    <th>Facture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if(isset($results) && count($results) > 0)
                @foreach($results as $facture)
                    <x-factureCard :facture="$facture"/>
                @endforeach
            @elseif(isset($factures) && count($factures) > 0)
                @foreach($factures as $facture)
                    <x-factureCard :facture="$facture"/>
                @endforeach
            @else
                <tr>
                    <td colspan="14" class="text-center">Aucune facture trouvée.</td>
                </tr>
            @endif
        </table>
</x-master>
