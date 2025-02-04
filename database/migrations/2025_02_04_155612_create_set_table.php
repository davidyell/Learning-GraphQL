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
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->integer('baseSetSize');
            $table->string('block')->nullable();
            $table->integer('cardsphereSetId')->nullable();
            $table->string('code')->index();
            $table->string('codeV3')->nullable();
            $table->json('decks')->nullable();
            $table->boolean('isForeignOnly')->nullable();
            $table->boolean('isFoilOnly');
            $table->boolean('isNonFoilOnly')->nullable();
            $table->boolean('isOnlineOnly');
            $table->boolean('isPaperOnly')->nullable();
            $table->boolean('isPartialPreview')->nullable();
            $table->string('keyruneCode');
            $table->json('languages')->nullable();
            $table->integer('mcmId')->nullable();
            $table->integer('mcmIdExtras')->nullable();
            $table->string('mcmName')->nullable();
            $table->string('mtgoCode')->nullable();
            $table->string('name');
            $table->string('parentCode')->nullable()->index();
            $table->date('releaseDate');
            $table->json('sealedProduct')->nullable();
            $table->integer('tcgplayerGroupId')->nullable();
            $table->integer('totalSetSize');
            $table->string('tokenSetCode')->nullable();
            $table->json('translations');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sets');
    }
};
