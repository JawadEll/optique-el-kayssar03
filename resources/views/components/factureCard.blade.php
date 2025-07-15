    <tbody>
        <tr>
            <td>
                <p>{{ $facture->id }}</p>
            </td>
            <td>
                <p>{{ $facture->nom_complet }}</p>
            </td>
            <td>
                <p>{{ $facture->date }}</p>
            </td>
            <td>
                <p>{{ $facture->monture }}</p>
            </td>
            <td>
                <p>{{ $facture->qté_monture }}</p>
            </td>
            <td>
                <p>{{ $facture->prix_ttc_monture }}</p>
            </td>
            <td>
                <p>{{ $facture->od_og }}</p>
            </td>
            <td>
                <p>{{ $facture->qté_od }}</p>
            </td>
            <td>
                <p>{{ $facture->prix_ttc_od }}</p>
            </td>
            <td>
                <p>{{ $facture->qté_og }}</p>
            </td>
            <td>
                <p>{{ $facture->prix_ttc_og }}</p>
            </td>
            <td>
                <p>{{ $facture->description_od }}</p>
            </td>
            <td>
                <p>{{ $facture->description_og }}</p>
            </td>
            <td>
                <a href="{{ route('facturePDF', ['factureId' => $facture->id]) }}" target="_blank">
                    <img src="{{ asset('images/download.png') }}" alt="Voir Facture" class="small-image">
                </a>
            </td>
            <td class="form-container">
                <form action="{{ route('factures.edit', $facture->id) }}" method="GET" class="form-inline">
                    @csrf
                    <button type="submit" class="image-button">
                        <img src="{{ asset('images/update.png') }}" alt="modifier" class="small-image">
                    </button>
                </form>
            
                <form action="{{ route('factures.destroy', $facture->id) }}" method="post" class="form-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="image-button">
                        <img src="{{ asset('images/delete.png') }}" alt="supprimer" class="small-image">
                    </button>
                </form>
            </td>
        </tr>
    </tbody>