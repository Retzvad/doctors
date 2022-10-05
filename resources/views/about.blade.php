@extends('layouts.app')
@section('content')
<div class="page relative">
	<div class="clearfix">
		<div class="gallery_item_details_list clearfix page_margin_top">
			<div class="gallery_item_details clearfix">
				<div class="columns no_width">
					<div class="column_left">
						<div class="gallery_box">
							<ul class="image_carousel">
								<li class="current_slide">
									<img src="{{asset('template/images/samples/480x300/image_01.jpg')}}" alt=""/>
									<ul class="controls">
										<li>
											<a href="template/images/samples/image_01.jpg" rel="gallery" class="fancybox open_lightbox"></a>
										</li>
									</ul>
								</li>
								<li>
									<img src="{{asset('template/images/samples/480x300/image_02.jpg')}}" alt=""/>
									<ul class="controls">
										<li>
											<a href="template/images/samples/image_02.jpg" rel="gallery" class="fancybox open_lightbox"></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="column_right">
						<div class="details_box">
							<h2>
								Welcome to SMPD
							</h2>
							<p>
                            Stark Medical Physiology and Diagnostics is a Zimbabwean company offering non-invasive medical physiology testing and diagnostic solutions to the private and public 
                            sectors of Zimbabwe. With our proprietary population based normative data, we are able to optimize 
                            human resources for manual jobs and sports. <br/>
                            We are the first center to conglomerate all the medical physiology and diagnostic tests under one roof 
                            for the convenience of the public. And furthermore, we are the first company to have population based 
                            normative data for our nerve conduction studies in the whole of Africa.
							</p>
							<!--<h3 class="box_header margin_top_10">
								Our Vision
							</h3>-->
							<h3 class="sentence animated_element animation-slideLeft50">
								Developing People for a Healthier Community
							</h3>
							<!--<span class="sentence_author animated_element animation-slideLeft50 delay-600">&#8212;&nbsp;&nbsp;John Doe Molicere</span>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div>
				<ul class="columns_3 page_margin_top clearfix">
					<li class="column">
						<div>
                            <h3 class="box_header">
					        Our Vision
				            </h3>
							<p>
                            To be the leader in Medical Physiology and Diagnostics in Africa and the world over, recognized for our 
                            astute scientific approach to improve the professional and personal health of our clients.

                        </p>
						</div>
					</li>
					<li class="column">
                        <div>
                            <h3 class="box_header">
					        Our Mission
				            </h3>
							<p>
                            To develop people.
                            </p>
						</div>
					</li>
					<li class="column">
                        <div>
                            <h3 class="box_header">
									Our Values
								</h3>
								<ul class="list clearfix">
									<li class="icon_small_arrow right_black">
                                        Integrity
									</li>
									<li class="icon_small_arrow right_black">
                                        Accountability
									</li>
									<li class="icon_small_arrow right_black">
                                        Adherence to Scientific Principles
									</li>
								</ul>
                        </div>
					</li>
				</ul>
    </div>
    <div>
            <h3 class="box_header">
							Make an Appointment
						</h3>
						<ul class="contact_data page_margin_top">
							<li class="clearfix">
								<span class="social_icon phone"></span>
								<p class="value">
									Call: <strong>+263 782 812 806 </strong>
								</p>
							</li>
							<li class="clearfix">
								<span class="social_icon mail"></span>
								<p class="value">
									E-mail: <a href="mailto:management@smpd.health">management@smpd.health</a>
								</p>
							</li>
							<li class="clearfix">
								<span class="social_icon facebook"></span>
								<p class="value">
									<a href="http://facebook.com/DesignAve" title="Facebook" target="_blank">facebook.com/smpdhealth</a>
								</p>
							</li>
							<!--<li class="clearfix">
								<span class="social_icon twitter"></span>
								<p class="value">
									<a href="http://twitter.com/QuanticaLabs" title="Twitter" target="_blank">twitter.com/medicenter</a>
								</p>
							</li>
							<li class="clearfix">
								<span class="social_icon googleplus"></span>
								<p class="value">
									<a href="http://quanticalabs.com/" title="Twitter" target="_blank">google.com/medicenter</a>
								</p>
							</li>-->
						</ul>
    </div>
</div>
@endsection