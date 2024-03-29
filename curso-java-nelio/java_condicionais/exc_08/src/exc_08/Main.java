package exc_08;

import java.util.Locale;
import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		
		double salary, calcAmount, tax = 0;
		
		System.out.println("Digite o valor do seu salário:");
		salary = sc.nextDouble();
		sc.close();

		if(salary > 2000.00) {
			calcAmount = salary - 2000.00;
			
			if(calcAmount <= 1000.00) {
				tax = calcAmount * 0.08;
			} else if(calcAmount > 1000.00 && calcAmount <= 1500){
				tax = 1000.00 * 0.08;
				calcAmount -= 1000.00;
				tax += calcAmount * 0.18;
			} else {
				tax = 1000.00 * 0.08;
				tax += 1500.00 * 0.18;
				calcAmount -= 2500.00;
				tax += calcAmount * 0.28;
			}

		}
		
		if(tax == 0) {
			System.out.println("Isento");
		} else {
			System.out.printf("TAXA = R$ %.2f%n", tax);
		}
	}
}
