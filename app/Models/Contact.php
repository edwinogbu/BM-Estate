<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "anointedboy4real80@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
