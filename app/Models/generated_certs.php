<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $generated_id
 * @property integer $seminar_id
 * @property string $firstname
 * @property string $validation_code
 * @property string $lastname
 * @property string $cert_detail
 * @property string $date_generated
 * @property string $email
 * @property Seminar $seminar
 */
class generated_certs extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'generated_id';

    /**
     * @var array
     */
    protected $fillable = ['seminar_id', 'firstname', 'validation_code', 'lastname', 'cert_detail','date_generated', 'email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seminar()
    {
        return $this->belongsTo('App\Models\Seminar', null, 'seminar_id');
    }

    public $timestamps = false;
}
