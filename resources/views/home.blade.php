@extends('layouts.app')

        @section('content')

        <users-rooms-component :user="{{ auth()->user() }}"></users-rooms-component>
        <test-component :user="{{ auth()->user() }}"></test-component>
        <create-room-component :user="{{ auth()->user() }}"></create-room-component>

        @endsection

