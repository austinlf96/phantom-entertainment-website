<!-- [INFO] Type: Surf and Snowboard Mountain Pages - Details: Explore the Surf & Snowboard Mountain. [INFO]-->

<!-- Designed to utilize the JavaScript fill strategy for a page-->

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-info"><span class="fa fa-home"></span> Home</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none" class="text-info">All Inflatables</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none#competition" class="text-info">Competition Games</a></li>
    <li id="dynamic-crumb" class="breadcrumb-item"></li>
</ul>

<div class="btn-group d-flex flex-wrap flex-column flex-md-row justify-content-between my-3" role="group">
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="surf" value="Surf">Surf</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="snowboard" value="Snowboard Mountain">Snowboard Mountain</button>
</div>

<div>
    <h3 id="title">Surf</h3>
    <p id="summary">Catch some gnarly waves and "hang ten" on our Mechanical Surf Machine!</p>
</div>

<div id="container" class="container"></div>
<script type="text/JavaScript">

    //Get specific item clicked by user and fills the breadcrumb with it
    var params = window.location.href.split('?');
    params = params[1].split('&');
    params = params[1].split('=');
    const unitTab = params[1];
    let properTab;
    switch(unitTab){
        case 'snowboard':
            properTab = 'Snowboard Mountain';
            break;
        case 'surf': 
            propertab = 'Surf';
            break;
        default:
            properTab = 'Surf';
            break;
    }
    document.getElementById('dynamic-crumb').innerHTML = properTab;

    //Cards to replace elements in the "#container" - will eventually be moved to an external file that is imported rather than the monstosities below
    const surf =    '<div class="row mb-3">' +
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
                                    '<p> People will have a blast while they "Hang Ten" on our mechanical surf machine! If they fall off, they will have a lot of laughs as they fall' +
                                    ' onto a giant inflatable wave. This item is great fun for any time of the year and for kids and adults of all ages. We have two inflatable wave options:' +
                                    'The Large Tsunami Wave bed and the Low Wall Wave bed. </p>'+

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
                                            '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> Tsunami :  15\'L x 15\'W x 12\'H <br> Low Wall" 14\'L x 14\'W x 10\'H</a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Recommended Total Space Needed for Setup">'+
                                            '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> Tsunami: 15\'L x 15\'W x 12.5\'H <br> Low Wall" 14\'L x 14\'W x 10.5\'H </a>'+
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
                                            '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max. player weight: 300 lbs </a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
    const snowboard =    '<div class="row mb-3">' +
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
                                    '<p> The Snowboard Mountain is an exclusive Phantom Entertainment item. All the thrill of snowboarding without the snow. This unit is available for rental today!</p>'+
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
                                            '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 15\'L x 15\'W x 8\'H </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Recommended Total Space Needed for Setup">'+
                                            '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 15\'L x 15\'W x 10\'H </a>'+
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
                                            '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Max player weight: 300 lbs </a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

    const cards= {
        surf: surf, 
        snowboard: snowboard 
    };


    function replaceCard(event) {
        //Get the id of the button the user clicked and change the specific elements related to that button
        switch(event.target.id){
            case 'surf':
                document.getElementById('title').innerHTML = 'Surf';
                document.getElementById('summary').innerHTML = 'Catch some gnarly waves and "hang ten" on our Mechanical Surf Machine!';
                break;
            case 'snowboard':
                document.getElementById('title').innerHTML = 'Snowboard Mountain';
                document.getElementById('summary').innerHTML = 'Tear up the slopes without all the gear and cold weather with our Snowboard Mountain ride! Wipeouts feel better too.';
                break;
            default:
                document.getElementById('title').innerHTML = "Surf";
                document.getElementById('summary').innerHTML = 'Catch some gnarly waves and "hang ten" on our Mechanical Surf Machine!';
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