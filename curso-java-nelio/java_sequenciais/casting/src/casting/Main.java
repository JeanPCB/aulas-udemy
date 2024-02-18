package casting;

public class Main {

	public static void main(String[] args) {
		int a, b;
		double result;
		
		a = 5;
		b = 2;
		result = a / b;
		
		// Without casting
		System.out.println("Resultado = " + result);
		
		// With casting
		result = (double) a / b;
		// println don't consider the computer location
		System.out.println("Resultado = " + result);
		System.out.printf("Resultado = %.2f", result);
	}

}
