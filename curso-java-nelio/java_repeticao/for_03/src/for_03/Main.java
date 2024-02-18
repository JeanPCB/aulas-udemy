package for_03;

import java.util.Locale;
import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		
		int N = sc.nextInt();
		
		double result = 0;
		for(int i = 0; i < N; i++) {
			double n = sc.nextDouble();

			switch(i) {
				case 0:
					result += n * 2.0;
					break;
					
				case 1:
					result += n * 3.0;
					break;
					
				case 2:
					result += n * 5.0;
					break;
					
				default:
					break;
			}
		}
		sc.close();
		
		System.out.printf("TOTAL = %.1f%n", result / 10);
	}

}
