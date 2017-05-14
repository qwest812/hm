<script type="text/javascript" >
    var x1=[2,-9,9,9,-82];

    var x2=[-1,-10,4,-10,-31];

    var x3=[-5,-8,5,-9,-29];

    var x4=[-5,2,0,5,-13];
    function first(x) {
        var firstX=x[0];
        for(var i=0;i<x.length;i++){
            x[i]=x[i]/firstX;
            alert(x[i]);
        }
    }
function changeSymbol(y2) {
        if(y2[0]<0){
            for(var i=0; i<y2.length; i++){
                y2[i]=-y2[i];

            }
        }
        console.log(y2);
        return y2;

}
var q=changeSymbol(x2);
//    alert(q[1]);

</script>