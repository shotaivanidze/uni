using System;
using System.Linq;
using System.Collections;
using System.Collections.Generic;

namespace Davaleba
{
    class Program
    {
        static void Main(string[] args)
        {
            QueryStringArray();

            int[] intArray = QueryIntArray();

            foreach (int i in intArray)
                Console.WriteLine(i);

            Console.WriteLine();

            QueryArrayList();

            QueryCollection();

            Console.ReadLine();

        }

        static void QueryStringArray()
        {
            string[] dogs = { "Burney", "Snoopy", "EZLMAO", "SNOOPDOGG" };

            var dogSpaces = from dog in dogs where dog.Contains(" ") orderby dog descending select dog;

            foreach (var i in dogSpaces)
            {
                Console.WriteLine(i);
            }

            Console.WriteLine();
        }

        static int[] QueryIntArray()
        {
            int[] nums = { 5, 10, 15, 20, 25, 30, 35 };

            var gt20 = from num in nums where num > 20 orderby num select num;

            foreach (var i in gt20)
            {
                Console.WriteLine(i);
            }

            Console.WriteLine();
            Console.WriteLine($"Get Type : {gt20.GetType()}");

            var listGT20 = gt20.ToList<int>();
            var arrayGT20 = gt20.ToArray();


            nums[0] = 40;

            foreach (var i in gt20)
            {
                Console.WriteLine(i);
            }

            Console.WriteLine();

            return arrayGT20;

        }

        static void QueryArrayList()
        {
            ArrayList famAnimals = new ArrayList()
            {   
                new Animal{Name = "Burney", Height = .8, Weight = 12},
                new Animal{Name = "Shrek", Height = 4, Weight = 40},
                new Animal{Name = "Cheems", Height = 3.8, Weight = 30}
            };

            var famAnimalEnum = famAnimals.OfType<Animal>();

            var smAnimals = from animal in famAnimalEnum where animal.Weight <= 90 orderby animal.Name select animal;

            foreach (var animal in smAnimals)
            {
                Console.WriteLine("{0} weighs {1}kgs", animal.Name, animal.Weight);
            }

            Console.WriteLine();

        }

        static void QueryCollection()
        {
            var animalList = new List<Animal>()
            {
                new Animal{Name = "German Shepherd", Height = 25, Weight = 77},
                new Animal{Name = "Cockerspaniel", Height = 20, Weight = 12},
                new Animal{Name = "Saint Bernard", Height = 30, Weight = 100}
            };

            var bigDogs = from dog in animalList where (dog.Weight > 70) && (dog.Height > 25) orderby dog.Name select dog;

            foreach (var dog in bigDogs)
            {
                Console.WriteLine("A {0} weighs {1}kgs", dog.Name, dog.Weight);
            }

            Console.WriteLine();

        }
    }

}