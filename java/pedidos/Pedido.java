package pedidos;

import java.time.LocalDate;
import java.util.ArrayList;

public class Pedido {

	private static int nextID=1;
	private int identificador;
	private LocalDate fecha;
	private Cliente cliente;
	private ArrayList<Producto> productos = new ArrayList<>();
}
