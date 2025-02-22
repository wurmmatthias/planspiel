<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyKpisTable extends Migration
{
    public function up()
    {
        Schema::create('company_kpis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->integer('year');
            $table->string('quarter'); // e.g. Q1, Q2, Q3, Q4
            $table->decimal('umsatz', 15, 2)->default(100000);
            $table->decimal('gewinn', 15, 2)->default(0);
            $table->integer('kunden')->default(10);
            $table->integer('auftraege')->default(0);
            $table->integer('angestellte')->default(10);
            $table->timestamps();

            $table->unique(['company_id', 'year', 'quarter']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_kpis');
    }
}
