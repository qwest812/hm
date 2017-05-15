<script type="text/javascript" >
    var line1=[2,-9,9,9,-82];

    var line2=[-1,-10,4,-10,-31];

    var line3=[-5,-8,5,-9,-29];

    var line4=[-5,2,0,5,-13];

    //функция делит на первый елемент все елементы масива
    function first(result) {
        var firstX=result[0];
        for(var i=0;i<result.length;i++){
            result[i]=result[i]/firstX;
        }
        return x;
    }
    //если минусовое число, меняет весь масив
function changeSymbol(number,arr) {
        if(number[0]<0){
            for(var i=0; i<arr.length; i++){
                arr[i]=-arr[i];

            }
        }
        console.log(arr);
        return arr;
}
// удаляет первый елемент для подальшего довления в другие line
function  equalX(arr ) {
    if(arr[0]===1){
        arr.shift();
    }
    return arr;
}
//обьеденяет массивы по значениям arr1 c 5-ю значениями и arr2 с 4-мя
function combiningArray(arr1, arr2) {
    var number=arr1[0];
    arr1.shift();
    window.write(number);
//    var newArr=new Array;
//
//    for(var i;i<=arr1.length;i++){
//        newArr[]=(number*arr1[i])+arr2[i];
//    }
//    return newArr;
}

line1=first(line1);
    line1=equalX(line1);
    line2=combiningArray(line2,line1);
//    console.log(line2);
</script>