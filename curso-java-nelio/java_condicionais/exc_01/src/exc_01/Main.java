package exc_01;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int num;
		
		System.out.println("Digite um número:");
		num = sc.nextInt();
		sc.nextLine();
		sc.close();
		
		String result = (num < 0) ? "Este número é negativo" : "Este número é positivo";
		System.out.println(result);
	}

}
