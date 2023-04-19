<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'response_id',
        'question_id',
        'option_id',
    ];

    public function response()
    {
        return $this->belongsTo(Response::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
