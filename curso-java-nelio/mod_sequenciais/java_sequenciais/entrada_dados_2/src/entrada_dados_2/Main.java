package entrada_dados_2;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		// Clean nextline() buffer
		int x;
		String a, b, c;
		
		Scanner sc = new Scanner(System.in);
		
		x = sc.nextInt();
		// When hit ENTER the entry holds a \n (line break) and skip next nextLine()
		
		// Solution
		sc.nextLine();
		
		a = sc.nextLine();
		b = sc.nextLine();
		c = sc.nextLine();
		
		System.out.println("Dados digitados:");
		System.out.println(x);
		System.out.println(a);
		System.out.println(b);
		System.out.println(c);
		
		sc.close();
	}

}
