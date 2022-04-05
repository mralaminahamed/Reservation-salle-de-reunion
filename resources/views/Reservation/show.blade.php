@extends('layouts.app')
<style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 500px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover, a:hover {
      opacity: 0.7;
    }
    </style>

@section('content')

<h2 style="text-align:center">Reservation</h2>
<div class="card">
    @php
    $reservation = \App\Models\Reservation::class;
    @endphp
    <p class="title">Date:
        <p>
           {{ $reservation->date()}}
        </p>
    </p>

    <p><button>Contact</button></p>
  </div>

@endsection
