@extends('layouts.app')

        @section('content')

        <users-rooms-component :user="{{ auth()->user() }}"></users-rooms-component>
        <test-component :user="{{ auth()->user() }}"></test-component>
        
        
        <user-ratings-component></user-ratings-component>
        
       
        @endsection

 