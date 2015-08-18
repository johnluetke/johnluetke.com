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
                    <p class="col-xs-10">Input devices are taking a step "backwards": from the high-tech to the natural.</div>
            </div>
        </header>

         <main>
            <section id="blurb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-10">
                            <h2>Can society unlearn a 30 year old paradigm?</h2>
                            <h2>We think so.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <p class="col-xs-10">Join industry pioneers Alex Kipman, Stephen Lake, Palmer Luckey, David Coz, and John Hanke as they review the challenges they faced in introducing thier products to market, thier experiences, and where they see the industry heading in the next five years.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" id="info">
                            <p>Thursday, October 11</p>
                            <p>7:30 PM</p>
                            <p />
                            <p>Meydenbauer Center</p>
                            <p>11100 NE 6th St, Bellevue</p>
                            <p />
                            <small>H'ordeuvres and light refreshments will be provided. Doors open at 6:30 PM</small>
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
                    <p>Kipman's dedication to creating new experiences with cutting-edge technology propelled Kinect to launch through adversity to become the world's fastest selling consumer electronics device. As a result he entered Microsoft's Hall of Legends in 2011. This award recognizes an individual responsible for creating or directly influencing a visionary initiative through collaboration and technical leadership, creating a breakthrough in the technology industry.</p>
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
                    <!-- https://en.wikipedia.org/wiki/John_Hanke -->
                    <p>John Hanke is a serial entrepreneur. He currently runs Niantic Labs, a company which explores experimental mobile, social, and local applications. Prior to joining Google, Hanke founded and was CEO at Keyhole, Inc. Google acquired Keyhole in 2004, at which point Keyhole's flagship product was renamed to Google Earth. After Keyhole's acquisition, Hanke spent several years as Vice President of Product Management for Google's "Geo" division (Google Earth, Google Maps, Local, StreetView, SketchUp, and Panoramio).</p>
                    <p>Hanke grew up in Cross Plains, Texas. He received his bachelor's degree (Plan II Honors) from the University of Texas, Austin. While a student at UT he chaired the Distinguished Speakers Committee and brought speakers Jeane Kirkpatrick, Kurt Vonnegut, Jr., Dith Pran, and others to lecture on campus. He received his MBA from the Haas School of Business at the University of California, Berkeley in 1996. Prior to business school, he worked in foreign affairs for the US Government in Washington, DC, and Myanmar. Upon Graduation, he subsequently helped start two successful entertainment software companies, Archetype Interactive and Big Network. John Hanke also worked on one of the early MMOs called Meridian 59.</p>
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
                    <!-- http://www.wired.com/2015/06/inside-story-googles-unlikely-leap-cardboard-vr/ -->
                    <p>David Coz is the creator of Google Cardboard: a pair of virtual reality goggles made out of pieces of cardboard. A Paris native, Coz worked for the Google Cultural Institute, a way for museums and other institutions to put their art online. He worked on the cardboard goggles as a 20 percent project, in which Google employees dedicate 20 percent of their time to some new idea. The project began after he stumbled onto a little-seen YouTube video shot from a flying drone. It was a stereoscopic video meant for a 3-D headset he didn't have. He realized such videos could be viewed if a makeshift headset was simply wrapped around a phone. Coz pitched the idea to his manager as a way for students to virtually visit museum galleries.</p>
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
