<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1>What we organize</h1>
                </div>
            </div>

            <!--Wedding-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/wedinq.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="wedin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Wedding, Reception & Anniversary Booking:</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/wed22.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Booking Information:</h5>
                                                <p>
                                                    To book with us follow the next steps:<br>
                                                    1. Register yourself<br>
                                                    2. Head over to the Location tab to add any new location<br>
                                                    3. Head over to Events tab and fill out the form and we will get back to you<br>
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Our Services:<br>
                                                    Bespoke wedding planning<br>
                                                    Intimate gatherings or grand parties tailored to your preferences<br>
                                                    Catering services featuring diverse cuisines<br>
                                                    Ceremony coordination for a stress-free day<br>
                                                </p>
                                                <p>
                                                Our mission is simple: to make your special moments magical, stress-free, and unforgettable.<br> 
                                                With Be Our Guest Event Planners, you can trust that every event is handled with care, 
                                                professionalism, and a personal touch.<br>
                                                Get in touch with us today to start planning your extraordinary event. <br>
                                                See you soon.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Wedding, Reception & Anniversary</h1>
                            <p class="definition">
                            <h4>At Be Our Guest, we specialize in crafting unforgettable
                            memories for your most cherished occasions.
                            Whether you’re tying the knot or celebrating years of love and togetherness,
                            we’re here to ensure every detail is nothing short of perfect.</h4>
                            </p>
                            <hr class="customline">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#wedin">
                            Event Booking  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>

			<!--Birthday-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/bday1.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="bdayin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Birthday Party Booking:</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/birthday5.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Booking Information:</h5>
                                                <p>
                                                    To book with us follow the next steps:<br>
                                                    1. Register yourself<br>
                                                    2. Head over to the Location tab to add any new location<br>
                                                    3. Head over to Events tab and fill out the form and we will get back to you<br>
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Our Services:<br>
                                                    Creative designs tailored to your style, age group, or interests<br>
                                                    Delicious menus featuring snacks, drinks, and cakes to suit your preferences<br>
                                                    Eye-catching decorations, props, and backdrops<br>
                                                </p>
                                                <p>
                                                Let’s make your next birthday party the talk of the town!<br> 
                                                With Be Our Guest, you can relax and
                                                enjoy the company of your friends and family while we handle everything else.<br>
                                                Get in touch with us today to start planning your extraordinary event. <br>
                                                See you soon.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Birthday Party</h1>
                            <p class="definition">
                            <h4>At Be Our Guest, we understand that birthdays are more than just milestones—
                            they’re opportunities to create cherished memories with loved ones.
                            Whether it’s an intimate gathering or a grand celebration,
                            we’re here to transform your special day into an unforgettable experience.</h4>
                            </p>
                            <hr class="customline">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#bdayin">
                            Event Booking  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <!--Party & Corporate-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/dpc2.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="pacin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Party and Corporate Gathering Booking:</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/dpc1.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Booking Information:</h5>
                                                <p>
                                                    To book with us follow the next steps:<br>
                                                    1. Register yourself<br>
                                                    2. Head over to the Location tab to add any new location<br>
                                                    3. Head over to Events tab and fill out the form and we will get back to you<br>
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Our Services:<br>
                                                    Planning for conferences, seminars, team-building events, and award ceremonies.<br>
                                                    Catering services offering diverse cuisines and refreshments.<br>
                                                    Custom themes for any celebration according to preference.<br>
                                                </p>
                                                <p>
                                                Let’s make your next event extraordinary!<br> 
                                                At Be Our Guest, we understand the importance of hosting events that leave a lasting impression.<br>
                                                Whether it’s an intimate party or a large corporate function, we bring
                                                creativity, professionalism, and passion to every aspect of your event.
                                                Get in touch with us today to start planning your extraordinary event. <br>
                                                See you soon.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Party & Corporate Gathering</h1>
                            <p class="definition">
                            <h4>At Be Our Guest, we take pride in curating extraordinary experiences
                            for both personal and professional occasions. Whether it’s a lively party or an impressive
                            corporate gathering, we turn your vision into reality with seamless
                            planning and creative execution.</h4>
                            </p>
                            <hr class="customline">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#pacin">
                            Event Booking  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <!--Meeting-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/meeting4.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="mcin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Meeting & Conference Booking:</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/metc.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Booking Information:</h5>
                                                <p>
                                                    To book with us follow the next steps:<br>
                                                    1. Register yourself<br>
                                                    2. Head over to the Location tab to add any new location<br>
                                                    3. Head over to Events tab and fill out the form and we will get back to you<br>
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Our Services:<br>
                                                    Choosing the perfect location to match your scale and style.<br>
                                                    Refreshments and meals tailored to your attendees’ preferences.<br>
                                                    High-quality technical support for presentations, video conferencing, and live streaming.<br>
                                                </p>
                                                <p>
                                                Let’s collaborate to make your next meeting or conference a resounding success.<br> 
                                                We believe that your meetings and conferences should
                                                reflect the excellence of your organization. We are committed to turning your vision into reality.<br>
                                                Get in touch with us today to start planning your extraordinary event. <br>
                                                See you soon.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 class="title">Meeting & Conference</h1>
                            <p class="definition">
                            <h4>At Be Our Guest, we understand the significance of organizing seamless
                            and impactful meetings and conferences. Whether it's a small team meeting or a large-
                            scale corporate conference, we specialize in delivering tailored solutions that reflect your
                            organization’s goals and values.</h4>
                            </p>
                            <hr class="customline">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#mcin">
                            Event Booking  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
