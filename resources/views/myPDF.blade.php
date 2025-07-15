    @section('style')
    <style>
            body {
                min-height: 100vh;
                margin: 0;
                display: flex;
                flex-direction: column;
                font-family: 'VotrePolice', sans-serif;
            }

            x-master {
                text-align: center;
            }

            .left-container, .right-container {
                text-align: center;
                padding: 10px;
            }

            .left-container {
                float: left;
            }

            .right-container {
                float: right;
            }

            .h6 {
                font-size: 0.75rem;
                font-weight: normal;
                margin-top: 0
            }

            h3, h2 {
                margin-top: 0;
                display: inline;
            }

            h3 {
                font-size: 1.7rem;
            }
            .oo{
                margin-top: 0
            }

            .client, .info {
                border: 1px solid #333;
                border-radius: 10px;
                padding: 10px;
                box-sizing: border-box;
                display: inline-block;
                height: 60px;
                margin-top: 30px;
            }

            .client {
                width: 60%;
                margin-right: 5px;
            }

            .info {
                width: 30%;
                margin-left: 15px;
            }

            #p-info{
                margin-top: 0;
            }

            .date-info {
                width: 30%;
                display: inline-block;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #f2f2f2;
                text-align: center;
            }

            .table2 {
                width: 80%;
                float: right;
            }

            .para {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                width: 100%;
                margin-top: 30px;
            }

            .fin {
                text-align: center;
                font-size: 14px;
                line-height: 1.6;
                margin-top: 20px;
            }

            hr {
                color: #333;
                background-color: #333;
                height: 2px;
                margin: 10px 0;
            }

            .content {
                flex: 1;
            }

            .footer {
                text-align: center;
                margin-top: 300px;
                width: 100%;
                display: flex;
                justify-content: center;
            }
    </style>
    @endsection
    <x-master title="Page d'accueil">
        
        <div class="right-container">
            <h3><strong>KAYSSAR03</strong></h3>
            <h4 class="oo">OPTICIEN OPTOMÉTRISTE</h4>
        </div>
        <div class="left-container">
            <h2>FACTURE</h2>
            <h6 class="h6">Code INPE: 045063211</h6>
        </div>
        <div style="clear: both;"></div>
        <div class="info-container">
            <div class="client">
                <p id="p-info">CLIENT : {{$facture->nom_complet}}</p>
            </div>
            <div class="info">
                <p id="p-info">DATE : {{ date('d-m-Y', strtotime($facture->date)) }}</p>
                <p id="p-info">N° : {{$facture->n_facture}}</p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Désignation</th>
                    <th>Qté</th>
                    <th>Prix TTC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monture</td>
                    <td>{{$facture->monture}}</td>
                    <td>{{$facture->qté_monture}}</td>
                    <td>{{number_format($facture->prix_ttc_monture, 2, ',', ' ')}}</td>
                </tr>
                <tr>
                    <td>OD</td>
                    <td>{{$facture->description_od}}<br><br>{{$facture->od_og}}</td>
                    <td>{{$facture->qté_od}}</td>
                    <td>{{number_format($facture->prix_ttc_od, 2, ',', ' ')}}</td>
                </tr>
                <tr>
                    <td>OG</td>
                    <td>{{$facture->description_og}}<br><br>{{$facture->od_og}}</td>
                    <td>{{$facture->qté_og}}</td>
                    <td>{{number_format($facture->prix_ttc_og, 2, ',', ' ')}}</td>
                </tr>
            </tbody>
        </table>
        <table class="table2">
            <thead>
                <tr>
                    <th>Total HT</th>
                    <th>TVA 20%</th>
                    <th>Total TTC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                        // Catégorie "OD"
                        $totalHTOD = $facture->prix_ttc_od / (1 + 0.2);
        
                        // Catégorie "OG"
                        $totalHTOG = $facture->prix_ttc_og / (1 + 0.2);
        
                        // Catégorie "Métal"
                        $totalHTMetal = $facture->prix_ttc_monture / (1 + 0.2);
        
                        // Totaux
                        $totalHT = $totalHTOD + $totalHTOG + $totalHTMetal;
                        $tva = $totalHT*20/100;
                        $totalTTC = $totalHT + $tva;
                    @endphp
                    <td>{{ number_format($totalHT, 2, ',', ' ') }}</td>
                    <td>{{ number_format($tva, 2, ',', ' ') }}</td>
                    {{-- <td>{{ number_format($totalTTC, 2) }}</td> --}}
                    <td>{{ number_format($totalTTC, 2, ',', ' ') }}</td>

                </tr>
            </tbody>
        </table>
        @php
            function convertirEnLettres($nombre)
            {
                $unites = ['zéro', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf'];
                $dizaines = ['', '', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante-dix', 'quatre-vingt', 'quatre-vingt-dix'];
        
                $nombreEnLettres = '';
        
                $parties = explode('.', $nombre);
                $partieEntiere = intval($parties[0]);
        
                // Conversion de la partie entière
                if ($partieEntiere == 0) {
                    $nombreEnLettres .= $unites[0];
                } else {
                    $nombreEnLettres .= convertirPartie($partieEntiere, $unites, $dizaines) ;
                    $nombre %= 1000;
                }
        
                // Ajoutez ici la logique pour la partie décimale si nécessaire...
        
                return $nombreEnLettres;
            }
            function convertirPartie($nombre, $unites, $dizaines)
    {
        $nombreEnLettres = '';

        if ($nombre >= 1000) {
            if ($nombre >= 2000) {
                $nombreEnLettres .= convertirPartie(intval($nombre / 1000), $unites, $dizaines) . ' mille ';
            } else {
                $nombreEnLettres .= 'mille ';
            }
            $nombre %= 1000;
        }

        if ($nombre >= 100) {
            // Ajout de la condition pour éviter "Un Cent"
            if ($nombre >= 200) {
                $nombreEnLettres .= $unites[intval($nombre / 100)] . ' cent ';
            } else {
                $nombreEnLettres .= 'cent ';
            }
            $nombre %= 100;
        }

        if ($nombre > 0) {
            if ($nombre >= 20) {
                $nombreEnLettres .= $dizaines[intval($nombre / 10)];
                $nombre %= 10;
            }

            if ($nombre > 0) {
                $nombreEnLettres .= $unites[$nombre];
            }
        }

        return $nombreEnLettres;
    }

        @endphp
        <p class="para">Arrêtée la présente facture à la somme de : {{ ucfirst(convertirEnLettres($totalTTC)) }} Dirhams TTC.</p>

        <div class="footer">
            <hr>
            <p class="fin"><strong>Adresse:</strong> Magasin N° 2 lmm N° 41 Avenue Al Massira Al Khadra <br>
                Hay Al Wahda Karia - Salé - <strong>Tél:</strong> 07 63 14 73 41 <br>
                <strong>Capitale:</strong> 100.000 - <strong>Patente:</strong> 28802214 - <strong>IF:</strong> 53574562 - <strong>RC:</strong> 38383 <br>
                <strong>INPE:</strong> 045063211 - <strong>ICE:</strong> 00337627000096</p>
        </div>
    </x-master>