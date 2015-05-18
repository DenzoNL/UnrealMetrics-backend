<?php namespace UnrealMetrics;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model {

    protected $table = 'metrics';
    protected $fillable = ['name', 'category', 'level', 'value', 'repetitions', 'game_id'];

}
