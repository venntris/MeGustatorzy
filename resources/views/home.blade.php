@extends('layouts.app')

        @section('content')

        <users-rooms-component :user="{{ auth()->user() }}"></users-rooms-component>

        @endsection

