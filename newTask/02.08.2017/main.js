var ourRequest =new XMLHttpRequest;
var btn= document.getElementById('btn');
var animalContainer=document.getElementById("animal-info");
var click=1;
btn.addEventListener("click",function(){

ourRequest.open("GET","http://education/hm/newTask/02.08.2017/JSON.json");
ourRequest.onload=function(){
    //console.log(JSON.stringify(ourRequest.responseText));
    var ourData= JSON.parse(ourRequest.responseText);
    //console.log(ourData);
    //console.log(JSON.stringify(ourRequest.responseText));
    //console.log(ourData[0]);
    render(ourData);
};
    ourRequest.send();

});


function render(data){
    var lengh=data.length;
    var renderHTML="";

    for(var i=0; i<lengh;i++){
        if(i==click){
        for(var name in data[i]){

                        renderHTML+=data[i][name]+"---";

                    }
            renderHTML+="<br>";
        }


        }
    console.log(click);
    console.log(lengh)
    if(click>lengh){
                click=0;
    }
    click++;
animalContainer.insertAdjacentHTML('beforeend',renderHTML);
}
/**
 * Created by PC-1 on 08.08.2017.
 */

