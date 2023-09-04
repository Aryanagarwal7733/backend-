function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var users = document.forms['myForm']["fname"].value;
    if (users.length<5){
        seterror("users", "*Length of users is too short");
        returnval = false;
    }

    if (users.length == 0){
        seterror("users", "*Length of users cannot be zero!");
        returnval = false;
    }
    var addresses = document.forms['myForm']["furl"].value;
    if (addresses.length>15){
        seterror("addresses", "*addresses length is too long");
        returnval = false;
    }


    return returnval;
}

