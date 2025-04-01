<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/bbcon.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">INDIA'S NEWEST COVENTION CENTRE</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/bbcon.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE ULTIMATE PRIVATE MEETING EXPERIENCE</h5><!--content title-->
                                                <p>
                                                Biswa Bangla Convention Centre is a convention centre in New Town, West Bengal, India. It was built by West Bengal Housing Infrastructure Development Corporation (HIDCO) and opened in the year 2017. It was built to attract meetings, incentives, conferences and exhibitions (MICE) tourism in the city.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Hall 1: Main Auditorium at Level 4,5,7
                                                Seating capacity: 3,000*
                                                Entries at Level 4, 5 and 7
                                                Stage Area: 100 ft * 65 ft
                                                Audio system: Installed with six microphones
                                                Stage craft & stage lighting: Installed
                                                Car allowed for parking: 400 no
                                                </p>

                                                <p>
                                                Hall 2: Banquet Hall at Level 2
                                                14.75 m * 16.10 m
                                                Entry through Level 2
                                                Car allowed for parking: 25 no.
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Biswa Bangla Convention Centre</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Biswa Bangla Sarani, Block-DG, New Town, 700156
                            </p>
                            <p class="definition"><!--content body-->
                            It is a ten-storeyed building which houses a convention hall, two auditoriums and four banquet cum exhibition halls, with each having 3200 seats, 400 seats and 270–72 seats respectively. There are 822 parking spaces, executive lounges, swimming pool, gymnasiums etc. It also has a hotel behind the main building, with 100 rooms, which is operated on a Public Private Partnership (PPP) basis.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/itc.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">A Marvel</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/itc.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>One of a kind towering presence</h5><!--content title-->
                                                <p>
                                                This LEED Platinum certified hotel, ensures that the promise of luxury is upheld while the planet is protected with sensitivity. The hotel operations are conducted in a manner to have a positive impact on the planet and the community while delivering authentic indigenous experiences.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Bengal has been the melting pot of cultures from across India & overseas and offers a wealth of cuisines. The hotel celebrates the culinary heritage of the region while also offering delectable global cuisines to gourmet connoisseurs. From celebrating the exuberance of the variety of cuisines from the bazaars of Kolkata to menus adapted from the ancient philosophies of Ayurveda, a truly extraordinary culinary journey awaits.
                                                </p>

                                                <p>
                                                
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">ITC Royal Bengal</h1><!--location title-->
                            <p class="location">1, JBS Haldane Ave, Tangra, Kolkata, West Bengal 700046</p><!--location secondary content-->
                            <p class="definition">
                            Located in the heart of the city, the magnificent LEED Platinum certified ITC Royal Bengal rises tall over the skyscape as an exemplar of refinement and luxury. An ode to the region’s heritage, its 456 rooms and suites include 82 serviced apartments. Its 7 dining destinations offer a wide and eclectic selection of local and global gourmet. From corporate events at Kolkata’s largest pillar-less banquet hall, to indulgences at our luxury spa, we’ll make every moment memorable.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-4">
                            <img src="images/in1.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="inox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">INOX Pictures</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/in1.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Cinema Redefined</h5>
                                                <p>
                                                Leading entertainment destination, redefining cinema with cutting-edge technology, diverse films, and immersive experiences nationwide
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                INOX at the South City Mall in Kolkata is the epitome of a luxury movie experience, with the decor being nothing short of a 5-star hotel. The designers of this theatre have gone beyond a grand theatre screen and premium seats, what with the exteriors being equally impressive.
                                                </p>

                                                <p>
                                                
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
                        <div class="subcontent col-md-8">
                            <h1 class="title">INOX South City</h1>
                            <p class="location">South City Mall, Prince Anwar Shah Road, Jodhpur Park, Kolkata - 700068</p>
                            <p class="definition">NOX at the South City Mall in Kolkata is the epitome of a luxury movie experience, with the decor being nothing short of a 5-star hotel. The designers of this theatre have gone beyond a grand theatre screen and premium seats, what with the exteriors being equally impressive.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#inox">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-4">
                            <img src="images/og.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="oglake" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">INOX Pictures</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/og2.jpeg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Cinema Redefined</h5>
                                                <p>
                                                Leading entertainment destination, redefining cinema with cutting-edge technology, diverse films, and immersive experiences nationwide
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                INOX at the South C
                                                </p>

                                                <p>
                                                
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
                        <div class="subcontent col-md-8">
                            <h1 class="title">OG by the Lake</h1>
                            <p class="location">1J, E Topsia Rd,Topsia, Kolkata</p>
                            <p class="definition">Scenic location by the lake, offering a picturesque setting for dining.
                            Beautiful ambiance and photogenic spot.Great food taste with a mixed menu.
                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#oglake">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
