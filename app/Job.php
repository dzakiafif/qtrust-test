<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 20/09/2018
 * Time: 15:36
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'jobs';

    protected $fillable = [
        'name_job','detail_job'
    ];

}