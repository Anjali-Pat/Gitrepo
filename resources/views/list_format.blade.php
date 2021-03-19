@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                @if(isset($query))
                	{{ __('Query Result') }} : {{$query}}
                @else
                	{{ __('Saved Formats') }}
                @endif
            </div>

                <div class="card-body">
                   <table id="example" class="table ">
                   	<thead>
                   		<tr>
                   			<th>Title</th>
                   			<th>Query</th>             			
                   			<th>Created At</th>
                @if(!isset($query))


                   			<td></td>   
                   			@endif         			
                   		</tr>
                   	</thead>
                   	<tbody>
                   		@foreach($data as $row)
                   		<tr>
                   			<td>{{$row->title}}</td>
                   			<td>{{$row->custom_query}}</td>
                   			<td>{{date('d-m-Y @ g:i A', strtotime($row->created_at))}}</td>
                @if(!isset($query))

                   			<td>
                   				<form method="post" action="{{route('view_result')}}">
                   				@csrf
                   				<input type="hidden" name="query" value="{{$row->custom_query}}">

                   				<button class="btn btn-info btn-sm">View Result</button>              				
                   				</form>
                   			</td>
                   			@endif
                   		</tr>
                   		@endforeach
                   	</tbody>
                   	<tbody>
                   		
                   	</tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
