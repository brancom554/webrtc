<?php
    
use Illuminate\Database\Capsule\Manager as Capsule;
    

    
Capsule::schema()->create('admins', function ($table) 
{
            
 $table->increments('id');
            
 $table->timestamps();
    
});
