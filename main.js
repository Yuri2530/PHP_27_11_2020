
let a = 0;
/*while(a<=10){
document.write(a);
a++;
}*/

/*do{
    document.write(a+"<br>");
    a++;
}while(a);*/

//array

/*let lista = ["Yuri", "Sanguino"];
lista1["nombre1"] = "Yuri";
lista2["nombre2"] = "Sanguino";
console.log(lista2);*/


//funciones
/*function saludar(p1){
    return "Hola : "+p1;
}
document.write(saludar("Yuri"));*/

document.write(operaciones_matematicas(5,5,"suma"));
document.write(saludar("<br>"));
function operaciones_matematicas (num1,num2,opcion){
let = resulta;
    switch (opcion) {
        case 'suma':
            return(num1+num2);
            break;
            case 'resta':
                return(num1-num2);
                break;
        default:
            
            break;
    }
    return resulta;
}