<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed paper_title
 */
class Submission extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'submissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sa_id',
        'paper_code',
        'is_accept',
        'is_fullpaper',
        'is_locked',
        'is_copyright_send',
        'is_copyright_accept',
        'volume',
        'issue',
        'paper_title',
        'paper_keywords',
        'paper_abstract',
        'fullpaper_url',
        'user_id'
    ];



    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
