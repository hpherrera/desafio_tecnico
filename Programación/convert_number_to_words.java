class Main {
    public static void main(String[] args) {
        int number = 745;
        convert_to_words(number);
    }

    /*
        El numero a evaluar debe estar en el rango de 0 - 999.
        Para convertir un numero a palabras se utilizaron arreglos de string, los cuales contienen las palabras.
        Cuando se ingresa un numero se convierte a un arreglo de caracteres para ver la posisicion de los numeros ya que esto es
        importante para buscar en los arrelos de string el numero segun la posicion que este contenga (centena = [2], decena = [1] , unidad = [0]).
        Luego se buscan las posiciones y dependiendo de como se compone el numero es lo que se muestra por pantalla.
    */
    static void convert_to_words(int number)
    {
        String[] digit_1 = new String[]{ "cero", "uno", "dos", "tres", "cuatro","cinco", "seis", "siete", "ocho", "nueve"}; 
        String[] digit_2 = new String[]{"dies", "once", "doce","trece", "catorce","quince", "dieciseis", "diecisiete","dieciocho", "diecinueve"}; 
        String[] digit_3 = new String[]{"", "", "veinte", "treinta", "cuarenta", "cincuenta","sesenta", "setenta", "ochenta", "noventa"}; 
        String[] digit_4 = new String[] {"","cien", "doscientos","trescientos","cuatrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos"}; 

        char[] number_char = Integer.toString(number).toCharArray(); 
        int size = number_char.length;
        if(size <= 0 || size > 3)
        {
            System.out.println("Solo acepta numeros que van entre 0 y 999"); 
        }
        else if (size == 1) 
        { 
            System.out.println(number +": " + digit_1[number_char[0] - '0']); 

        } 
        else if (size == 2){
            /* 10,..., 19 */
            if(number_char[0]-'0' == 1)
            {
                System.out.println(number +": " + digit_2[number_char[1] - '0']); 

            }
            /* 20, 30, ..., 90 */
            else if(number_char[1]-'0' == 0)
            {
                System.out.println(number +": " + digit_3[number_char[0] - '0']);

            }
            else{
                System.out.println(number +": " + digit_3[number_char[0] - '0'] +" y "+digit_1[number_char[1]  - '0']);

            }         
        }
        else
        {
            /* 100,200, .. , 900 */
            if(number_char[1]-'0' == 0 && number_char[2]-'0' == 0)
            {
                System.out.println(number +": " + digit_4[number_char[0] - '0']); 

            }
            /* 110, 120, ..., 190 */
            else  if(number_char[2]-'0' == 0)
            {
                System.out.println(number +": " + digit_4[number_char[0] - '0'] +"to "+ digit_3[number_char[1] - '0']); 

            }
            else if(number_char[1]-'0' == 0)
            {
                System.out.println(number +": " + digit_4[number_char[0] - '0'] +"to "+ digit_1[number_char[2] - '0']); 
            }
            else{
                if(number_char[1]-'0' != 1 && number_char[0]-'0' == 1)
                {
                    System.out.println(number +": " + digit_4[number_char[0] - '0'] +"to "+ digit_3[number_char[1] - '0'] +" y "+ digit_1[number_char[2] - '0']); 
                }
                else if(number_char[1]-'0' == 1)
                {
                    System.out.println(number +": " + digit_4[number_char[0] - '0'] +"to "+ digit_2[number_char[1] - '0']);
                }
                else
                {
                    System.out.println(number +": " + digit_4[number_char[0] - '0'] +" "+ digit_3[number_char[1] - '0'] +" y "+ digit_1[number_char[2] - '0']); 
                }
                
            }
                
        }        

    }

}