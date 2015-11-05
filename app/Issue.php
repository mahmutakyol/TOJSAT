<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed message_e_c
 */
class Issue extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'issues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['volume', 'issue', 'year', 'message_e_c', 'message_e', 'cover_image', 'full_pdf', 'status_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function status()
    {
        return $this->hasOne('App\Status', 'id', 'status_id');
    }

}
