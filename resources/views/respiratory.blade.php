@extends('layouts.app')
@section('content')
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header">
				<h1 class="page_title"> RESPIRATORY FUNCTION TEST</h1>
			</div>
		</div>
		<div class="page_left">
			<ul class="blog clearfix">
				<li class="post single">
					
					<div class="post_content">
						<!--<div class="gallery_box">
							<ul class="image_carousel">
								<li class="current_slide">
									<img src="template/images/samples/520x240/image_03.jpg" alt=""/>
									<ul class="controls">
										<li>
											<a href="template/images/samples/image_03.jpg" rel="gallery" class="fancybox open_lightbox"></a>
										</li>
									</ul>
								</li>
								<li>
									<img src="images/samples/520x240/image_02.jpg" alt=""/>
									<ul class="controls">
										<li>
											<a href="http://www.youtube.com/embed/AivyFZXT2ek" class="fancybox-video open_video_lightbox"></a>
										</li>
									</ul>
								</li>
								<li>
									<img src="images/samples/520x240/image_01.jpg" alt=""/>
									<ul class="controls">
										<li>
											<a href="images/samples/image_01.jpg" rel="gallery" class="fancybox open_lightbox"></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>-->
						<a class="post_image" href="?page=post" title="Pulmonary function tests">
							<img src="{{asset('template/images/samples/520x240/image_09.jpg')}}" alt="" />
						</a>
						<!--<h2>
							<a href="indexb878.html?page=post" title="Lorem ipsum dolor sit amat velum">
								Lorem ipsum dolor sit amat velum
							</a>
						</h2>-->
						<p>
                            Pulmonary function tests (PFTs) are noninvasive tests that show how well the lungs are working. 
                            The tests measure lung volume, capacity, rates of flow, and gas exchange. This information can 
                            help your healthcare provider diagnose and decide the treatment of certain lung disorders
                         </p>
    
					</div>
				</li>
			</ul>
		</div>
		<div class="page_right">
			<div class="sidebar_box">
				<h3 class="box_header">
					Our Services
				</h3>
				<ul class="columns list clearfix">
					<li class="icon_small_arrow right_black">
						<a href="/service/nerve_conduction" title="NERVE CONDUCTION STUDIES AND ELECTROMYOGRAPHY">
							NERVE CONDUCTION STUDIES AND ELECTROMYOGRAPHY
						</a>
					</li>
					<li class="icon_small_arrow right_black">
						<a href="/service/neurological_assessment" title="NEUROLOGICAL ASSESSMENT AND TRAINING">
							NEUROLOGICAL ASSESSMENT AND TRAINING
						</a>
					</li>
					<li class="icon_small_arrow right_black">
						<a href="/service/electroencephalography" title="ELECTROENCEPHALOGRAPHY">
							ELECTROENCEPHALOGRAPHY
						</a>
					</li>
					<li class="icon_small_arrow right_black">
						<a href="/service/electrocardiography" title="ELECTROCARDIOGRAPHY AND ECHOCARDIOGRAPHY">
							ELECTROCARDIOGRAPHY AND ECHOCARDIOGRAPHY
						</a>
					</li>
					<li class="icon_small_arrow right_black">
						<a href="/service/ultrasound" title="ULTRASONOGRAPHY">
							ULTRASONOGRAPHY
						</a>
					</li>
					<li class="icon_small_arrow right_black">
						<a href="/service/respiratory" title="RESPIRATORY FUNCTION TEST">
							RESPIRATORY FUNCTION TEST
						</a>
					</li>
				</ul>
			</div>
			<div class="sidebar_box">
				<h3 class="box_header">
					Make An Appointment
				</h3>
                <br/>
				<ul class="contact_data">
					<li class="clearfix">
						<span class="social_icon phone"></span>
						<p class="value">
							Phone: <strong>+263 782 812 806</strong>
						</p>
					</li>
					<li class="clearfix">
						<span class="social_icon mail"></span>
						<p class="value">
							E-mail: <a href="mailto:management@smpd.health">management@smpd.health</a>
						</p>
					</li>
					<!--<li class="clearfix">
						<span class="social_icon form"></span>
						<p class="value">
							or <a href="index53a6.html?page=contact" title="Contact form">fill in the form</a> on our contact page
						</p>
					</li>-->
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection