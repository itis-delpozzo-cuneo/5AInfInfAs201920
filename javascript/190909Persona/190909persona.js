//Definiamo oggetto (pag.B2)
// utilizzando il JSON
// attributo -> chiave:valore separati-da-virgola
// metodo -> funzione
//var anni; -> no perché anni sarebbe globale
var persona={
    nome : "Lepre Ferdinando",
    natoIl : new Date(2000, 3, 21),
    eta() {
        let diffMs = Date.now() - this.natoIl.getTime();
        anni = diffMs / (360 * 86400 * 1000)
        return anni; 
    },
    getNome(){
        return this.nome;
    }
}