using System;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public class Figure
        {
            public int side1 = 5, side2 = 5, side3 = 5, perimeter;
        }

        public class Triangle : Figure
        {
            new public int side1 = 2, side2 = 2, side3 = 2, perimeter;
            
            public int BasePerimeter()
            {
                base.perimeter = base.side1 + base.side2 + base.side3;
                return base.perimeter;
            }

            public int Perimeter()
            {
                perimeter = side1 + side2 + side3;
                return perimeter;
            }
        }


        static void Main(string[] args)
        {
            Triangle triangle = new Triangle();

            Console.WriteLine("Base Triangle Perimeter: " + triangle.BasePerimeter());
            Console.WriteLine("Triangle Perimeter: " + triangle.Perimeter());


        }
    }
}
