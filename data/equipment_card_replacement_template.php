<!--------------------------------------------------------- Buttons ------------------------------------->
   
<div class="btn-group d-flex flex-wrap flex-column flex-md-row justify-content-between my-3" role="group">
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="extreme" value="Extreme Laser Tag">Extreme Laser Tag</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="battledome" value="Battle Dome Laser Tag">Battle Dome Laser Tag</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="ufo" value="UFO Laser Tag" >UFO Laser Tag</button>
    <button class="card-button mw-50 btn btn-info border border-5 border-dark rounded justify-content-center p-2" id="bunker" value="Bunker Laser Tag">Bunker Laser Tag</button>
</div>

   <!----------------------------------------------------------- Card variable assignment templates ---------------------------------------------------------->
    '<div class="row mb-3">' +
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
                    '<p> BigDescription </p>'+
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
                            '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> ####### </a>'+
                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                        'data-toggle="tooltip"' +
                        'title="Recommended Total Space Needed for Setup">'+
                            '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> ######## </a>'+
                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                        'data-toggle="tooltip"' +
                        'title="Individual 110v - 20amp Breaker">'+
                            '<span><i class="fal fa-plug text-info"></i> Power</span> ### AC Circuits</a>'+
                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                        'data-toggle="tooltip"' +
                        'title="Max Users Participating at Once">'+
                            '<span><i class="fal fa-users text-info"></i> Max Participants</span> ### </a>'+
                        '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"' +
                        'data-toggle="tooltip"' +
                        'title="Additional Limitations to Operate the Unit Safely">'+
                            '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span> TBD </a>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>';

<!----------------------------------------------------Script for replaceable cards--------------------------------------------------------------------->

<!--<script src="./cards'.js" type="module"></script>-->
<script type="text/JavaScript">
    
    const bunker =      '<div class="row mb-3">' + 
                            '<div class="col-lg-12 p-0" id="gallery">' +
                                '<!--Equipment image thumbnail-->' +
                                '<!-- <img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="img-fluid img-thumbnail"/> -->' +
                            '</div>' +
                        '</div>' +
                        '<div class="row mb-3">' +
                            '<div class="col-lg-12 p-0">' +
                                '<div class="d-flex flex-nowrap justify-content-center mt-1">' +
                                    '<!-- Equipment images'+
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior01.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div>' +
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarrior02.jpg" class="card-img-top img-fluid img-thumbnail" style="height: 134px"/></a></div>' +
                                    '<div class="unit_card shadow-sm m-2"><a href="#gallery"><img src="images/Ninja Warrior/NinjaWarriorWall01.jpg" class="card-img-top img-fluid img-thumbnail" /></a></div>' +
                                    '-->' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="row mb-3">' +
                            '<div class="col-lg-7 col-md-12 p-0">' +
                                '<!-- UNIT DESCRIPTION CARD -->' +
                                '<div class="card shadow-sm m-1">' +
                                    '<div class="card-header p-2"><h5>Unit Description</h5></div>' +
                                    '<div class="card-body p-2">' +
                                        '<p>Laser Tag is now available with our <a href="page.php?title=paintball&extra=none">Paintball</a> styled bunkers. This can be played inside or outside. ' +
                                        'If inside, it\'s best to use a small gym or large group room.</p>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="col-lg-5 col-md-12 p-0">' +
                                '<!-- UNIT INFO LIST -->' +
                                '<div class="card shadow-sm m-1">' +
                                    '<div class="card-header p-2"><h5>Unit Specifications</h5></div>' +
                                    '<div class="card-body p-2">' +
                                        '<div class="list-group list-group-flush">' +
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="tooltip" title="Actual Dimensions of the Unit">' +
                                                '<span><i class="fal fa-ruler-triangle text-info"></i> Dimensions</span> Variable</a>' +
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="tooltip" title="Recommended Total Space Needed for Setup">' +
                                                '<span><i class="fal fa-shoe-prints text-info"></i> Footprint</span> Variable</a>' +
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="tooltip" title="Individual 110v - 20amp Breaker">' +
                                                '<span><i class="fal fa-plug text-info"></i> Power</span>1 AC Circuit</a>' +
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="tooltip" title="Max Users Participating at Once">' +
                                                '<span><i class="fal fa-users text-info"></i> Max Participants</span> 10 </a>' +
                                            '<a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" data-toggle="tooltip" title="Additional Limitations to Operate the Unit Safely">' +
                                                '<span><i class="fal fa-exclamation-circle text-warning"></i> Limitations</span>TBD</a>'+
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>';                       

    const cards= {
        extreme: extreme
    };
    function replaceCard(event) {
        switch(event.target.id){
            case 'extreme':
                document.getElementById('title').innerHTML = 'Extreme Laser Tag';
                document.getElementById('summary').innerHTML = 'Summary stuff';
                break;
            default:
                document.getElementById('title').innerHTML = "Mechanical Bull";
                document.getElementById('summary').innerHTML = 'Summary stuff';
                break;
        }
        document.getElementById('container').innerHTML = cards[event.target.id];
    }
    elements = document.getElementsByClassName('card-button');
    for(let i = 0; i < elements.length; i++){
        elements[i].addEventListener("click", replaceCard)
    }
</script>