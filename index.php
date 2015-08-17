<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style.css" />
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#speakers-list a").on("click", function(e) {
                e.preventDefault();
                anchor = $(this).attr("href");
                elem = $("section" + anchor);
                offset = (window.innerHeight - $(elem).height()) / 2 - (window.innerHeight * .12);
                offset = offset < 0 ? 0 : offset;
                console.log(anchor);
                console.log(elem);
                console.log(offset);

                $("html, body").animate({
                    scrollTop: elem.offset().top - offset
                }, 1000);
            });
        });
        </script>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div id="banner" class="col-md-12">
                        <img id="this1" src="images/mouse.png" />
                        <img id="this2" src="images/finger.png" />
                    </div>
                </div>
                <div class="row">
                    <div id="title" class="col-md-12">
                        <span>THIS</span>
                        <span>OR</span>
                        <span>THIS</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1"></div>
                    <p class="col-xs-10">Nulla nec mi id quam faucibus commodo. Vivamus lorem ipsum, pulvinar eu ultrices a, fringilla eleifend ligula. Duis convallis sed mi a scelerisque. Praesent ullamcorper nibh at orci hendrerit auctor. Maecenas iaculis felis a magna ultrices, ac semper felis aliquet.</p>
                </div>
            </div>
        </header>

         <main>
            <section id="blurb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-10">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                            <h2>Phasellus vel tincidunt lacus.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <p class="col-xs-10">Donec scelerisque ante nunc, non malesuada sapien elementum in. Cras quis gravida elit. Pellentesque consectetur, erat sit amet semper ultrices, nisl arcu pellentesque justo, in eleifend massa velit sit amet lacus. Aliquam sed dolor vitae nunc pretium sagittis. In hac habitasse platea dictumst. Nullam vel molestie tellus. Sed ut ex sed est aliquam pellentesque in mollis neque. Sed ac orci nec felis pharetra egestas sed quis lectus. Donec quis mi interdum justo varius fringilla sit amet ut nunc. Nulla ac ornare sapien. Pellentesque fermentum metus eros, ut hendrerit eros porta non.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" id="info">
                            <p>Thursday, October 11</p>
                            <p>7:30 PM</p>
                            <p />
                            <p>Meydenbauer Center</p>
                            <p>11100 NE 6th St, Bellevue</p>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="speakers-list">
                <h2>Speakers</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1 visible-md visible-lg"></div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <a href="#speaker-kipman">
                                <div class="img">
                                    <img src="images/kipman.jpg"/>
                                </div>
                                <h4>Alex Kipman</h4>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <a href="#speaker-hanke">
                                <div class="img">
                                    <img src="images/hanke.png"/>
                                </div>
                                <h4>John Hanke</h4>
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <a href="#speaker-luckey">
                                <div class="img">
                                    <img src="images/luckey.png"/>
                                </div>
                                <h4>Palmer Luckey</h4>
                            </a>
                        </div>
                        <div class="col-sm-2 visible-sm"></div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <a href="#speaker-coz">
                                <div class="img">
                                    <img src="images/coz.jpg"/>
                                </div>
                                <h4>David Coz</h4>
                            </a>
                        </div>
                        <div class="col-xs-3 visible-xs visible-sm"></div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <a href="#speaker-lake">
                                <div class="img">
                                    <img src="images/lake.png"/>
                                </div>
                                <h4>Stephen Lake</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="speaker-kipman" class="speaker">
                <div>
                    <img src="images/kipman.jpg" />
                    <h3>Alex Kipman</h3>
                    <cite>Microsoft</cite>
                </div>
                <div class="bio">
                    <!-- https://www.linkedin.com/in/akipman -->
                    <p>Alex Kipman is the Technical Fellow for new device categories in the Operating System Group at Microsoft. An innovator and a visionary, Kipman has led three major break-through products for the company, the latest of which is Kinect. Kipman is named as the primary inventor on more than 90 patents since joining Microsoft in 2001.</p>
                    <p>Kipman.s dedication to creating new experiences with cutting-edge technology propelled Kinect to launch through adversity to become the world.s fastest selling consumer electronics device. As a result he entered Microsoft.s Hall of Legends in 2011. This award recognizes an individual responsible for creating or directly influencing a visionary initiative through collaboration and technical leadership, creating a breakthrough in the technology industry.</p>
                    <p>Kipman was born in Brazil and graduated from Rochester Institute of Technology in 2001 with a degree in software engineering. He was named one of TIME Magazine's 2011 100 People of the Year. In 2012, he was named National Inventor of the Year by the nonprofit Intellectual Property Foundation.</p>
                </div>
            </section>
    
            <section id="speaker-hanke" class="speaker">
                <div>
                    <img src="images/hanke.png" />
                    <h3>John Hanke</h3>
                    <cite>Niantic Labs</cite>
                </div>
                <div class="bio">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tincidunt sapien. Vivamus vel orci at quam hendrerit maximus. Proin egestas consequat ultrices. Nam laoreet ipsum tempus quam imperdiet, at suscipit massa rhoncus. Nam consequat malesuada mi, sed ultricies erat facilisis accumsan. Duis consequat, elit vitae placerat ullamcorper, augue lacus faucibus diam, volutpat placerat metus ipsum eu leo. Aliquam erat volutpat. Vestibulum urna metus, fermentum et congue nec, pulvinar sed magna. Suspendisse ornare, urna vestibulum elementum iaculis, ante nulla dictum tellus, ac varius mauris quam vel erat. Etiam consectetur odio consectetur condimentum efficitur. Maecenas faucibus ante eget rutrum pellentesque. Praesent ullamcorper justo in nisi congue, eget tempor sapien consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel commodo enim. Aenean auctor ipsum id consectetur molestie.</p>
                    <p>In fermentum elit sed imperdiet suscipit. Nulla a sollicitudin justo. Nullam ullamcorper posuere velit, at imperdiet est auctor id. Vestibulum tempus lacus molestie ipsum tincidunt, sed cursus ligula viverra. Phasellus non scelerisque neque. Fusce ullamcorper volutpat felis. Sed tempor ante elit.</p>
                </div>
            </section>
    
            <section id="speaker-luckey" class="speaker">
                <div>
                    <img src="images/luckey.png" />
                    <h3>Palmer Luckey</h3>
                    <cite>Oculus VR</cite>
                </div>
                <div class="bio">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tincidunt sapien. Vivamus vel orci at quam hendrerit maximus. Proin egestas consequat ultrices. Nam laoreet ipsum tempus quam imperdiet, at suscipit massa rhoncus. Nam consequat malesuada mi, sed ultricies erat facilisis accumsan. Duis consequat, elit vitae placerat ullamcorper, augue lacus faucibus diam, volutpat placerat metus ipsum eu leo. Aliquam erat volutpat. Vestibulum urna metus, fermentum et congue nec, pulvinar sed magna. Suspendisse ornare, urna vestibulum elementum iaculis, ante nulla dictum tellus, ac varius mauris quam vel erat. Etiam consectetur odio consectetur condimentum efficitur. Maecenas faucibus ante eget rutrum pellentesque. Praesent ullamcorper justo in nisi congue, eget tempor sapien consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel commodo enim. Aenean auctor ipsum id consectetur molestie.</p>
                    <p>In fermentum elit sed imperdiet suscipit. Nulla a sollicitudin justo. Nullam ullamcorper posuere velit, at imperdiet est auctor id. Vestibulum tempus lacus molestie ipsum tincidunt, sed cursus ligula viverra. Phasellus non scelerisque neque. Fusce ullamcorper volutpat felis. Sed tempor ante elit.</p>
                </div>
            </section>
    
            <section id="speaker-coz" class="speaker">
                <div>
                    <img src="images/coz.jpg" />
                    <h3>David Coz</h3>
                    <cite>Google</cite>
                </div>
                <div class="bio">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tincidunt sapien. Vivamus vel orci at quam hendrerit maximus. Proin egestas consequat ultrices. Nam laoreet ipsum tempus quam imperdiet, at suscipit massa rhoncus. Nam consequat malesuada mi, sed ultricies erat facilisis accumsan. Duis consequat, elit vitae placerat ullamcorper, augue lacus faucibus diam, volutpat placerat metus ipsum eu leo. Aliquam erat volutpat. Vestibulum urna metus, fermentum et congue nec, pulvinar sed magna. Suspendisse ornare, urna vestibulum elementum iaculis, ante nulla dictum tellus, ac varius mauris quam vel erat. Etiam consectetur odio consectetur condimentum efficitur. Maecenas faucibus ante eget rutrum pellentesque. Praesent ullamcorper justo in nisi congue, eget tempor sapien consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel commodo enim. Aenean auctor ipsum id consectetur molestie.</p>
                    <p>In fermentum elit sed imperdiet suscipit. Nulla a sollicitudin justo. Nullam ullamcorper posuere velit, at imperdiet est auctor id. Vestibulum tempus lacus molestie ipsum tincidunt, sed cursus ligula viverra. Phasellus non scelerisque neque. Fusce ullamcorper volutpat felis. Sed tempor ante elit.</p>
                </div>
            </section>
    
            <section id="speaker-lake" class="speaker">
                <div>
                    <img src="images/lake.png" />
                    <h3>Stephen Lake</h3>
                    <cite>Thalmic Labs</cite>
                </div>
                <div class="bio">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et tincidunt sapien. Vivamus vel orci at quam hendrerit maximus. Proin egestas consequat ultrices. Nam laoreet ipsum tempus quam imperdiet, at suscipit massa rhoncus. Nam consequat malesuada mi, sed ultricies erat facilisis accumsan. Duis consequat, elit vitae placerat ullamcorper, augue lacus faucibus diam, volutpat placerat metus ipsum eu leo. Aliquam erat volutpat. Vestibulum urna metus, fermentum et congue nec, pulvinar sed magna. Suspendisse ornare, urna vestibulum elementum iaculis, ante nulla dictum tellus, ac varius mauris quam vel erat. Etiam consectetur odio consectetur condimentum efficitur. Maecenas faucibus ante eget rutrum pellentesque. Praesent ullamcorper justo in nisi congue, eget tempor sapien consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In vel commodo enim. Aenean auctor ipsum id consectetur molestie.</p>
                    <p>In fermentum elit sed imperdiet suscipit. Nulla a sollicitudin justo. Nullam ullamcorper posuere velit, at imperdiet est auctor id. Vestibulum tempus lacus molestie ipsum tincidunt, sed cursus ligula viverra. Phasellus non scelerisque neque. Fusce ullamcorper volutpat felis. Sed tempor ante elit.</p>
                </div>
            </section>
        </main>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div><img id="g" src="images/logo_Google.png" /></div>
                                    <div><img id="o" src="images/logo_Oculus.png" /></div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div><img id="m" src="images/logo_Microsoft.png" /></div>
                                    <div><img id="t" src="images/logo_Thalmic.png" /></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div><img id="n" src="images/logo_Niantic.png" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <small>Created by John Luetke for HCDE 508, Summer 2015</small>
                    </div>

                </div>
            </div>
        </footer>
    </body>
</html>
