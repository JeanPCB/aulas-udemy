package exc_02;

import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int num;
		
		System.out.println("Digite um número:");
		num = sc.nextInt();
		sc.close();
		
		if(num % 2 == 0) {
			System.out.println("Este número é PAR");
		} else {
			System.out.println("Este número é ÍMPAR");
		}
	}
}
