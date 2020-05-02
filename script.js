function pop(){
var name = document.getElementById("name").value;
var address = document.getElementById("address").value;
    alert(name + ", благодарим за поръчката!");
}

function myFunction() {
    var x = document.getElementById("myText").value;
  var newParagraph = document.createElement("p");
        newParagraph.textContent = myText.value;
        document.getElementById("myDIV").appendChild(newParagraph);
}