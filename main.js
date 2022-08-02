// assignemnt 1

document.getElementById('grandpa').onclick = function(){
    document.body.style.backgroundColor = 'red';
}

document.getElementById('dad').onclick = function(e){
    document.body.style.backgroundColor = 'blue';
    e.stopPropagation();
}

document.getElementById('kid').onclick = function(e){
    document.body.style.backgroundColor = 'skyblue';
    e.stopPropagation();
}

//assignment 2 .bind function

// var list = [ 'first', 'second'];
// //Create a list with for loop to show the print the array value.
// for( var i in list ) {
//     var li = document.createElement('li');
//     var textNode = document.createTextNode(list[i]);
//     var btn = document.createElement('button');
//     btn.innerHTML = "index";
//     console.log(i);
//     btn.onclick = function() {
//         alert('index is '+i);
//     }.bind(null, i);
//     li.appendChild(textNode);
//     li.appendChild(btn);
// document.body.appendChild(li);
// }