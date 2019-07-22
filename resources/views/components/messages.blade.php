<section class="row">
    <div class="col s12">
	    @if ($errors->any())
	        <div class="alert alert-danger">
	            <ul>
	                @foreach ($errors->all() as $error)
	                    <li class="white-text">{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
	    @endif

		@if (session('warning'))
		    <div class="alert alert-warning">
		        <span class="white-text">{{ session('warning') }}</span>
		    </div>
		@endif

		@if (session('info'))
		    <div class="alert alert-primary">
		        <span class="white-text">{{ session('info') }}</span>
		    </div>
		@endif

		@if (session('success'))
		    <div class="alert alert-success">
		        <span class="white-text">{{ session('success') }}</span>
		    </div>
		@endif
	</div>
</section>
