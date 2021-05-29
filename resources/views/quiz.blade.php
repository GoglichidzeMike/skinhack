@extends('layouts.home')

@section('content')

<div id="assesment">
  @include('includes.quiz')
</div>


@endsection
<style>












/*  */
    .diag-btn::before{
        content: "";
        width: 100%;
        height: 100%;
        background: #FE9399;
        top: 0;
        left: 0;
        position:absolute;
        width: 0;
        transition: all 0.2s ease-in;
        z-index: -1;
    }

    .diag-btn{
        transition: all 0.2s ease-in;
        z-index: 10;
    }

    .diag-btn:hover{
        color: white;
        position: relative;
    }


    .diag-btn:hover #icon{
        fill:white;
    }

    .diag-btn:hover::before{
        width: 100%;
    }


</style>