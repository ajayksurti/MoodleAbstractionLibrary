<?php

namespace Avado\MoodleAbstractionLibrary\Entities;

class User extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * @var array
     */
    protected $guarded = ['password'];

    /**
     * @var array
     */
    protected $hidden = ['password'];

    public function enrolments()
    {
        return $this->hasMany(UserEnrolment::class, 'userid', 'id');
    }
}
