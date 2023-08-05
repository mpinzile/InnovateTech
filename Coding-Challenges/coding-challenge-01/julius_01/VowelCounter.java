package julius_01;

import java.util.Scanner;
public class VowelCounter {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);
        while (true){
            System.out.print("Enter a string (type 'exit' to quit): ");
            String input = scanner.nextLine();

            if (input.equalsIgnoreCase("Exit")){
                System.out.println("Exiting the program. Goodbye!");
                break;
            }

            int vowelCount = countVowel(input);
            System.out.println("Number of vowels in the string: " + vowelCount);
        }
        scanner.close();
    }

    public static int countVowel(String str){
        if (str==null || str.isEmpty()){
            return 0;
        }
        String lowerCase = str.toLowerCase();

        int count = 0;
        for (int i = 0;i <lowerCase.length();i++){
            char ch = lowerCase.charAt(i);
            if (ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {
                count++;
            }
        }

        return count;
    }
}
