class Rettangolo{

    constructor(xv, yv, width, height){
        this.xv = xv;
        this.yv = yv;
        this.width = width;
        this.height = height;
    }

    tojson(){
        return "{\"xv\": "+xv+ "," +
               " \"yv\": "+yv+ "," +
               " \"width\": "+width+ "," +
               " \"height\": "+height + "}";
    }
}

//main()
var r = new Rettangolo(5, 7, 2, 6);
var strJson = r.tojson();
console.log(strJson);