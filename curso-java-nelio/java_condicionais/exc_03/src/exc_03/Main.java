package exc_03;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int a, b;
		
		System.out.println("Digite dois números:");
		a = sc.nextInt();
		sc.nextLine();
		b = sc.nextInt();
		sc.close();
		
		if(a % b == 0 || b % a == 0) {
			System.out.println("São Múltiplos");
		} else {
			System.out.println("Não são Múltiplos");
		}
	}

}
