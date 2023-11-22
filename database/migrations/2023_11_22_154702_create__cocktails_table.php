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
        Schema::create('_cocktails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cocktails');
    }
};


/* # tabella

- id
- name
- category  
- alcholic 
- glass ? 
- instructions
- thumb
- ingredients
- measures


##### come popolare ingridients e measures ( da rivedere con la corretta sintassi )
cockatilIngredients = [];
for i = 0 ; i < 15 ; i++{
    if 'strIngridient{$i}'=! null{
        cocktailIngridients.push(strIngridient{$i}.value) ;
    }
} */
