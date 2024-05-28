<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'employee_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function binnacles() {
        return $this->hasMany(Binnacle::class);
    }

    public function events() {
        return $this->hasMany(Event::class);
    }

    public function tasksAssigned() {
        return $this->belongsToMany(Task::class, 'user_task', 'assigned_by', 'task_id')
            ->withPivot('assigned_to');
    }

    public function tasksReceived() {
        return $this->belongsToMany(Task::class, 'user_task', 'assigned_to', 'task_id')
            ->withPivot('assigned_by');
    }
}
