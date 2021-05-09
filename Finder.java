import java.util.ArrayList;
import java.io.*;
import java.util.Scanner;

public class Finder
{
    public static void main(String args[]) throws Exception {
        Reader r = new Reader();
        ArrayList<String> ingredients = r.correctIngredients();
        ArrayList<String> badIngredients = new ArrayList<>();
        try {
            File textFile = new File("../nlp/chemicals-bad.txt");
            Scanner sc = new Scanner(textFile);
            while (sc.hasNextLine())
            {
                badIngredients.add(sc.nextLine());
            }
            sc.close();
        }
        catch (FileNotFoundException e) {
            System.out.println("File not found.");
            e.printStackTrace();
        }
        String finalWords = "";
        for (String i : ingredients)
        {
            if(badIngredients.contains(i)) finalWords += i + "\n";
        }
        try {
            BufferedWriter out = new BufferedWriter(new FileWriter("../ocr_server/ingredients-bad.txt"));
            out.write(finalWords);
            out.close();
        }
        catch (IOException e) {
            System.out.println("An error occurred.");
            e.printStackTrace();
        }
    }
}