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
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <h1>What's On</h1>
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
                    <div class="date col-md-3">
                            <span class="date"><h3>MARCH 31</h3></span><br>
                        </div>
                        <div class="container">
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5">
                            <img src="images/conference.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="conf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">What's Next?</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/confa.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Information:</h5>
                                                <p>
                                                    Venue: Biswa Bangla Convention Centre, Kolkata<br> 
                                                    Venue Capacity: 500<br>
                                                    Guest Count:400<br>
                                                    Caterer Confirmation:Confirmed<br>
                                                    Booking Confirmation:Confirmed
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Booked by: ABC Ltd<br>
                                                    Hall: Hall 3<br>
                                                    Total Package: Rs.1,50,000<br>
                                                    Advance Received: Rs.75,000<br>
                                                    Company Address: Eco Space,New Town,Kolkata<br>

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
                        <div class="subcontent col-md-6">
                            <h1 class="title">What's Next?</h1>
                            <p class="location">Biswa Bangla Convention Centre, Kolkata</p>
                            <p class="definition">This seminar aims to inspire students to make 
                                informed decisions about their academic and career paths,
                                equipping them with the tools to navigate the challenges and opportunities of the future.
                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#conf">
                            Event Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
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
                    <div class="date col-md-3">
                            <span class="date"><h3>APRIL 10</h3></span><br>
                        </div>
                        <div class="container">
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5">
                            <img src="images/reception6.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="rec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Reception Ceremony</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/recin.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Information:</h5>
                                                <p>
                                                    Venue: ITC Royal Bengal, Kolkata<br> 
                                                    Venue Capacity: 300<br>
                                                    Guest Count: 250+25<br>
                                                    Caterer Confirmation: Confirmed<br>
                                                    Decorator Confirmation: Confirmed
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Booked by: Sam Wallis & Cassandra Wallis<br>
                                                    Booked venues: Grand Hall, Dining Hall, Gallery, 5 Rooms<br>
                                                    Total Package: Rs.5,00,000<br>
                                                    Advance Received: Rs.2,75,000<br>
                                                    Customer Address: New Town, Sector V, Kolkata<br>

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
                        <div class="subcontent col-md-6">
                            <h1 class="title">Reception Ceremony</h1>
                            <p class="location">ITC Royal Bengal, Kolkata</p>
                            <p class="definition">Please come and celebrate this wonderful occasion with us.
                            We look forward to your presence to make this event even more memorable. 
                            Warm regards
                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#rec">
                            Event Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
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
                    <div class="date col-md-3">
                            <span class="date"><h3>APRIL 31</h3></span><br>
                        </div>
                        <div class="container">
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5">
                            <img src="images/wed21.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="wedding" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Grand Wedding</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/wed22.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Information:</h5>
                                                <p>
                                                    Venue: Blossom<br> 
                                                    Venue Capacity:200<br>
                                                    Guest Count:150<br>
                                                    Caterer Confirmation:Confirmed<br>
                                                    Decorator Confirmation:Confirmed
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Name of Bride: Sneha Dey<br>
                                                    Name of Groom: Arijit Sen<br>
                                                    Preferences: Fusion<br>
                                                    Total Package: Rs.4,00,000<br>
                                                    Advance Received: Rs.1,50,000<br>
                                                    Address(Bride): 18,Keshab Pally,Ashoknagar<br>
                                                    Address(Groom): St. 20, Narkeldanga,Kolkata

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
                        <div class="subcontent col-md-6">
                            <h1 class="title">Grand Wedding</h1>
                            <p class="location">Blossom, Ashoknagar</p>
                            <p class="definition">As they exchange vows, let us be reminded of the power of love to bring people
                            together, foster growth, and create a lifetime of happiness.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#wedding">
                            Event Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
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
                    <div class="date col-md-3">
                            <span class="date"><h3>MAY 2</h3></span><br>
                        </div>
                        <div class="container">
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5">
                            <img src="images/ino2.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="mov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Movie Premiere: THUNDERBOLTS*</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/marmov.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Information:</h5>
                                                <p>
                                                    Venue: INOX Pictures, South City Mall, Prince Anwar Shah Road, Kolkata<br> 
                                                    Venue Capacity: 250<br>
                                                    Guest Count: 100<br>
                                                    Caterer Confirmation: Null<br>
                                                    Decorator Confirmation: Null
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Booked by: Fandom Initiative<br>
                                                    Booked venue: Audi(Screen)2 &Audi(Screen)4<br>
                                                    Total Package: Rs.1,00,000<br>
                                                    Advance Received: Rs.40,000<br>
                                                    Customer Address: Action Area 1, Kolkata<br>

                                                </p>
                                                <p>
                                                Note:<br>
                                                This event is no way sponsored by Marvel<br>
                                                First Come First Serve basis for tickets<br>
                                                To book your seat beforehand visit us at Fandom Initiative

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
                            <h1 class="title">Movie Premiere</h1>
                            <p class="location">INOX Pictures, South City Mall, Prince Anwar Shah Road</p>
                            <p class="definition">Mark your calendars! The premiere of THUNDERBOLTS* 
                                is happening on MAY 2nd 2025, 12 p.m. onwards. 
                                Let's celebrate!.<br>
                                PS: This an event created for the fans by the fans.<br>
                                Not an official event!

                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#mov">
                            Event Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
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
                    <div class="date col-md-3">
                            <span class="date"><h3>MAY 16</h3></span><br>
                        </div>
                        <div class="container">
            </div>
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5">
                            <img src="images/fare.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="pvt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Congratulatory Party</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/oglake.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>Information:</h5>
                                                <p>
                                                    Venue: OG By the Lake, 11A, 1J, E Topsia Rd, Kolkata<br> 
                                                    Venue Capacity: 70<br>
                                                    Guest Count: TBD<br>
                                                    Caterer Confirmation: Venue Catering<br>
                                                    Decorator Confirmation: Venue Decoration
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                    Booked by: Irvine Infocom<br>
                                                    Booked venue: Lake House<br>
                                                    Total Package: Rs.1,00,000<br>
                                                    Advance Received: Rs.30,000<br>
                                                    Company Address: Eco Space,New Town,Kolkata<br>

                                                </p>
                                                <p>
                                                Note:<br>
                                                This is a private event<br>
                                                Timing: 6 p.m.-> 9 p.m.<br>
                                                Only guests from the approved list will be entertained.

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
                            <h1 class="title">Congratulations!To your Next Chapter</h1>
                            <p class="location">OG By the Lake, 11A, 1J, E Topsia Rd, Kolkata</p>
                            <p class="definition">Please join us for an evening of delicious food, laughter, 
                                and heartfelt celebration.<br>
                                Your presence will make the occasion even more meaningful!<br>
                                Let's celebrate!.<br>
                                PS: This a Private Event<br>
                                Guest List Mandated.

                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#pvt">
                            Event Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
