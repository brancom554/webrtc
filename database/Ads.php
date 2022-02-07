<?php
    
use Illuminate\Database\Capsule\Manager as Capsule;
    

    
Capsule::schema()->create('ads', function ($table) 
{
    $table->increments('ads_id');
    $table->string('title');
    $table->string('location');
    $table->string('describe');
    $table->string('file');
    $table->timestamps();
    
});
