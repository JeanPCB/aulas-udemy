package exc_07;

import java.util.Locale;
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		
		double x, y;
		String result = "Origem";
		
		System.out.println("Digite dois valores:");
		x = sc.nextDouble();
		sc.nextLine();
		y = sc.nextDouble();
		sc.close();
		
		if(x > 0) {
			result = (y > 0) ? "Q1" : "Q4";
		} else if(x < 0){
			result = (y > 0) ? "Q2" : "Q3";
		}
		
		System.out.println(result);
	}

}
