@extends('layouts.app')

@section('content')



<!-- eventuell js script für chart abändern  -->
<div class="ch">
    {!! $chart->container() !!}

    {!! $chart->script() !!}

</div>



<style>
    .ch {
        background: white;
        width: 100%;
    }
</style>


@endsection