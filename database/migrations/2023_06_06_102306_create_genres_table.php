<?php

use App\Models\Genre;
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
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->timestamps();
        });

        $genres = ['Arredamento', 'Videogiochi', 'abbigliamento', 'Elettronica', 'Giardinaggio', 'Motori', 'Giochi', 'Bambini', 'Sport', 'Libri'];

        foreach ($genres as $genre) {
            Genre::create([
                'genre' => $genre
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
