using System;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public class Figure
        {
            public int perimeter;

            public int Perimeter(int[] _sides)
            {
                foreach (int side in _sides)
                {
                    perimeter += side;
                }
                return perimeter;
            }
        }

        public class Rectangle : Figure
        {
            public int Perimeter(int _side1, int _side2, int _side3, int _side4)
            {
                perimeter = _side1 + _side2 + _side3 + _side4;
                return perimeter;
            }
        }


        static void Main(string[] args)
        {
            Rectangle figure = new Rectangle();
            int[] sides = { 1, 2, 3, 4, 5 };
            Console.WriteLine("Figure Triangle Perimeter: " + figure.Perimeter(sides));
            Console.WriteLine("Triangle Perimeter: " + figure.Perimeter(1,2,3,4));

        }
    }
}
