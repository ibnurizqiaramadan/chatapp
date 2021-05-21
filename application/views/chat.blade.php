@extends('layouts.app')
@section('content')
<div class="container pb-3">

	<div class="chat-field-group">
		
		{{-- <div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-header text-sm p-2 pl-3">
						Hello
					</div>
					<div class="card-body p-3">
						woy
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-header text-sm p-2 pl-3">
						Hello
					</div>
					<div class="card-body p-3">
						apaan ?
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div> --}}


	</div>

	<div class="chat-field-user1 d-none">
		<div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						woy
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						apaan ?
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						asu lu
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						asu
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>
		
        <div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat sint adipisci quod possimus optio non rerum velit natus quae? Corporis consequatur blanditiis aperiam dolores possimus ex praesentium vel nesciunt architecto!
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

        <div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem repellendus expedita vero voluptatibus voluptate facere dolore eligendi ipsa totam maiores mollitia dolor harum soluta corporis, odit quis placeat. Beatae, sit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia soluta assumenda sint deleniti impedit harum commodi delectus ex, nobis numquam, sit, nulla esse veniam eligendi praesentium cumque adipisci amet id.
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

	</div>

    <div class="chat-field-user2 d-none">
		<div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						woy
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						apaan ?
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						asu lu
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						asu
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>
		
        <div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat sint adipisci quod possimus optio non rerum velit natus quae? Corporis consequatur blanditiis aperiam dolores possimus ex praesentium vel nesciunt architecto!
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

        <div class="row">
			<div class="col-auto mr-auto pesan pesanOrang">
				<div class="card shadow">
					<div class="card-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem repellendus expedita vero voluptatibus voluptate facere dolore eligendi ipsa totam maiores mollitia dolor harum soluta corporis, odit quis placeat. Beatae, sit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia soluta assumenda sint deleniti impedit harum commodi delectus ex, nobis numquam, sit, nulla esse veniam eligendi praesentium cumque adipisci amet id.
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-auto ml-auto pesan">
				<div class="card shadow">
					<div class="card-body">
						kontol
                        <span class="text-sm waktuPesan text-muted">12:12:12</span>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
@endsection
@section('js')
	<script src="{{ base_url('assets/js/page/chat.js') }}" defer></script>
@endsection