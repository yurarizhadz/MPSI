@extends('layouts.admin')
@section('content')
<style type="text/css">
.myFrame{
	overflow-y: hidden;
	height: 100%;
	width: 100%;
	border: none;
	position: relative;
}
</style>
<ul id="task-card" class="collection with-header" style="background: #fff; margin-top: -10px;">
	<li class="collection-header with">
		<h3><strong>{{$art->judul}}</strong></h3>
    	<p>Oleh Admin Tanggal {{$art->created_at}}</p>
    </li>
    <li style="margin: 20px;height: 100%;">
    	<iframe src="{{url('/getartikel/'.$art->id)}}" class="myFrame" height="100%" width="100%" frameborder="0">
    	</iframe>
    </li>
</ul>
@endsection