<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    protected $table = 'paragraphs';

    public $primary_key = 'id';

    public $timestamps = true;

}
