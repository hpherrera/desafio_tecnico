import java.util.Scanner;
import java.util.ArrayList;

class Main {
  
  public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
    int cantidad_cartas;
    String nombre_mazo, nombre_usuario;
    System.out.print("Introduzca nombre: ");
    nombre_usuario = sc.next();
    System.out.print("Introduzca nombre para el mazo: ");
    nombre_mazo = sc.next();
    System.out.print("Introduzca cantidad de cartas para el mazo: ");
    cantidad_cartas = sc.nextInt();

    Usuario usuario = new Usuario(nombre_usuario);
    Mazo mazo = new Mazo(nombre_mazo);
    
    int i  = 0;
    while(i<cantidad_cartas){
        
        System.out.print("Introduzca nombre para la carta: ");
        String nombre = sc.next();
        System.out.print("Introduzca valor: ");
        String valor = sc.next();

        Carta carta = new Carta(nombre,valor);

        mazo.agregarCarta(carta);
        System.out.println();
        i++;
    }
    usuario.agregarMazo(mazo);
    usuario.editarMazo(mazo);
  }
}

class Usuario{
    public String nombre;
    public ArrayList<Mazo> mazos;

    public Usuario(String nombre){
        this.nombre = nombre;
        this.mazos = new ArrayList<Mazo>();
    }

    /**
    * @return nombre de la usuario
    */
    public String getNombre() {
        return nombre;
    }
    
    /**
    * Modifica el nombre del usuario
    * @param nombre
    */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
    * Agrega un mazo al usuario
    */
    public void agregarMazo(Mazo mazo){
        this.mazos.add(mazo);
    }
    /**
    * Muestra los mazos del usuario
    */
    public ArrayList<Mazo> misMazos(){
        return this.mazos;
    }

    /**
    * elimina un mazo de un usuario
    */
    public void eliminarMazo(Mazo mazo){
        this.mazos.remove(mazo);
    }

    /**
    * edita un mazo de usuario
    */
    public void editarMazo(Mazo mazo){
        for(int i=0; i < this.mazos.size(); i++)
        {
            if(this.mazos.get(i).nombre.equalsIgnoreCase(mazo.getNombre())) {
                this.mazos.set(i, mazo);
            }
            
        }
    }
}

class Mazo{
    public String nombre;
    public ArrayList<Carta> cartas;
    public Mazo(String nombre){
        this.nombre = nombre;
        this.cartas = new ArrayList<Carta>();
    }

    /**
    * @return nombre del mazo
    */
    public String getNombre() {
        return nombre;
    }
    
    /**
    * Modifica el nombre del mazo
    * @param nombre
    */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
    * Agrega una carta al mazo
    */
    public void agregarCarta(Carta carta){
        this.cartas.add(carta);
    }
    /**
    * Muestra las cartas del mazo
    */
    public ArrayList<Carta> misCartas(){
        return this.cartas;
    }

    /**
    * elimina un mazo de un usuario
    */
    public void eliminarCarta(Carta carta){
        this.cartas.remove(carta);
    }

    /**
    * edita una carta de usuario
    */
    public void editarCarta(Carta carta){
        for(int i=0; i < this.cartas.size(); i++)
        {
            System.out.print("edit carta");
            if(this.cartas.get(i).nombre.equalsIgnoreCase(carta.getNombre())) {
                this.cartas.set(i, carta);
            }
        }
    }
}

class Carta{
  public String nombre;
  public String valor;

  public Carta(String nombre, String valor){
    this.nombre = nombre;
    this.valor  = valor;
  }

  /**
    * @return nombre de la carta
    */
  public String getNombre() {
      return nombre;
  }
 
  /**
    * Modifica el nombre de la carta
    * @param nombre
    */
  public void setNombre(String nombre) {
      this.nombre = nombre;
  }

  /**
    * @return valor de la carta
    */
  public String getValor() {
      return valor;
  }

  /**
    * Modifica el valor de la carta
    * @param nombre
    */
  public void setValor(String valor) {
      this.valor = valor;
  }

}