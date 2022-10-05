@extends('layouts.app')
@section('content')
@include('partials.slider')
<div class="page relative noborder">
<div class="clearfix">
		<div class="columns columns_3 page_margin_top_section clearfix">
			<ul class="column">
				<li class="item_content clearfix">
					<a class="features_image" href="/service/nerve_conduction" title="">
						<img src="{{asset('template/images/features_small/stats.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/nerve_conduction" title="NERVE CONDUCTION STUDIES AND ELECTROMYOGRAPHY">
							NERVE CONDUCTION STUDIES AND ELECTROMYOGRAPHY
							</a>
						</h3>
						Tests that measure the electrical activity of muscles and nerves. 
					</div>
				</li>
				<li class="item_content clearfix">
					<a class="features_image" href="/service/neurological_assessment" title="">
						<img src="{{asset('template/images/features_small/pencil.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/neurological_assessment" title="NEUROLOGICAL ASSESSMENT AND TRAINING">
							NEUROLOGICAL ASSESSMENT AND TRAINING
							</a>
						</h3>
						Assessment tools to determine a patient's neurologic function.
					</div>
				</li>
			</ul>
			<ul class="column">
				<li class="item_content clearfix">
					<a class="features_image" href="/service/electroencephalography" title="">
						<img src="{{asset('template/images/features_small/phone.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/electroencephalography" title="ELECTROENCEPHALOGRAPHY">
							ELECTRO
							ENCEPHALOGRAPHY
							</a>
						</h3>
						A Test that detects electrical activity in your brain using electrodes attached to your scalp.
					</div>
				</li>
				<li class="item_content clearfix">
					<a class="features_image" href="/service/electrocardiography" title="">
						<img src="{{asset('template/images/features_small/shield.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/electrocardiography" title="ELECTROCARDIOGRAPHY AND ECHOCARDIOGRAPHY">
							ELECTROCARDIOGRAPHY AND ECHOCARDIOGRAPHY
							</a>
						</h3>
						Tests that help find problems with the heart muscle, valves, or rhythm.
					</div>
				</li>
			</ul>
			<ul class="column">
				<li class="item_content clearfix">
					<a class="features_image" href="/service/ultrasound" title="">
						<img src="{{asset('template/images/features_small/lab.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/ultrasound" title="ULTRASONOGRAPHY">
							ULTRASONOGRAPHY
							</a>
						</h3>
						A medical test that uses high-frequency sound waves to capture live images from the inside of your body. 
					</div>
				</li>
				<li class="item_content clearfix">
					<a class="features_image" href="/service/respiratory" title="">
						<img src="{{asset('template/images/features_small/hourglass.png')}}" alt="" class="animated_element animation-scale" />
					</a>
					<div class="text">
						<h3>
							<a href="/service/respiratory" title="RESPIRATORY FUNCTION TEST">
							RESPIRATORY FUNCTION TEST
							</a>
						</h3>
						Non-invasive tests that show how well the lungs are working.
					</div>
				</li>
			</ul>
		</div>
		<div class="announcement page_margin_top_section clearfix">
			<ul class="columns no_width">
				<li class="column_left">
					<h1>Make an Appointment with us Today</h1>
					<p>We offer the best non-invasive medical solutions in the country</p>
				</li>
				<li class="column_right">
					<div class="vertical_align">
						<div class="vertical_align_cell">
							<a title="Make an Appointment" href="/contact" class="more blue medium animated_element animation-slideLeft">Make an Appointment</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

@endsection