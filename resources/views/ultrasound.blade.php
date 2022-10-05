@extends('layouts.app')
@section('content')
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header">
				<h1 class="page_title"> ULTRASONOGRAPHY</h1>
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
						<a class="post_image" href="?page=post" title="ultrasound">
							<img src="{{asset('template/images/samples/520x240/image_07.jpg')}}" alt="" />
						</a>
						<!--<h2>
							<a href="indexb878.html?page=post" title="Lorem ipsum dolor sit amat velum">
								Lorem ipsum dolor sit amat velum
							</a>
						</h2>-->
						<p>
                            An ultrasound scan is a medical test that uses high-frequency sound waves to capture live 
                            images from the inside of your body. An ultrasound allows the doctor to see problems with 
                            organs, vessels, and tissues without needing to make an incision.Unlike other imaging techniques, ultrasound uses no radiation. For this reason, it’s the preferred 
                            method for viewing a developing fetus during pregnancy.
                        
                            If the doctor suspects you have any one of these other conditions, an abdominal ultrasound may 
                            be required
                         </p>
                
                            <ul class="list clearfix">
                                <li class="icon_small_arrow right_black">
                                    blood clot
                                </li>
                                <li class="icon_small_arrow right_black">
                                    enlarged organ (such as the liver, spleen, or kidneys)
                                </li>
                                <li class="icon_small_arrow right_black">
                                    fluid in the abdominal cavity
                                </li>
                                <li class="icon_small_arrow right_black">
                                    gallstone
                                </li>
                                <li class="icon_small_arrow right_black">
                                    hernia
                                </li>
                                <li class="icon_small_arrow right_black">
                                    pancreatitis
                                </li>
                                <li class="icon_small_arrow right_black">
                                    kidney blockage or cancer
                                </li>
                                <li class="icon_small_arrow right_black">
                                    kidney stone
                                </li>
                                <li class="icon_small_arrow right_black">
                                    liver cancer
                                </li>
                                <li class="icon_small_arrow right_black">
                                    appendicitis
                                </li>
                                <li class="icon_small_arrow right_black">
                                    tumors
                                </li>
                            </ul>  
                        <p>
                            Abdominal ultrasounds may also be used to help guide your doctor during certain procedures. 
                            For instance:
                        </p>
                        <ul class="list clearfix">
                            <li class="icon_small_arrow right_black">
                                During an abdominal biopsy, your doctor may use ultrasound to see where to place the 
                                needle to remove a small sample of tissue.
                            </li>
                            <li class="icon_small_arrow right_black">
                                Ultrasounds may help your doctor drain fluid from a cyst or abscess.
                            </li>
                            <li class="icon_small_arrow right_black">
                                Your doctor may use ultrasound to examine blood flow inside your abdomen. 
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