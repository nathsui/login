const $tiempo = document.querySelector('.tiempo'), //variables
$fecha = document.querySelector('.fecha');

function digitalClock(){ //crear funcion
    let f =new Date(), // variable f para obtener la fecha
    dia = f.getDate (),
    mes = f.getMonth() +1, //para que se muestre el 0 en el mes
    anio =f.getFullYear(),
    diaSemana = f.getDay();

//el metodo slice toma una parte de un array, si el indice es negativo se comienza en el elemento -n comenzando por el final
    dia =('0' + dia).slice(-2); //recorta en este caso los numeros que se quieren mostrar
    mes =('0' + mes).slice(-2)

    let timeString = f.toLocaleTimeString();
    $tiempo.innerHTML = timeString;

    let semana = ['DOM','LUN','MAR','MIE','JUE','VIE','SAB',];
    let showSemana = (semana[diaSemana]);
    $fecha.innerHTML = `${anio}-${mes}-${dia} ${showSemana}`
}
setInterval(() => {// setInterval se una para hacer que una funcion se repita con un tiempo de retraso entre cada ejecucion
    digitalClock() // llamar function

},1000); //equivalente a 1 segundo de tiempo