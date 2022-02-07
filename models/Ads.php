<?php

namespace thecodeisbae\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Ads extends Eloquent
{

    protected $table = 'ads';
    protected $primaryKey = 'ads_id';
    protected $guarded = [];

}