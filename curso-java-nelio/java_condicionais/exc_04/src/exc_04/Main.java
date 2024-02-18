package exc_04;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int hourStart, hourEnd, totalHours;
		
		System.out.println("Digite o horário de começo e término:");
		hourStart = sc.nextInt();
		sc.nextLine();
		hourEnd = sc.nextInt();
		sc.close();
		
		totalHours = 24;
		
		if(hourStart > hourEnd) {
			totalHours = 24 - hourStart + hourEnd;
		} 
		else if(hourStart != hourEnd){
			totalHours = hourEnd - hourStart;
		}
		
		System.out.println("Total de horas = " + totalHours);
	}

}
