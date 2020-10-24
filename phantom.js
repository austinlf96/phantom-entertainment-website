$(document).ready(function()
{
    // Global Variables
    
    $(document).on("click", ".unit_card", function()
    {
        //console.log(this.firstChild.firstChild.src);
        document.getElementById("gallery").innerHTML = "<img src='" + this.firstChild.firstChild.src + "' class='img-fluid img-thumbnail' />";
    });

    document.getElementById("menuSelect").addEventListener("change", function()
    {
        //console.log(this.value);
        window.location.assign("page.php?title=" + this.value + "&extra=none");
    });

    $('#requestQuote').click(function()
    {
        window.location.assign("page.php?title=quote&extra=none");
    });
});