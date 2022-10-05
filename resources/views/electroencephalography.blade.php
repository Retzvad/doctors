@extends('layouts.app')
@section('content')
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header">
				<h1 class="page_title"> ELECTROENCEPHALOGRAPHY</h1>
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
						<a class="post_image" href="?page=post" title="electroencephalogram">
							<img src="{{asset('template/images/samples/520x240/image_04.jpg')}}" alt="" />
						</a>
						<!--<h2>
							<a href="indexb878.html?page=post" title="Lorem ipsum dolor sit amat velum">
								Lorem ipsum dolor sit amat velum
							</a>
						</h2>-->
						<p>
							An electroencephalogram (EEG) is a test that detects electrical activity in your brain using small, 
                            metal discs (electrodes) attached to your scalp. Your brain cells communicate via electrical 
                            impulses and are active all the time, even when you're asleep. This activity shows up as wavy 
                            lines on an EEG recording.
                            An EEG is one of the main diagnostic tests for epilepsy. An EEG can also play a role in diagnosing 
                            other brain disorders.
                        </p>
                        <h3>
                            Why it's done
                        </h3><br>    
                        <p>    
                            An EEG can determine changes in brain activity that might be useful in diagnosing brain 
                            disorders, especially epilepsy or another seizure disorder. An EEG might also be helpful for 
                            diagnosing or treating the following disorders:
                        </p>
                        <ul class="list clearfix">
                            <li class="icon_small_arrow right_black">
                                Brain tumor
                            </li>
                            <li class="icon_small_arrow right_black">
                                Brain damage from head injury
                            </li>
                            <li class="icon_small_arrow right_black">
                                Brain dysfunction that can have a variety of causes (encephalopathy)
                            </li>
                            <li class="icon_small_arrow right_black">
                                Inflammation of the brain (encephalitis)
                            </li>
                            <li class="icon_small_arrow right_black">
                                Stroke
                            </li>
                            <li class="icon_small_arrow right_black">
                                Sleep disorders
                            </li>
                        </ul>  
                        <p>    
                            An EEG might also be used to confirm brain death in someone in a persistent coma. A 
                            continuous EEG is used to help find the right level of anesthesia for someone in a medically 
                            induced coma.
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
