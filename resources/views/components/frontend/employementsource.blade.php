<div class="container">
	<div class="row">
		<div class="col-md-6" >
			<a href="#!">
				<div style="background-image: url('{{ asset('assets/images/persional/web/intern.jpg') }}');width: 100%;height: 400px; background-repeat: no-repeat;">
					<h1 style="padding-top: 40%;margin-left: 30px; ">
						{{ GoogleTranslate::trans('Internal Source', session()->get('locale')) }}
					</h1>
				</div>
			</a>
		</div>
		<div class="col-md-6">
			<a href="#!">
				<div style="background-image: url('{{ asset('assets/images/persional/web/extern.jpg') }}');width: 100%;height: 400px; background-repeat: no-repeat;">			
					<h1 style="padding-top: 40%;margin-left: 30px; ">
						{{ GoogleTranslate::trans('External Source', session()->get('locale')) }}
					</h1>
				</div>
			</a>
		</div>
	</div>
</div><br><br>