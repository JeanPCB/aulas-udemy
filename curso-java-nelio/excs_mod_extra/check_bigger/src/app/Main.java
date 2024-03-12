package app;

import util.BiggerChecker;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Número 1: ");
        int num1 = scanner.nextInt();
        System.out.print("Número 2: ");
        int num2 = scanner.nextInt();

        System.out.printf("Maior número = %d", BiggerChecker.checkBig(num1, num2));
    }
}
