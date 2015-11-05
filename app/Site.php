<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'site_code',
        'site_name',
        'site_address',
        'site_mail_host',
        'site_mail_user',
        'site_mail_pass',
        'site_mail_port',
        'site_mail_enc',
        'sitelogo',
        'siteissn',
        'twitter',
        'facebook',
        'youtube',
        'css_file',
        'journal_conf',
        'journal_conf_url'
    ];



    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
