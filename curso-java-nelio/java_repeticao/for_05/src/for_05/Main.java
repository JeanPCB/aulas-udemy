package for_05;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int num = sc.nextInt();
		
		if(num != 0) {
			for(int i = num; i > 1; i--) {
				num = num * (i - 1);
			}
		} else {
			num = 1;
		}

		
		System.out.println(num);
		sc.close();
	}

}
