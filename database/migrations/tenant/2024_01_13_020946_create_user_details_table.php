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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('last_name');

            $table->enum('gender', [
                'Masculino',
                'Feminino',
                'Outro'
            ])
                ->nullable();

            $table->date('birth_date');

            $table->enum('marital_status', [
               'Solteiro',
               'Casado',
               'Divorciado',
               'Viúvo'
            ])
            ->nullable();

            $table->enum('document_type', [
                'CPF',
                'RG'
            ]);

            $table->string('document_number');
            $table->string('address');
            $table->integer('address_number');
            $table->string('address_complement');
            $table->string('district');
            $table->integer('cep');
            $table->string('state');
            $table->string('country');
            $table->string('occupation');
            $table->string('education');
            $table->string('phone_number');
            $table->string('whatsapp_number');
            $table->string('cell_phone_number');
            $table->date('join_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
