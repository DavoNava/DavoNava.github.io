
import java.sql.*;



public class ConexionBaseDeDatos{
   
      private Connection conexion;
      private Statement consultas;
      private ResultSet resultados;

      public ConexionBaseDeDatos(){
      	try{
      		Class.forName("com.mysql.jdbc.Connection");
      		conexion = DriverManager.getConnection("jdbc:mysql://localhost/registropersonas","root","");
      		consultas = conexion.createStatement();
      	} catch (Exception e){
      		System.err.println("No se pudo conectar");
      	}
      }

      public String consular(){
      	String salida = "";
      	Stringconsulta = "SELECT * FROM persona";

      	try{
      		resultado = consultas.executeQuery(consulta);
      		while(resultado.next()){
			    salida += resultado.getString(1) + "\t";
      			salida += resultado.getString(2) + "\t";
      			salida += resultado.getString(3) + "\t";
      			salida += resultado.getString(4) + "\t";
      			salida += resultado.getString(5) + "\t\n";
      		}
      	}catch (Exception e){
      		System.err.println("No se pudo consultar" + e.getMessage());
      	}

      	return salida;
      }

      public void insertar(String usuario, String email, String empresa, String contraseña, String confirmar){
      	try {
      		consultas.executeUpdate("INSERT INTO persona VALUES ('"+usuario+"','"+email+"','"+empresa+"', '"+contraseña+"','"+confirmar+"')");
      	}catch (Exception e){
      		System.err.println("No se pudo insertar" + e.getMessage());
      	}
      }

      public static void main(String[] args) {
      	ConexionBaseDeDatos cbd = new ConexionBaseDeDatos();
      	System.out.println(cbd.consultar());
      	cbd.insertar("Fabian","fabi", "fams","contra", "confirmar");
      }
}