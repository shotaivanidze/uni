using System;
using System.Collections.Generic;
using System.Linq;

namespace Davaleba
{
    class Program
    {

        static void Main(string[] args)
        {
            // 14.1.1
            arrayAdd();
            arrayDelete();

        }


        static void arrayAdd()
        {
            Console.WriteLine($"14.1.1: \n");
            List<string> list = new List<string> { "lorem", "ipsum", "dolor", "sit", "amet", "consectetuer", "adipiscing", "elit", "sed", "diam" };

            list.Add("nonummy");
            list.Add("nibh");

            Console.WriteLine($"Array size: { list.Count }");
            Console.WriteLine();

            Console.WriteLine($"Foreach print on array items: \n");

            list.ForEach(word => Console.WriteLine(word));
            Console.WriteLine();

            Console.WriteLine($"Join on array items: \n");
            Console.WriteLine(String.Join(", ", list));

            Console.WriteLine();
        }

        static void arrayDelete()
        {
            Console.WriteLine($"14.1.2: \n");
            List<string> list = new List<string> { "lorem", "ipsum", "dolor", "sit", "amet", "consectetuer", "adipiscing", "elit", "sed", "diam" };

            list.Remove("lorem");
            list.Remove("ipsum");

            Console.WriteLine($"Array size: { list.Count }");
            Console.WriteLine();

            Console.WriteLine($"Foreach print on array items: \n");

            list.ForEach(word => Console.WriteLine(word));
            Console.WriteLine();

            Console.WriteLine($"Join on array items: \n");
            Console.WriteLine(String.Join(", ", list));

        }
    }
}