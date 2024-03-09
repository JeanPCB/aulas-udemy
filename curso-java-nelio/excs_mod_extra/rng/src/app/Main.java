package app;

import util.Rng;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        /*
          TEST RNG LOGIC:
          int randomNum = 0;
          while(randomNum != 1) {
          randomNum = Rng.generator(1, 10);
          System.out.println(randomNum);
          }
         */

        System.out.print("Menor inteiro possível: ");
        int min = scanner.nextInt();
        System.out.print("Maior inteiro possível: ");
        int max = scanner.nextInt();

        int genNum = Rng.generator(min, max);

        System.out.printf("Número gerado = %d", genNum);
    }
}
