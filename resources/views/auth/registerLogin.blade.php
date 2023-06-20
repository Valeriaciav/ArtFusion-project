<x-layout>

	<x-navbar />

<div class="container-fluid vh-100  d-flex justify-content-center align-items-center">
	<div class="contenitore" id="contenitore">
		<div class="form-contenitore sign-up-contenitore">
			<form class="compila" action="{{route('register')}}" method="POST">
				@csrf
				<h1 class="testo1">Registrati</h1>
			
				<label for="name">Nome</label>
				<input class="insert" type="text" placeholder="Name" name="name" id="name" />
	
				<label for="email">Email</label>
				<input class="insert" type="email" name="email" placeholder="Email" id="email" />
	
				<label for="password">Password</label>
				<input class="insert" type="password" name="password" placeholder="minimo 8 caratteri"id="password" />
	
				<label for="password">Conferma Password</label>
				<input class="insert" name="password_confirmation" type="password" id="password_confirmation" >
	
				<button class="bottone">Sign up</button>
			</form>
		</div>
		<div class="form-contenitore sign-in-contenitore">
			<form class="compila" action="{{route('login')}}" method="POST">
				@csrf
				<h1 class="testo1">Accedi</h1>

				<label for="email">Email</label>
				<input class="insert" type="email" placeholder="Email" name="email" id="email"/>
	
				<label for="password">Conferma Password</label>
				<input class="insert" type="password" name="password" id="password" placeholder="Password" />
				{{-- <a  class="encore" href="#">Forgot your password?</a> --}}
				<button class="bottone">Sign In</button>
			</form>
		</div>
		<div class="overlay-contenitore">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1 class="testo1">Welcome Back!</h1>
					<p class="paragrafo">To keep connected with us please login with your personal info</p>
					<button class="ghost bottone" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1 class="testo1">Hello, Friend!</h1>
					<p class="paragrafo">Enter your personal details and start journey with us</p>
					<button class="ghost bottone" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</div>


</x-layout>