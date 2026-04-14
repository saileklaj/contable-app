<?php
class TaskAssignment extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function executions()
    {
        return $this->hasMany(TaskExecution::class);
    }
}