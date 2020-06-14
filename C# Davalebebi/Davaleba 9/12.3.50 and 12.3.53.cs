using System;
using System.Collections.Generic;
using System.Linq;

namespace Davaleba
{
    class Program
    {

        static void Main(string[] args)
        {
            // 12.3.50
            Console.WriteLine(FindLongerWord("Zimbabwe", "Cool"));

            Console.WriteLine();

            // 12.3.53
            Console.WriteLine("Almasis magvari sityvebis wyvili winadadebashi :" + FindAlmasWords("Es me var barni patarebis megobari barni"));


        }


        static string FindLongerWord(string word1, string word2)
        {
            if (word1.Length > word2.Length)
            {
                return word2 + word1;
            }
            else
            {
                return word1 + word2;
            }
        }

        static int FindAlmasWords(string sentance)
        {
            List<string> words = sentance.Split().ToList();
            
            var firstLastLetters = new List<string>();

            foreach (string word in words)
            {
                string firstLetter = word[0].ToString();
                string lastLetter = word[word.Length - 1].ToString();

                string firstLastChars = new string(firstLetter + lastLetter);

                firstLastLetters.Add(firstLastChars);
            };

            int almasiLikeWords = firstLastLetters.Count() - firstLastLetters.Distinct().Count();

            return almasiLikeWords;

        }

    }
}