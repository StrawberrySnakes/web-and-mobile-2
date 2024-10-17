var moving;

function $(id) {
    return document.getElementById(id);
}



let id = document.getElementById("thingToMove");

function right(id) {
    stopMoving();
    var currentPos = parseInt($("thingToMove").style.left);
    currentPos ++;
    $("thingToMove").style.left = currentPos + "px";
    // console.log(currentPos);

    moving = setTimeout(right, 10, id);
    // setTimeout(function() {
    //     right(id);
    // } ,10);
    // $("#hello") is a shortcut...
}

function left(id) {
    stopMoving();
    var currentPos = parseInt($("thingToMove").style.left);
    currentPos --;
    $("thingToMove").style.left = currentPos + "px";
    moving = setTimeout(left, 10, id);
    // setTimeout(function() {
    //     left(id);
    // } ,10);
    // $("#hello") is a shortcut...
}

function stopMoving() {
    window.clearTimeout(moving);
}


function fadeOut(id) {
    // document.getElementsByTagName("button")[4].style.display = "none";
    $("thingToMove").style.transition = 1+"s";
    $("thingToMove").style.opacity = 0;
    // console.log("being called");

    // if (parseFloat($(id).style.opacity) >= 0) {
    //     $(id).style.opacity = parseFloat($(id).style.opacity) -.01;
    //     setTimeout(fadeOut, 10, id);
    //     document.getElementsByTagName("button")[4].disabled = true;
    // } else {
    //     document.getElementsByTagName("button")[4].disabled = false;
    // }
    
}


function fadeIn(id) {
    $("thingToMove").style.transition = 1+"s";
    $("thingToMove").style.opacity = 1;


    // console.log("being called");

    // if (parseFloat($(id).style.opacity) <= 1) {
    //     $(id).style.opacity = parseFloat($(id).style.opacity) + .01;
    //     setTimeout(fadeIn, 10, id);
    //     document.getElementsByTagName("button")[3].disabled = true;
    // } else {
    //     document.getElementsByTagName("button")[3].disabled = false;
    // }

    // document.getElementsByTagName("button")[3].style.display = "none";
    

}


