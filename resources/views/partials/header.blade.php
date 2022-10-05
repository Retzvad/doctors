    <div class="site_container">
        <div class="header_container">
            <div class="header clearfix">
                <div class="header_left">
                    <a href="/" title="Stark Medical Physiology and Diagnostics">
                        <img src="{{ asset('template/images/logo-08.png') }}" style="height: 50px;" alt="logo" />

                    </a>
                </div>
                <ul class="sf-menu header_right">
                    @if (Request::path() == '/')
                        <li class="submenu selected">
                            <a href="/" title="HOME">
                                HOME
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="/" title="HOME">
                                HOME
                            </a>
                        </li>
                    @endif
                    @if (Request::path() == '/about')
                        <li class="submenu selected">
                            <a href="/about" title="ABOUT SMPD">
                                ABOUT US
                            </a>

                        </li>
                    @else
                        <li>
                            <a href="/about" title="ABOUT SMPD">
                                ABOUT US
                            </a>

                        </li>
                    @endif
                
                        <li class="submenu wide">
                            <a href="#" title="SERVICES">
                                SERVICES
                            </a>
                            <ul class="timetable_submenu">
                                <li>
                                    <a href="/service/nerve_conduction" title="NERVE CONDUCTION STUDIES">
                                        NERVE CONDUCTION STUDIES
                                    </a>
                                </li>
                                <li>
                                    <a href="/service/neurological_assessment" title="NEUROLOGICAL ASSESSMENT">
                                        NEUROLOGICAL ASSESSMENT
                                    </a>
                                </li>
                                <li>
                                    <a href="/service/electroencephalography" title="ELECTROENCEPHALOGRAPHY">
                                        ELECTROENCEPHALOGRAPHY
                                    </a>
                                </li>
                                <li>
                                    <a href="/service/electrocardiography" title="ELECTROCARDIOGRAPHY & ECHOCARDIOGRAPHY">
                                        ELECTROCARDIOGRAPHY & ECHOCARDIOGRAPHY
                                    </a>
                                </li>
                                <li>
                                    <a href="/service/ultrasound" title="ULTRASONOGRAPHY">
                                        ULTRASONOGRAPHY
                                    </a>
                                </li>
                                <li>
                                    <a href="/service/respiratory" title="RESPIRATORY FUNCTION TEST">
                                        RESPIRATORY FUNCTION TEST
                                    </a>
                                </li>
                            </ul>
                        </li>


                 
                    @if (Request::path() == '/contact')
                        <li class="submenu selected">

                            <a href="/contact" title="CONTACT">
                                CONTACT
                            </a>
                        </li>
                    @else
                        <li>

                            <a href="/contact" title="CONTACT">
                                CONTACT
                            </a>
                        </li>
                    @endif
                </ul>
                <div class="mobile_menu">
                    <select>
                        <option value="?page=home" selected='selected'>HOME</option>
                        <option value="?page=home">- About</option>
                        <option value="?page=home_2">- Services</option>
                        <option value="?page=contact">Contact</option>
                    </select>
                </div>
            </div>
        </div>
