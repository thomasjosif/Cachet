@extends('layout.master')
@section('content')
@include('partials.modules.status')
@include('partials.modules.messages')
@include('partials.about-app')
@include('partials.modules.components')
@include('partials.modules.metrics')
@include('partials.modules.stickied')
@include('partials.modules.scheduled')
@include('partials.modules.timeline')


@stop

@section('bottom-content')
@include('partials.footer')
<script>
$(document).ready(function($) {
 setTimeout(function() {
 $('.dark-bg').fadeIn('300', function() {
 $('.intro-bg').slideDown('400');
 });
 },1000);
 
 $('.closePopUp').click(function(event) {
 $('.intro-bg').slideUp('300',function(){
 $(this).remove();
 $('.dark-bg').fadeOut('400', function() {
 $(this).remove();
 });
 });
 });
});
</script>
@stop
