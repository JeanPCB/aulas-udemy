package while_01;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int password;
		
		System.out.println("Digite a senha:");
		password = sc.nextInt();
		
		while(password != 2002) {
			System.out.println("Senha Inválida!");
			System.out.println("Digite a senha:");
			password = sc.nextInt();
		}
		
		System.out.println("Acesso Permitido");
		sc.close();
	}

}
