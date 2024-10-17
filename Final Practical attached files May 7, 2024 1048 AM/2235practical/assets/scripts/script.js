function validate() {

    let name = document.forms["myForm"]["name"].value;
    let comment = document.forms["myForm"]["comment"].value;
    let review = document.forms["myForm"]["review"].value;


    if (name == "") {
        alert("Name must be filled out");
        return false;
    } else if (comment == "") {
        alert("Comment must be filled out");
        return false;
    } else if (review == "") {
        alert("Review must be filled out");
        return false;
    } else {
        console.log(comment);
        return true;
    }

    // var form = document.getElementById("myForm");

    // var name = document.getElementById("name").value;
    // var review = document.getElementsByName("review").value;
    // var comment = document.getElementById("comment").value;

    // console.log(name);

    // if((name == "") && && (comment == "")) {
    //     alert("Must fill out form before submitting");
    //     return false;
    // }
    // return true;
}

let dark = false;

function changeMode() {
if(dark == false) {
document.querySelector("main").style.backgroundColor = "gray";
document.body.style.backgroundColor = "black";
document.getElementById("ul").style.backgroundColor = "lightgray"
dark = true;
} else {
    document.querySelector("main").style.backgroundColor = "#b2d6ff" ;
    document.body.style.backgroundColor = "#0c3360";
    document.getElementById("ul").style.backgroundColor = "#b2d6ff";
    dark = false;
}
}