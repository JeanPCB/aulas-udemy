package while_03;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int fuelCode, alcohol, gasoline, diesel;
		
		alcohol = 0;
		gasoline = 0;
		diesel = 0;
		
		System.out.println("Digite o código:");
		fuelCode = sc.nextInt();
		
		while(fuelCode != 4) {
			switch(fuelCode) {
				case 1:
					alcohol += 1;
					break;
					
				case 2:
					gasoline += 1;
					break;
					
				case 3:
					diesel += 1;
					break;
				
				default:
					System.out.println("Código Inválido!");
					break;
			}
			
			fuelCode = sc.nextInt();
		}
		
		System.out.println("MUITO OBRIGADO!");
		System.out.println("Álcool: " + alcohol);
		System.out.println("Gasolina: " + gasoline);
		System.out.println("Diesel: " + diesel);
		
		sc.close();
	}

}
