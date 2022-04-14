<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'perfil',
        'email',
        'password',
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
            'name' => 'required|string|min:0',
            'perfil'=>'required|in:'.implode(',', self::opcionesPerfil())
            , 'email' => 'required|string|min:0|max:100'
            , 'password' => 'required|string|min:6'
        ];
    }

    public static function etiquetas() {
        return [
            'name' => 'name'
            ,'perfil'=>'perfil'
            , 'email' => 'email'
            , 'password' => 'password'
        ];
    }

    public static function opcionesPerfil(){
        return[
            'administrador' => 'administrador',
            'empleado' => 'empleado'
        ];
    }


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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registerClient(User $request){
        $user=User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        $user->assignRole('empleado');
    } 

    
}