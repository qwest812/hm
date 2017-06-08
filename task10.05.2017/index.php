<script type="text/javascript">
    var obj={
        q:"q",
        w:"w",
        f:{
            d:"d",
        g:"g"
        }
    }

    function copyObj(obj){
        if(typeof (obj)=="object"){
            var a=JSON.stringify(obj);
            a=JSON.parse(a);
            return a;
        }
    }

    function copyObj2(obj){
        if(typeof (obj)=="object"){

               }
    }

    var b;
    console.log(b=copyObj(obj));
</script>