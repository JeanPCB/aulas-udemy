package app;

import entities.Product;

import java.util.Locale;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Locale.setDefault(Locale.US);
        Scanner scanner = new Scanner(System.in);

        Product product = new Product();

        System.out.println("Enter the product data:");
        System.out.print("Name: ");
        product.name = scanner.nextLine();
        System.out.print("Price: ");
        product.price = scanner.nextDouble();
        System.out.print("Quantity: ");
        product.quantity = scanner.nextInt();

        System.out.printf("Product data: %s, $ %.2f, %d units, Total: $ %.2f%n", product.name, product.price, product.quantity, product.totalValueInStock());

        System.out.print("Enter the of products to be added in stock: ");
        product.addProducts(scanner.nextInt());
        System.out.printf("Updated data: %s, $ %.2f, %d units, Total: $ %.2f%n", product.name, product.price, product.quantity, product.totalValueInStock());

        System.out.print("Enter the of products to be removed from stock: ");
        product.removeProducts(scanner.nextInt());
        System.out.printf("%nUpdated data: %s, $ %.2f, %d units, Total: $ %.2f%n", product.name, product.price, product.quantity, product.totalValueInStock());
    }
}