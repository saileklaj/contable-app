<?php
class Company extends Model
{
    public function assignments()
    {
        return $this->hasMany(TaskAssignment::class);
    }

    public function credentials()
    {
        return $this->hasMany(CompanyCredential::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}