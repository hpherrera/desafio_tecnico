class Main {
    /*
        Sabiendo que 5 factorial da como resultado 120 , siendo el primero número que tiene como resultado un número con un 0 a la derecha.
        Entonces cada 5 números el resultado del factorial va aumentar en un cero a la derecha, pero hay números que contienen al 5 más de una vez.
        Para ello necesitamos buscar los multiplos de 5 dentro del n!, entonces la multiciplicidad de 5 dentro de n! seria igual a n/5.
     */
    public static void main(String[] args) {
        int numero = 100; 
        System.out.println(count_ceros(numero));
        System.out.println(count_ceros2(numero));
    }

    /*
        En la primera función se recorre todo el número que se desea conocer la cantidad de ceros que obtiene como resultado de su factorial.
        Como utilizamos a 5 como multiplo iremos avanzando de 5 por 5 en en la división del número.
        Si cumple la condición de que el "numero / i" ( i : el cual es multiplo de 5), el resultado de esa división se guarda en un contador.
     */
    static int count_ceros(int numero) 
    { 
        int count = 0; 
        for (int i = 5; numero / i >= 1; i *= 5) 
            count += numero / i; 
        return count; 
    } 

    /*
        En la segunda función lo hacemos de una forma recursivamente.
        En donde se vuelve a llamar a la funcíon para carcular nuevamente el resultado de número/5. 
        y asi sumar el resultado a la misma operación realizada anteriormente.
     */
    static int count_ceros2(int numero)
    {
        if (numero > 0)
            return numero / 5 + count_ceros2(numero / 5) ;
        else
            return 0;
    }

}