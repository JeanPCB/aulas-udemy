package while_02;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int x, y;
		String result;
		
		System.out.println("Digite o valor de X e Y:");
		x = sc.nextInt();
		y = sc.nextInt();
		
		while(x != 0 && y != 0) {
			if(x > 0) {
				result = (y > 0) ? "primeiro" : "quarto";
			} else {
				result = (y > 0) ? "segundo" : "terceiro";
			}
			
			System.out.println(result);
			System.out.println("Digite o valor de X e Y:");
			x = sc.nextInt();
			y = sc.nextInt();
		}
		
		sc.close();
	}

}
