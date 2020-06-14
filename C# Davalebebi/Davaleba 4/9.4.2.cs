using Microsoft.VisualBasic.CompilerServices;
using System;
using System.Collections.Generic;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public interface IFind
        {
            int MinNumber(int[] numbers);

        }

        public class BaseNumber
        {
            public int MaxNumber(int[] numbers)
            {
                int max = numbers[0];
                foreach (int number in numbers)
                {
                    if (number > max)
                    {
                        max = number;
                    }
                }

                return max;
            }
        }

        public class HeirNumber : BaseNumber, IFind
        {
            public int MinNumber(int[] numbers)
            {
                int min = numbers[0];
                foreach (int number in numbers)
                {
                    if (number < min)
                    {
                        min = number;
                    }
                }

                return min;
            }
        }

        static void Main()
        {
            HeirNumber numbers = new HeirNumber();

            int[] numbersArray = { 2, 6, 1, 29, 30, 45, 21, 5, 87 };
            var minNumber = numbers.MinNumber(numbersArray);
            var maxNumber = numbers.MaxNumber(numbersArray);

            Console.WriteLine("Min Number: " + minNumber);
            Console.WriteLine("Max Number: " + maxNumber);

        }
    }

    
}
