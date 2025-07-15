@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #EDE9E3;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #E7D7C9;
        border-radius: 10px;
        box-shadow: 0 0 10px #A38F85;
    }

    h2 {
        text-align: center;
        color: #A38F85;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input,
    select,
    textarea {
        width: 90%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #A38F85;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
    }

    button {
        width: 30%;
        padding: 10px;
        background-color: #A38F85;
        color: #EDE9E3;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-bottom: 30px;
        margin-top: -20px;
        margin-left: auto;
        display: block;
        margin-right: 35px;
    }

    button:hover {
        background-color: #CDC6C3;
    }

    .text-danger {
        color: #dc3545;
    }

    /* Add your custom styles below */
    .mb-3 {
        margin-bottom: 15px;
    }

    .row {
        display: flex;
        margin-bottom: 15px;
        margin-left: 35px;
    }

    .row1 {
        display: flex;
        margin-bottom: 15px;
        margin-left: 35px;
        width: 62%;
    }

    .col {
        flex: 0 0 48%; /* Adjust the width as needed */
        margin-right: 4%; /* Adjust the margin as needed */
    }

    .col:last-child {
        margin-right: 0;
    }

    .d-grid {
        display: grid;
        gap: 15px;
    }
    select{
        margin-left: 35px;
        width: 91%
    }
    .label{
        margin-left: 35px;
    }

</style>
@endsection

<x-master title='Formulaire'> 
        <h2><strong>Modifier Facture</strong></h2>
        <form method="POST" action="{{ route('factures.update', $facture->id) }}">
            @csrf  {{--  sécurité --}}
            @method('PUT')
            <div class="mb-3">
            <div class="row1">
                <div class="col">
                    <label class="form-label">Nom Complet</label>
                    <input type="text" name="nom_complet" class="form-control" value="{{ old('nom_complet', $facture->nom_complet) }}">
                    @error('nom_complet')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <div class="col">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $facture->date) }}">
                @error('date')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label">Numéro</label>
                <input type="text" name="n_facture" class="form-control" value="{{ old('n_facture', $facture->n_facture) }}">
                @error('n_facture')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    </div>
</div>

            <label class="label">Monture</label>
            <select name="monture">
                <option value="" selected disabled>Choisissez une monture</option>
                <option value="metal efexible" {{ old('monture', $facture->monture) == 'metal efexible' ? 'selected' : '' }}>Metal Efexible</option>
                <option value="plastique" {{ old('monture', $facture->monture) == 'plastique' ? 'selected' : '' }}>Plastique</option>
                <option value="fibre de carbone" {{ old('monture', $facture->monture) == 'fibre de carbone' ? 'selected' : '' }}>Fibre De Carbone</option>
            </select>
            @error('monture')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Qté de Monture</label>
                        <input type="number" name="qté_monture" class="form-control" value="{{ old('qté_monture', $facture->qté_monture) }}">
                        @error('qté_monture')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="col">
                        <label class="form-label">Prix TTC de Monture</label>
                        <input type="number" name="prix_ttc_monture" class="form-control" value="{{ old('prix_ttc_monture', $facture->prix_ttc_monture) }}">
                        @error('prix_ttc_monture')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <label class="label">OD & OG</label>
            <select name="od_og">
                <option value="" selected disabled>Choisissez...</option>
                <option value="verre organique blanc" {{ old('od_og', $facture->od_og) == 'verre organique blanc' ? 'selected' : '' }}>VERRE ORGANIQUE BLANC</option>
                <option value="verre organique antireflt" {{ old('od_og', $facture->od_og) == 'verre organique antireflt' ? 'selected' : '' }}>VERRE ORGANIQUE ANTIREFLT</option>
                <option value="verre organique antireflt bleu" {{ old('od_og', $facture->od_og) == 'verre organique antireflt bleu' ? 'selected' : '' }}>VERRE ORGANIQUE ANTIREFLT BLEU</option>
                <option value="verre organique antireflt bleu progressif" {{ old('od_og', $facture->od_og) == 'verre organique antireflt bleu progressif' ? 'selected' : '' }}>VERRE ORGANIQUE ANTIREFLT BLEU PROGRESSIF</option>
                <option value="verre organique antireflt progressif" {{ old('od_og', $facture->od_og) == 'verre organique antireflt progressif' ? 'selected' : '' }}>VERRE ORGANIQUE ANTIREFLT PROGRESSIF</option>
                <option value="verre organique photogris antireflt" {{ old('od_og', $facture->od_og) == 'verre organique photogris antireflt' ? 'selected' : '' }}>VERRE ORGANIQUE PHOTOGRIS ANTIREFLT</option>
                <option value="verre transition photogris bleu" {{ old('od_og', $facture->od_og) == 'verre transition photogris bleu' ? 'selected' : '' }}>VERRE TRANSITION PHOTOGRIS BLEU</option>
                <option value="verre organique teinte solaire" {{ old('od_og', $facture->od_og) == 'verre organique teinte solaire' ? 'selected' : '' }}>VERRE ORGANIQUE TEINTE SOLAIRE</option>
                <option value="fort indice antireflt multicouches" {{ old('od_og', $facture->od_og) == 'fort indice antireflt multicouches' ? 'selected' : '' }}>FORT INDICE ANTIREFLT MULTICOUCHES</option>
                <option value="verre mineral indice 1,9" {{ old('od_og', $facture->od_og) == 'verre mineral indice 1,9' ? 'selected' : '' }}>VERRE MINERAL INDICE 1,9</option>
                <option value="verre mineral indice 1,8" {{ old('od_og', $facture->od_og) == 'verre mineral indice 1,8' ? 'selected' : '' }}>VERRE MINERAL INDICE 1,8</option>
                <option value="verre mineral indice 1,7" {{ old('od_og', $facture->od_og) == 'verre mineral indice 1,7' ? 'selected' : '' }}>VERRE MINERAL INDICE 1,7</option>
                <option value="verre mineral progressif" {{ old('od_og', $facture->od_og) == 'verre mineral progressif' ? 'selected' : '' }}>VERRE MINERAL PROGRESSIF</option>
            </select>
            @error('od_og')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Qté de OD</label>
                        <input type="number" name="qté_od" class="form-control" value="{{ old('qté_od', $facture->qté_od) }}">
                        @error('qté_od')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="col">
                        <label class="form-label">Prix TTC de OD</label>
                        <input type="number" name="prix_ttc_od" class="form-control" value="{{ old('prix_ttc_od', $facture->prix_ttc_od) }}">
                        @error('prix_ttc_od')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Qté de OG</label>
                        <input type="number" name="qté_og" class="form-control" value="{{ old('qté_og', $facture->qté_og) }}">
                        @error('qté_og')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="col">
                        <label class="form-label">Prix TTC de OG</label>
                        <input type="number" name="prix_ttc_og" class="form-control" value="{{ old('prix_ttc_og', $facture->prix_ttc_og) }}">
                        @error('prix_ttc_og')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Description de OD</label>
                        <textarea name="description_od" class="form-control">{{ old('description_od', $facture->description_od) }}</textarea>
                        @error('description_od')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="col">
                        <label class="form-label">Description de OG</label>
                        <textarea name="description_og" class="form-control">{{ old('description_og', $facture->description_og) }}</textarea>
                        @error('description_og')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-grid my-5">
                <button type="submit">Modifier</button>
            </div>
        </form>
</x-master>