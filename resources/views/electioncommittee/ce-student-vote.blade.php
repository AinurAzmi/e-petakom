<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

@extends('layouts.main-election')

@section('content')
    <div class="electionheader__container">
        <h1 class="main__title">Committee Election</h1>
    </div>
    <br />
        <p class="sub__title">Vote Candidate</p>
    <div class="electionregister__container">
        
        
    </div>
@endsection
