@extends('layouts.master')

@section('content')
    The random number is {{{ $randNum }}}<br>
    Your guess was {{{ $guess }}}

    @if ($randNum == $guess)
    	<p style="color:green"><?= 'You have mastered ROLL DICE!'; ?></p>
    @else
    	<p style="color:red"><?= 'Your psychic abilities are terrible.'; ?></p>
    @endif	
@stop	


