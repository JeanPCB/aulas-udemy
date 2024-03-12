package app;

import util.Landscape;

import java.util.Locale;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Locale.setDefault(Locale.US);

        System.out.print("Largura: ");
        int width = scanner.nextInt();
        System.out.print("Altura: ");
        int height = scanner.nextInt();

        System.out.printf("É paisagem: %b", Landscape.isLandscape(width, height));
    }
}