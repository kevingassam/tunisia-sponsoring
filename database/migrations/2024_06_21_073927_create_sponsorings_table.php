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
        Schema::create('sponsorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table->string("url_post");
            $table->decimal("montant",13,3);
            $table->string("debut");
            $table->enum("etat",["impayé","payé"]);
            $table->string("fin");
            $table->timestamps();


            //relation
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorings');
    }
};
