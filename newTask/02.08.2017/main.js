var ourRequest = new XMLHttpRequest;
var btn = document.getElementById('btn');
var animalContainer = document.getElementById("animal-info");
var click = 0;
btn.addEventListener("click", function () {
    ourRequest.open("GET", "http://education/hm/newTask/02.08.2017/JSON.json", true);
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
        render(ourData);
    };
    ourRequest.send();

});
function render(data) {
    var lengh = data.length;
    var renderHTML = "";

    for (var i = 0; i < lengh; i++) {
        if (i == click) {
            for (var name in data[i]) {
                renderHTML += data[i][name] + "---";
            }
            renderHTML += "<br>";
        }
    }
    console.log(click);
    console.log(lengh);
    if (click < lengh) {
        click++;
        if(click>lengh ||click==lengh){
            click=0;
        }
    }

    animalContainer.insertAdjacentHTML('beforeend', renderHTML);
}
/**
 * Created by PC-1 on 08.08.2017.
 */

