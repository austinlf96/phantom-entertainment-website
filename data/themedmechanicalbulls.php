<!-- [INFO] Type: Mechanical Bull Page - Details: Explore the Mechanical Bull Rides. [INFO]-->

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-info"><span class="fa fa-home"></span> Home</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none" class="text-info">All Inflatables</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none#competition" class="text-info">Competition Games</a></li>
    <li id="dynamic-crumb" class="breadcrumb-item">Touchdown Tumble</li>
</ul>

<div class="btn-group d-flex flex-wrap flex-column flex-md-row justify-content-between my-3" role="group">
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="football">Touchdown Tumble</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="helmet">Helmet Ride</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="pumpkin">Pumpkin Ride</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="wizards">Whirling Wizards</button>
</div>

<div>
    <h3 id="title">Touchdown Tumble</h3>
    <p id="summary">So a classic <a href="page.php?title=mechanicalbull&extra=bull">Mechanical Bull</a> wasn't what you were looking for? Well you came to the right place! 
    Check out our variety of themed Mechanical Bull-style rides!</p>
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
                    <p>You might be the next Touchdown Tumble riding champion! How long can you ride the football?</p>
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
                            <span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16'L x 16'W x 10'H </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Recommended Total Space Needed for Setup">
                            <span><i class="fal fa-shoe-prints text-info"></i> Footprint</span>16'L x 16'W x 10'H</a>
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
        case 'football':
            properTab = 'Touchdown Tumble';
            break;
        case 'helmet':
            properTab = 'Helmet Ride';
            break;
        case 'pumpkin':
            properTab = 'Pumpkin Ride';
            break;
        case 'wizards':
            properTab = 'Whirling Wizards';
            break;
        default:
            properTab = 'Touchdown Tumble';
            break;
    }
    document.getElementById('dynamic-crumb').innerHTML = properTab;
    //Cards to replace elements in the "#container" - will eventually be moved to an external file that is imported rather than the monstosities below
    const football =    '<div class="row mb-3">' +
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
                                        '<p>You might be the next Touchdown Tumble riding champion! How long can you ride the football?</p>'+
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
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\'L x 16\'W x 10\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\'L x 16\'W x 10\'H </a>'+
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
    
    const helmet =      '<div class="row mb-3">' +
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
                                        '<p>You might be the next Football Helmet riding champion! How long can you ride the helmet?</p>'+
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
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\'L x 16\'W x 5\'H </a>'+
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                            'data-toggle="tooltip"' +
                                            'title="Recommended Total Space Needed for Setup">'+
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 16\'L x 16\'W x 10\'H </a>'+
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
    
    const pumpkin =  '<div class="row mb-3">' +
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
                                        '<p>If Cindarella\'s carriage met Harry Potter\'s Pompion Potion, you would find the Mechanical Pumpkin Ride at the intersection! This makes a great addition to a fall or halloween themed event! ' + 
                                        'It doesn\'t stop there though! Pumpkins are good year around!</p>'+
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

    const wizards =  '<div class="row mb-3">' +
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
                                        '<p>Harry Potter step aside. There\'s a new broomstick riding champion and it could be you! This is one of a kind unit. How long can you ride the broomstick?' +
                                        'The inflatable bed is an eye catching unit complete with castle walls. Check out our <a href=href="page.php?title=dragonsgate&extra=none">Dragon\'s Gate Obstacle Course</a>' +
                                        ' which can be combined with the Broomstick Challenge for a true wizarding adventure package.</p>'+
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
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 16\' Diameter x 5\'H </a>'+
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
        football: football, 
        helmet: helmet, 
        pumpkin: pumpkin, 
        wizards: wizards
    };

    function replaceCard(event) {
        switch(event.target.id){
            case 'football':
                document.getElementById('title').innerHTML = 'Touchdown Tumble';
                break;
            case 'helmet':
                document.getElementById('title').innerHTML = 'Helmet Ride';
                break;
            case 'pumpkin':
                document.getElementById('title').innerHTML = 'Pumpkin Ride';
                break;
            case 'wizards':
                document.getElementById('title').innerHTML = 'Whirling Wizards';
                break;              
            default:
                document.getElementById('title').innerHTML = "Touchdown Tumble";
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
