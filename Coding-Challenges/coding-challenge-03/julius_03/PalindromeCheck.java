package julius_03;

import java.util.Scanner;
public class PalindromeCheck {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);
        while (true){
            System.out.print("Enter a string: ");
            String input = scanner.nextLine();

            if (input.equalsIgnoreCase("Exit")){
                System.out.println("Exiting the program. Goodbye!");
                break;
            }

            boolean check = isPalindrome(input);
            System.out.print(check);
        }
        scanner.close();
    }

    public static boolean isPalindrome(String clear){
        String cleanString = clear.replaceAll("[^a-zA-Z0-9]", "").toLowerCase();
        int startpointer = 0;
        int endPointer = cleanString.length()-1;

        while (startpointer<endPointer){
            if (cleanString.charAt(startpointer) != cleanString.charAt(endPointer)){
                return false;
            }
            startpointer++;
            endPointer--;
        }
        return true;
    }
}
