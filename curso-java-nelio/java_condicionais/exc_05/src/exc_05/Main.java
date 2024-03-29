package exc_05;

import java.util.Locale;
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		int itemCode, itemQnt;
		double price;
		
		System.out.println("Digite o código e a quantidade do item:");
		itemCode = sc.nextInt();
		sc.nextLine();
		itemQnt = sc.nextInt();
		sc.close();
		
		switch(itemCode) {
			case 1:
				price = 4.00;
				break;
			case 2:
				price = 4.50;
				break;
			case 3:
				price = 5.00;
				break;
			case 4:
				price = 2.00;
				break;
			case 5:
				price = 1.50;
				break;
			default:
				price = 0;
				break;
		}
		
		double total = itemQnt * price;
		
		System.out.printf("TOTAL = R$ %.2f%n", total);
	}

}
