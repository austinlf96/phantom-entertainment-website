<!-- [INFO] Type: Mechanical Bull Page - Details: Explore the Mechanical Bull Rides. [INFO]-->

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-info"><span class="fa fa-home"></span> Home</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none" class="text-info">All Inflatables</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none#competition" class="text-info">Competition Games</a></li>
    <li id="dynamic-crumb" class="breadcrumb-item">Mechanical Bull</li>
</ul>

<div class="btn-group d-flex flex-wrap flex-column flex-md-row justify-content-between my-3" role="group">
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="bull">Mechanical Bull</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="doublebull">Bull Ride Off</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="greatwhite">Great White Shark</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="hammerhead">Hammerhead Shark</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="hog">Harley the Hog</button>
</div>

<div>
    <h3 id="title">Mechanical Bull</h3>
    <p id="summary">Yeeeehaaw! Take a ride on our Mechanical Bull. Remember: don't grab the Bull by the horns! We also have a Mechanical Hog, Mechanical Sharks, and
        more <a href="page.php?title=themedmechanicalbulls&extra=none">Themed Mechanical Bull rides</a>!</p>
</div>

<div id="container" class="container">
    <div class="row mb-3">
        <div class="col-lg-12 p-0" id="gallery">
            <!--Equipment image thumbnail-->
            <!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-12 p-0">
            <div class="d-flex flex-nowrap justify-content-center mt-1">
                <!-- Equipment images
                <div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div>
                <div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div>
                <div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div>
                -->
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-7 col-md-12 p-0">
            <!-- UNIT DESCRIPTION CARD -->
            <div class="card shadow-sm m-1">
                <div class="card-header p-2"><h5>Unit Description</h5></div>
                <div class="card-body p-2">
                    <p>No matter what kind of event you are having, renting a Mechanical Bull will be the hit of the party! Our Mechanical Bull rentals are great for Colleges, 
                        High Schools, Birthday Parties, Corporate Functions, Bar / Bat Mitzvahs, Western Theme Parties or any other event! You may be asking yourself, is renting a 
                        mechanical bull safe? Our mechanical bull is an electronic Galaxy Bull, the safest bull on the market! Whether the rider is 10 years old or 50, we can 
                        adjust the mechanical bull speed to meet the rider. You may have seen our mechanical bull on Spike TV, the Tony Danza Show or a Delta Airlines Commercial. 
                        Rick Schroder (Silver Spoons and NYPD Blue) rode the bull while on the Tony Danza Show.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 p-0">
            <!-- UNIT INFO LIST -->
            <div class="card shadow-sm m-1">
                <div class="card-header p-2"><h5>Unit Specifications</h5></div>
                <div class="card-body p-2">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Actual Dimensions of the Unit">
                            <span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16' Diameter x 10'H </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Recommended Total Space Needed for Setup">
                            <span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16' Diameter x 10'H </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Individual 110v - 20amp Breaker">
                            <span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Max Users Participating at Once">
                            <span><i class="fal fa-users text-info"></i> Max Participants</span> 1 </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Additional Limitations to Operate the Unit Safely">
                            <span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span>Max. player weight: 300 lbs<br>Min. player height: 48'' </a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<script>

    //Get specific item clicked by user and fills the breadcrumb with it
    var params = window.location.href.split('?');
    params = params[1].split('&');
    params = params[1].split('=');
    const unitTab = params[1];
    let properTab;

    switch(unitTab){
        case 'bull':
            properTab = 'Mechanical Bull';
            break;
        case 'doublebull':
            properTab = 'Bull Ride-Off';
            break;
        case 'greatwhite':
            properTab = 'Great White Shark';
            break;
        case 'hammerhead':
            properTab = 'Hammerhead Shark';
            break;
        case 'hog':
            properTab = 'Harley the Hog';
            break;
        default:
            properTab = 'Mechanical Bull';
            break;
    }
    document.getElementById('dynamic-crumb').innerHTML = properTab;
    //Cards to replace elements in the "#container" - will eventually be moved to an external file that is imported rather than the monstosities below
    const bull =        '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->'+
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-12 p-0">'+
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">'+
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div> '+
                                    '-->'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-7 col-md-12 p-0">'+
                                '<!-- UNIT DESCRIPTION CARD -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<p>No matter what kind of event you are having, renting a Mechanical Bull will be the hit of the party! Our Mechanical Bull rentals are great for Colleges,' + 
                                            'High Schools, Birthday Parties, Corporate Functions, Bar / Bat Mitzvahs, Western Theme Parties or any other event! You may be asking yourself, is renting a ' + 
                                            'mechanical bull safe? Our mechanical bull is an electronic Galaxy Bull, the safest bull on the market! Whether the rider is 10 years old or 50, we can ' +
                                            'adjust the mechanical bull speed to meet the rider. You may have seen our mechanical bull on Spike TV, the Tony Danza Show or a Delta Airlines Commercial. ' + 
                                            'Rick Schroder (Silver Spoons and NYPD Blue) rode the bull while on the Tony Danza Show.</p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-5 col-md-12 p-0">'+
                                '<!-- UNIT INFO LIST -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<div class="list-group list-group-flush">'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Actual Dimensions of the Unit">'+
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\' Diameter x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\' Diameter x 10\'H  </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Individual 110v - 20amp Breaker">'+
                                                '<span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Max Users Participating at Once">'+
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 1 </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Additional Limitations to Operate the Unit Safely">'+
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs<br>Min. player height: 48\'\' </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
    
    const doublebull =      '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->'+
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-12 p-0">'+
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">'+
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div> '+
                                    '-->'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-7 col-md-12 p-0">'+
                                '<!-- UNIT DESCRIPTION CARD -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<p>Want a little more action? Our Double Mechanical Bull is the ultimate competition. 2 Bulls, 2 Riders, 1 Winner! </p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-5 col-md-12 p-0">'+
                                '<!-- UNIT INFO LIST -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<div class="list-group list-group-flush">'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Actual Dimensions of the Unit">'+
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 32\'L x 16\'W x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 40\'L x 20\'W x 10\'H  </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Individual 110v - 20amp Breaker">'+
                                                '<span><i class="fal fa-plug text-info"></i> Power</span> 4 AC Circuits</a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Max Users Participating at Once">'+
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 2 </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Additional Limitations to Operate the Unit Safely">'+
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs<br>Min. player height: 48\'\' </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
    
    const greatwhite =  '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->'+
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-12 p-0">'+
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">'+
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div> '+
                                    '-->'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-7 col-md-12 p-0">'+
                                '<!-- UNIT DESCRIPTION CARD -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<p>If you thought the mechancial bull was great, wait until you try Shark Attack! Ride it just like the Mechanical Bull. Great for beach or tropical themed parties. </p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-5 col-md-12 p-0">'+
                                '<!-- UNIT INFO LIST -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<div class="list-group list-group-flush">'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Actual Dimensions of the Unit">'+
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\' Diameter x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\' Diameter x 10\'H  </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Individual 110v - 20amp Breaker">'+
                                                '<span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Max Users Participating at Once">'+
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 1 </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Additional Limitations to Operate the Unit Safely">'+
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs<br>Min. player height: 48\'\' </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

    const hammerhead =  '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->'+
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-12 p-0">'+
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">'+
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div> '+
                                    '-->'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-7 col-md-12 p-0">'+
                                '<!-- UNIT DESCRIPTION CARD -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<p>If you thought the mechancial bull was great, wait until you try Shark Attack! Ride it just like the Mechanical Bull. Great for beach or tropical themed parties. </p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-5 col-md-12 p-0">'+
                                '<!-- UNIT INFO LIST -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<div class="list-group list-group-flush">'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Actual Dimensions of the Unit">'+
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\' Diameter x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\' Diameter x 10\'H  </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Individual 110v - 20amp Breaker">'+
                                                '<span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Max Users Participating at Once">'+
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 1 </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Additional Limitations to Operate the Unit Safely">'+
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs<br>Min. player height: 48\'\' </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

    const hog        =  '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->'+
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-12 p-0">'+
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">'+
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div> '+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div> '+
                                    '-->'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row mb-3">'+
                            '<div class="col-lg-7 col-md-12 p-0">'+
                                '<!-- UNIT DESCRIPTION CARD -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<p>Nothing is funnier than watching people ride Harley the Hog. The Harley ride uses the same system as our mechanical bull with the inflated bed and control system. ' + 
                                        'Great for any age! </p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-lg-5 col-md-12 p-0">'+
                                '<!-- UNIT INFO LIST -->'+
                                '<div class="card shadow-sm m-1">'+
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>'+
                                    '<div class="card-body p-2">'+
                                        '<div class="list-group list-group-flush">'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Actual Dimensions of the Unit">'+
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\' Diameter x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\' Diameter x 10\'H  </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Individual 110v - 20amp Breaker">'+
                                                '<span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Max Users Participating at Once">'+
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 1 </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Additional Limitations to Operate the Unit Safely">'+
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs<br>Min. player height: 48\'\' </a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
    
    const cards= {
        bull: bull,
        doublebull: doublebull, 
        greatwhite: greatwhite, 
        hammerhead: hammerhead,
        hog: hog
    };

    function replaceCard(event) {
        switch(event.target.id){
            case 'bull':
                document.getElementById('title').innerHTML = 'Mechanical Bull';
                break;
            case 'doublebull':
                document.getElementById('title').innerHTML = 'Bull Ride Off';
                break;
            case 'greatwhite':
                document.getElementById('title').innerHTML = 'Great White Shark';
                break;
            case 'hammerhead':
                document.getElementById('title').innerHTML = 'Hammerhead Shark';
                break;
            case 'hog':
                document.getElementById('title').innerHTML = 'Harley the Hog';
                break;               
            default:
                document.getElementById('title').innerHTML = "Mechanical Bull";
                break;
        }
        document.getElementById('container').innerHTML = cards[event.target.id];
    }

    //Assign each button its own replaceCard() function
    elements = document.getElementsByClassName('card-button');
    for(let i = 0; i < elements.length; i++){
        elements[i].addEventListener("click", replaceCard);
    }

    //Simulates the "button click" to fill the container element, as determined by the variables used to create the breadcrumb above
    (unitTab!='none') ? document.getElementById(unitTab).click() : document.getElementById('surf').click();
</script>
