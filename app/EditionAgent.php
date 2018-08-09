<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EditionAgent extends Model
{
    public static function all($columns = ['*'])
    {
        return DB::select(DB::raw("SELECT parts.id,CONCAT(editions.year,' - ',parts.text) as text,parts.created_at,parts.updated_at FROM parts,editions WHERE parts.edition_id = editions.id ORDER BY parts.updated_at DESC"));
    }
}
