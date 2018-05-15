//When the user presses "Enter" (key code 13) redirect to search_func

function handle(e){
    if(e.keyCode === 13){
        search_func()
    }
    return false;
}

//Searches for the product inputted from the searchbox
function search_func(){
    var address=document.getElementById("searchbox").value;
    if(address===""){
        alert("Nothing inputted");
    }else{
        if(address.indexOf(">") >= 0 || address.indexOf("<") >= 0 || address.indexOf("%") >= 0 ||
            address.indexOf(";") >= 0 || address.indexOf("*") >= 0){
            alert("Invalid character in search, please do not use <, >, ;, * or %");
        }else {
            var Query  = document.getElementById("searchbox").value;
            //write your specific code from here
            //todo call php function to search the database and return the top 5 results.
            location.href = "../php-functions/searching.php?query=" + Query;
        }
    }
}

function toCart(){
    alert("Do i work?");
    location.href = "../page-structures/cart.php"
}

function goToProduct(productID){
    location.href = "../page-structures/singleproduct.php?pid=" + productID;
}

function toProducts(productID){
    location.href = "../page-structures/singleproduct.php?pid=" + productID;
}