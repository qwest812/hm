
<script type="text/javascript">
    var arr=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    var arr2=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    var word=["J","A","S","I","N","E"];
    var key =["L","O","V","E", "I","N"];

    function array_combine( keys, values ) {


    	var new_array = {}, keycount=keys.length, i;

    	// input sanitation
    	if( !keys || !values || keys.constructor !== Array || values.constructor !== Array ){
    		return 1;
    	}

    	// number of elements does not match
    	if(keycount != values.length){
    		return 2;
    	}

    	for ( i=0; i < keycount; i++ ){
    		new_array[keys[i]] = values[i];
    	}

    	return new_array;
    }

 var newArray=(array_combine(key,word));

    var doubleArr=new Array(26);

    for(var i=0; i<arr.length;i++){
        doubleArr[i]= new Array(26);
        for(var  j=0; j<arr2.length;j++){

            doubleArr[i][j] = arr2[j];
        }
        var key2= arr2[0];
        arr2.shift();
        arr2.push(key2);

    }
    function findKey(arr, val){
        for (var i=0;i<arr.length;i++){
            if(arr[i]==val){
                return i;
            }
        }
    }


        var cryptWord=[];
        for( i=0; i<word.length;i++){
            findLetter=findKey(arr,word[i]);
            for(j=0;j<key.length;j++){
                findLetterKrypt=findKey(arr,key[i]);

            }
            cryptWord[cryptWord.length]=doubleArr[findLetter][findLetterKrypt];

        }
// crypt word
console.log(cryptWord);
//    console.log(arr2);
/////////////////decrypt
    var uncryptWord=[];
        for(j=0;j<key.length;j++){
            findLetter=findKey(arr,key[j]);
            for(var m=0;m<arr.length;m++){
                if(doubleArr[findLetter][m]==cryptWord[j]){
                    uncryptWord[uncryptWord.length]=arr[m];
                }
            }
    }
    console.log(uncryptWord);

function replase(arr, count){
    for( var g=0; g<count;g++){
        keyasd= arr[0];
        arr.shift();
        arr.push(keyasd);
    }
    return arr;

}
</script>