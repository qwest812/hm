// buffer

<script type="text/javascript">
    function buffer(){
        var a=5;
        function get(){
            return a;
        }
        function set(set){
            a=set;
        }
        return {
            get:get,
            ser:set
        }
    }
    var f=buffer();

    console.log(f.get());
    f.ser("sdfsdf");
    console.log(f.get());
</script>

//inheritance

<script type="text/javascript">
    function Animail(name) {
        this.name=name;
        this.speed=20;
    }


    function Cat(name){
        Animail.apply(this, arguments)

    }
    Cat.prototype=Object.create(Animail.prototype);
    Cat.prototype.constructor=Cat;


    function Dog(){
        this.run=function run(){
            console.log(111);
        }
    }

    Dog.prototype=Object.create((Animail.prototype));
    Dog.prototype.constructor=Dog;
</script>