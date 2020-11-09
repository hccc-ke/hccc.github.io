@extends('_layouts.master')

@section('body')
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			@include('includes.top-bar')

			@include('includes.nav', ['items' => $page->navigation])

			@yield('page')

			@include('includes.footer')
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
@stop