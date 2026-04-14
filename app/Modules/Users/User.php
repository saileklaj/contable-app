<?php
class User extends Authenticatable
{
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function assignments()
    {
        return $this->hasMany(TaskAssignment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}