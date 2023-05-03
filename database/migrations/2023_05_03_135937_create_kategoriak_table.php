<?php

use App\Models\Kategoriak;
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
        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->timestamps();
        });

        Kategoriak::create(["nev"=>"lakás"]);
        Kategoriak::create(["nev"=>"ház"]);
        Kategoriak::create(["nev"=>"panel"]);
        Kategoriak::create(["nev"=>"tégla"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriak');
    }
};
