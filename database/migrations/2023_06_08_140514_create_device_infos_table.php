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
        Schema::create('device_infos', function (Blueprint $table) {
            $table->id();
            $table->string('technology')->nullable();
            $table->string('operatorShort')->nullable();
            $table->string('operatorLong')->nullable();
            $table->string('signalStrength')->nullable();
            $table->string('networkInfo')->nullable();
            $table->string('cellInstance')->nullable();
            $table->string('networkRegistered')->nullable();
            $table->string('g4Rssp')->nullable();
            $table->string('g4Rssq')->nullable();
            $table->string('g4Rssi')->nullable();
            $table->string('g4Ssnr')->nullable();
            $table->string('g5Rssp')->nullable();
            $table->string('g5Rssq')->nullable();
            $table->string('g5Ssnr')->nullable();
            $table->string('apn')->nullable();
            $table->string('dataSessionId')->nullable();
            $table->string('dataLastCause')->nullable();
            $table->string('linkproperties')->nullable();
            $table->string('dataNetworkType')->nullable();
            $table->string('dataState')->nullable();
            $table->string('dataTransportType')->nullable();
            $table->string('cellInfo')->nullable();
            $table->string('simOperator')->nullable();
            $table->string('dataActivity')->nullable();
            $table->string('networkType')->nullable();
            $table->string('dataStateCurrent')->nullable();
            $table->string('imei')->nullable();
            $table->string('deviceSoftware')->nullable();
            $table->string('iccAuthentication')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('cid')->nullable();
            $table->string('networkManual')->nullable();
            $table->string('networkCountry')->nullable();
            $table->string('networkOperatorCode')->nullable();
            $table->string('networkOperatorName')->nullable();
            $table->string('networkSelection')->nullable();
            $table->string('serviceState')->nullable();
            $table->string('simState')->nullable();
            $table->string('tac')->nullable();
            $table->string('dataEnabled')->nullable();
            $table->string('dataConnection')->nullable();
            $table->string('dataRoamin')->nullable();
            $table->string('dataDownSpeed')->nullable();
            $table->string('dataUpSpeed')->nullable();
            $table->string('celllnfowcdma')->nullable();
            $table->string('apntype')->nullable();
            $table->string('changereason')->nullable();
            $table->string('failcause')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_infos');
    }
};
