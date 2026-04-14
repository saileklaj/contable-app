<?php
class TaskExecution extends Model
{
    protected $fillable = [
        'task_assignment_id',
        'period',
        'due_date',
        'completed_at',
        'completed_by',
        'status'
    ];

    public function assignment()
    {
        return $this->belongsTo(TaskAssignment::class);
    }

    public function evidences()
    {
        return $this->hasMany(TaskEvidence::class);
    }

    public function completedBy()
    {
        return $this->belongsTo(User::class, 'completed_by');
    }
}