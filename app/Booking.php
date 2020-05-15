<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Booking extends Model
{
    use Sortable;

    protected $table = 'booking';
    protected $fillable = ['nama','tgl','jam','layanan'];

    public $sortable = ['nama','tgl','jam','layanan'];

    public $timestamps = false;
}
