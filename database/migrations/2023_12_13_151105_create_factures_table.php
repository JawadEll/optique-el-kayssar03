<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->date('date')->default(now());
            $table->string('n_facture')->unique();
            $table->string('monture');
            $table->string('qté_monture');
            $table->string('prix_ttc_monture');
            $table->string('od_og');
            $table->string('qté_od');
            $table->string('prix_ttc_od');
            $table->string('qté_og');
            $table->string('prix_ttc_og');
            $table->string('description_od');
            $table->string('description_og');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
