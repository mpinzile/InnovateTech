package julius_02;

import java.util.Scanner;
public class DigitSummation {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        while (true) {
            System.out.print("Enter a positive integer or (Exit ) to finish: ");
            String input = scanner.next();

            if (input.equalsIgnoreCase("exit")) {
                break;
            }

            try {
                int inputDigit = Integer.parseInt(input);
                int sum = sum0fDigits(inputDigit);
                System.out.println("The sum of digits is " + sum);
            } catch (NumberFormatException e) {
                System.out.println("Invalid input! Please enter a positive integer or type 'exit' to finish.");
            }
        }
        scanner.close();
    }

    public static int sum0fDigits(int number){
        int sum = 0;
        String numberOfInt = String.valueOf(number);

        for (int i=0; i<numberOfInt.length(); i++){
            char digitChar = numberOfInt.charAt(i);
            int digit = Character.getNumericValue(digitChar);
            sum = sum + digit;
        }
        return sum;
    }
}
