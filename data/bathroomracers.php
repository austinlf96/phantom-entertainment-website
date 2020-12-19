<!-- [INFO] Type: Bathroom Racers Page - Details: Explore the Bathroom Racers. [INFO]-->

<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-info"><span class="fa fa-home"></span> Home</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none" class="text-info">All Inflatables</a></li>
    <li class="breadcrumb-item"><a href="page.php?title=inflatables&extra=none#competition" class="text-info">Competition Games</a></li>
    <li class="breadcrumb-item">Bathroom Racers</li>
</ul>
<!-- BUG: Cards not switching properly  -->
<div class="btn-group d-flex flex-wrap flex-column flex-md-row justify-content-between my-3" role="group">
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="bathtub" value="Bathtub Racers" >Bathtub Racers</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="go" value="Go Racers">Go Racers</button>
</div>

<div>
    <h3 id="title">Bathtub Racers</h3>
    <p id="summary">Don't be the last one in the tub who gets stuck with the cold water! With our bathtub race vehicles, 
    you can beat your friends to the finish line. Last one there gets the dirty water!</p>
</div>
<script type="text/Javascript">
    const go =      '<div class="row mb-3">' +
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
                                    '<p>Two contestants race around our unique inflated Race track.' +
                                    'The Go Racers can only be used on a hard surface like asphalt ,concrete, or a gym floor.' +
                                    '(They cannot operate on grass or gravel.)</p>'+
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
                                            '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 40\'L x 40\'W x 10\'H </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Recommended Total Space Needed for Setup">'+
                                            '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 40\'L x 40\'W x 10\'H </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Individual 110v - 20amp Breaker">'+
                                            '<span><i class="fal fa-plug text-info"></i> Power</span> 2 AC Circuits</a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Max Users Participating at Once">'+
                                            '<span><i class="fal fa-users text-info"></i> Max Participants</span> 3 </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Additional Limitations to Operate the Unit Safely">'+
                                            '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Min. player age: 10+ </a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

    const bathtub = '<div class="row mb-3">' +
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
                                    '<p>Race against your friend in our new Bathtub Racers. These special motorized tubs are designed for use indoors on hard floors or' +
                                    'outdoors on concrete or Asphalt. They cannot be used on grass or gravel. There is a chance that the wheels can make streaks on freshly waxed floors.' +
                                    'The track requires 1 power circuit to operate, but we like to have a second circuit to charge the spare batteries.</p>' +
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
                                            '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> 50\'L x 25\'W x 8\'H </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Recommended Total Space Needed for Setup">'+
                                            '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 52\'L x 30\'W x 9\'H  </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Individual 110v - 20amp Breaker">'+
                                            '<span><i class="fal fa-plug text-info"></i> Power</span> 1-2 AC Circuits</a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Max Users Participating at Once">'+
                                            '<span><i class="fal fa-users text-info"></i> Max Participants</span> 3 </a>'+
                                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                                        'data-toggle="tooltip"' +
                                        'title="Additional Limitations to Operate the Unit Safely">'+
                                            '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> Min. player age: 10+ </a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';

    const cards= {
            bathtub: bathtub,
            go: go
        };
    function replaceCard(event) {
        switch(event.target.id){
            case 'bathtub':
                document.getElementById('title').innerHTML = 'Bathtub Racers';
                break;
            case 'go':
                document.getElementById('title').innerHTML = 'Go Racers';
                break;
            default:
                document.getElementById('title').innerHTML = "Bathtub Racers";
                break;
        };
        document.getElementById('container').innerHTML = cards[event.target.id];
    }
    elements = document.getElementsByClassName('card-button');
    for(let i = 0; i < elements.length; i++){
        elements[i].addEventListener("click", replaceCard)
    }
</script>
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
                    <p>Race against your friend in our new Bathtub Racers. These special motorized tubs are designed for use indoors on hard floors or
                    outdoors on concrete or Asphalt. They cannot be used on grass or gravel. There is a chance that the wheels can make streaks on freshly waxed floors.
                    The track requires 1 power circuit to operate, but we like to have a second circuit to charge the spare batteries.</p>
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
                            <span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span>50'L x 25'W x 8'H</a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Recommended Total Space Needed for Setup">
                            <span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> 52'L x 30'W x 9'H </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Individual 110v - 20amp Breaker">
                            <span><i class="fal fa-plug text-info"></i> Power</span>1-2 AC Circuits</a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Max Users Participating at Once">
                            <span><i class="fal fa-users text-info"></i> Max Participants</span> 3 </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" 
                        data-toggle="tooltip" 
                        title="Additional Limitations to Operate the Unit Safely">
                            <span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span>Min. player age: 10+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
