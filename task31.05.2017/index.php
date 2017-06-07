<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div  id="text">sdfsdfs</div>
<div class="example">First div element with class="example".</div>
<p>123123123</p>
<input type="submit" name="send" value="222">
<button onclick="hide()">Hiden</button>


</script>

<script type="text/javascript">
    var id =document.getElementById("text");
    id.innerHTML="Hello";


var dd=document.getElementsByClassName("example");
dd[0].style.color="#FF0000";


var price=document.getElementsByName("send");
price[0].value="111";


function hide(){
    var tag =document.getElementsByTagName("p");
tag[0].style.display="none";
}
</script>



<script type="text/javascript">
    function Animal(name){
        this.name= name;
        this.run = function()
        {
            console.log("lalal");
        }
    }

    var animal =new Animal('Hulk');
    animal.run();

    Animal.test ="lalal22";
Animal.array=["Apple", "Orange"];
    Animal.test2=function(){
        console.log(this.array);

    }

    Animal.test2();
</script>
</body>
</html>

