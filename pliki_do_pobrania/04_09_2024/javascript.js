document.write("na ekran z pliku");
console.log("do konsoli z pliku");
console.log("text",123,window); // Wyświetlanie różnych danych w konsoli
console.table([1,2,3,4]); // Tabela w konsoli
console.group("Grupa");      // |
    console.log("element1"); // |
    console.log(2);          // | Grupa tekstów w konsoli
    console.log("element3"); // |
console.groupEnd();          // |