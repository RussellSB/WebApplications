//When the user presses "Enter" (key code 13) redirect to search_func
function handle(e){
    if(e.keyCode === 13){
        search_func()
    }
    return false;
}

//Searches for the product inputted from the searchbox
function search_func(){
    address=document.getElementById("searchbox").value;
    //write your specific code from here
    alert("You are searching: " + address);
}
