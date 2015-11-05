<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'header', 'sub_header', 'content', 'active'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function menus()
    {
        return $this->hasOne('App\Menu', 'id', 'menu_id');
    }
}
