<header class="intro">
	<div class="intro-body">	
		<h2 class="form-signin-heading">WELCOME, <span class="light">Please sign in.</span></h2>
		@include('error')
		<div class="container" style="width: 400px;">
			<div class='row'>
				<form action='{{ url('login') }}' method='post' class="form-signin">
					</br>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus style="margin-bottom: 5px" name='username'>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required style="margin-bottom: 5px" name='password'>
					<div class="checkbox">
						<label>
						<input type="checkbox" value="i-understand"> I understand that this is a demo form.
						</label>
					</div>
					<button class="btn btn-default" type="submit">Sign in</button>
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
</header>