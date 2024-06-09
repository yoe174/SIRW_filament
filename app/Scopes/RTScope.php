<?php

// namespace App\Scopes;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Scope;
// use Illuminate\Support\Facades\Auth;

// class RTScope implements Scope
// {
//     public function apply(Builder $builder, Model $model)
//     {
//         // Ensure the user is authenticated
//         if (Auth::check()) {
//             // Dapatkan ID RT dari user yang sedang login
//             $domisilis_id = Auth::user()->domisilis_id;

//             // Lakukan filtering data warga berdasarkan RT yang login
//             $builder->where('domisilis_id', $domisilis_id);
//         }
//     }
// }
