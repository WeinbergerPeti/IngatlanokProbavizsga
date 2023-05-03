<?php

use App\Models\Ingatlanok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingatlanok', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kategoria")->references("id")->on("kategoriak");
            $table->string("leiras");
            $table->date("hirdetesDatuma")->default(Carbon::now());
            $table->boolean("tehermentes")->default(true);
            $table->integer("ar");
            $table->string("kepUrl");
            $table->timestamps();
        });

        Ingatlanok::create(['kategoria' => "1",'leiras' => "Csendes nyugodt környék",'tehermentes' => false,'ar' => 10000000,'kepUrl' => "kep/kepek1"]);
        Ingatlanok::create(['kategoria' => "2",'leiras' => "Zajos utca","hirdetesDatuma"=>"2023-04-20",'ar' => 545627270,'kepUrl' => "kep/kepek2"]);
        Ingatlanok::create(['kategoria' => "3",'leiras' => "Azonnal költözhető",'ar' => 325626364,'kepUrl' => "kep/kepek3"]);
        Ingatlanok::create(['kategoria' => "1",'leiras' => "Csendes nyugodt környék",'ar' => 175664636,'kepUrl' => "kep/kepek4"]);
    }  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanok');
    }
};
