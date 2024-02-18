package for_07;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int n = sc.nextInt();
		
		if(n > 0) {
			for(int i = 1; i <= n; i++) {
				for(int j = 1; j <= 3; j++) {
					int result = (int) Math.pow(i, j);
					System.out.print(result + " ");
				}
				System.out.println();
			}
		}
		
		sc.close();
	}

}
