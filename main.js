function addOnClick() {
    // Create clone of <div class='characterChild'>
    var newel = $('.characterChild:last').clone();

    // Add listener for the add button
    newel.find(".addButton").click(addOnClick);

    // Add after last <div class='characterChild'>
    $(newel).insertAfter(".characterChild:last");
}

$('.addButton').click(addOnClick);

// This is to wait for body to be loaded. Not required if code is at the bottom
// $(document).ready(function () {
// });

// write
// https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
// fetch()

// read
fetch("random.php").then(resp => {
    resp.json().then(data => {
        console.log(data)
    })
})