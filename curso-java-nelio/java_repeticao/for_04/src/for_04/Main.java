package for_04;

import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int n = sc.nextInt();
		
		for(int i = 0; i < n; i++) {
			double numOne = sc.nextDouble();
			double numTwo = sc.nextDouble();
			
			if(numTwo == 0) {
				System.out.println("Divisão impossível");
			} else {
				System.out.println(numOne / numTwo);
			}
		}
		
		sc.close();
	}
}
