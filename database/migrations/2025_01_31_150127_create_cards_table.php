<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('artist')->nullable();
            $table->json('artistIds')->nullable();
            $table->string('asciiName')->nullable();
            $table->json('attractionLights')->nullable();
            $table->json('availability');
            $table->json('boosterTypes')->nullable();
            $table->string('borderColor');
            $table->json('cardParts')->nullable();
            $table->json('colorIdentity');
            $table->json('colorIndicator')->nullable();
            $table->json('colors');
            $table->float('convertedManaCost');
            $table->string('defense')->nullable();
            $table->string('duelDeck')->nullable();
            $table->integer('edhrecRank')->nullable();
            $table->float('edhrecSaltiness')->nullable();
            $table->float('faceConvertedManaCost')->nullable();
            $table->string('faceFlavorName')->nullable();
            $table->float('faceManaValue')->nullable();
            $table->string('faceName')->nullable();
            $table->json('finishes');
            $table->string('flavorName')->nullable();
            $table->text('flavorText')->nullable();
            $table->json('foreignData')->nullable();
            $table->json('frameEffects')->nullable();
            $table->string('frameVersion');
            $table->string('hand')->nullable();
            $table->boolean('hasAlternativeDeckLimit')->nullable();
            $table->boolean('hasContentWarning')->nullable();
            $table->boolean('hasFoil');
            $table->boolean('hasNonFoil');
            $table->json('identifiers');
            $table->boolean('isAlternative')->nullable();
            $table->boolean('isFullArt')->nullable();
            $table->boolean('isFunny')->nullable();
            $table->boolean('isOnlineOnly')->nullable();
            $table->boolean('isOversized')->nullable();
            $table->boolean('isPromo')->nullable();
            $table->boolean('isRebalanced')->nullable();
            $table->boolean('isReprint')->nullable();
            $table->boolean('isReserved')->nullable();
            $table->boolean('isStarter')->nullable();
            $table->boolean('isStorySpotlight')->nullable();
            $table->boolean('isTextless')->nullable();
            $table->boolean('isTimeshifted')->nullable();
            $table->json('keywords')->nullable();
            $table->string('language');
            $table->string('layout');
            $table->json('leadershipSkills')->nullable();
            $table->json('legalities');
            $table->string('life')->nullable();
            $table->string('loyalty')->nullable();
            $table->string('manaCost')->nullable();
            $table->float('manaValue');
            $table->string('name')->index();
            $table->string('number');
            $table->json('originalPrintings')->nullable();
            $table->string('originalReleaseDate')->nullable();
            $table->text('originalText')->nullable();
            $table->string('originalType')->nullable();
            $table->json('otherFaceIds')->nullable();
            $table->string('power')->nullable();
            $table->json('printings')->nullable();
            $table->json('promoTypes')->nullable();
            $table->json('purchaseUrls');
            $table->string('rarity');
            $table->json('relatedCards')->nullable();
            $table->json('rebalancedPrintings')->nullable();
            $table->json('rulings')->nullable();
            $table->string('securityStamp')->nullable();
            $table->string('setCode')->index();
            $table->string('side')->nullable();
            $table->string('signature')->nullable();
            $table->json('sourceProducts')->nullable();
            $table->json('subsets')->nullable();
            $table->json('subtypes');
            $table->json('supertypes');
            $table->text('text')->nullable();
            $table->string('toughness')->nullable();
            $table->string('type');
            $table->json('types'); // SQLSTATE[42000]: Syntax error or access violation: 3152 JSON column 'types' supports indexing only via generated columns on a specified JSON path
            $table->uuid('uuid');
            $table->json('variations')->nullable();
            $table->string('watermark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
