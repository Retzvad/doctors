@extends('layouts.app')
@section('content')
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header">
				<h1 class="page_title">NERVE CONDUCTION STUDIES AND ELECTROMYOGRAPHY</h1>
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
						<a class="post_image" href="?page=post" title="Electromyography">
							<img src="{{asset('template/images/samples/520x240/image_03.jpg')}}" alt="" />
						</a>
						<!--<h2>
							<a href="indexb878.html?page=post" title="Lorem ipsum dolor sit amat velum">
								Lorem ipsum dolor sit amat velum
							</a>
						</h2>-->
						<p>
							Electromyography (EMG) and nerve conduction studies are tests that measure the electrical 
                            activity of muscles and nerves. Nerves send out electrical signals to make your muscles react in 
                            certain ways. As your muscles react, they give off these signals, which can then be measured.
                            An EMG test looks at the electrical signals your muscles make when they are at rest and when 
                            they are being used.
                            A nerve conduction study measures how fast and how well the body's electrical signals travel 
                            down your nerves.
                            EMG tests and nerve conduction studies can both help find out if you have a disorder of your 
                            muscles, nerves, or both. These tests can be done separately, but they are usually done at the 
                            same time.
						</p>
                        <h3>
                            What are they used for?
                        </h3><br/>
						<p>
                            EMG and nerve conduction studies are used to help diagnose a variety of muscle and nerve 
                            disorders. An EMG test helps find out if muscles are responding the right way to nerve signals. 
                            Nerve conduction studies help diagnose nerve damage or disease. When EMG tests and nerve 
                            conduction studies are done together, it helps providers tell if your symptoms are caused by a 
                            muscle disorder or a nerve problem.
                        </p>
                        <h3>
                            Why do I need an EMG test and a nerve conduction study?
                        </h3><br>    
                        <p>    
                        You may need these tests if you have symptoms of a muscle or nerve disorder. These symptoms 
                        include:
                        </p>    
                        <ul class="list clearfix">
                            <li class="icon_small_arrow right_black">
                                Muscle weakness
                            </li>
                            <li class="icon_small_arrow right_black">
                                Tingling or numbness in arms, legs, hands, feet, and/or face
                            </li>
                            <li class="icon_small_arrow right_black">
                                Muscle cramps, spasms, and/or twitching
                            </li>
                            <li class="icon_small_arrow right_black">
                                Paralysis of any muscles
                            </li>
                        </ul>   
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
