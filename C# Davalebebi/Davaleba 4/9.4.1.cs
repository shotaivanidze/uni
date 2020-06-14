using Microsoft.VisualBasic.CompilerServices;
using System;
using System.Collections.Generic;

namespace Davaleba
{
    class Program
    {
        public interface ICalc
        {
            int TrianglePerimeter(int side1, int side2, int side3);

        }

        public class Triangle
        {
            public double TriangleArea(int side1, int side2, int side3, int perimeter)
            {
                double halfPerimeter = perimeter / 2;

                return Math.Sqrt(halfPerimeter * (halfPerimeter - side1) * (halfPerimeter - side2) * (halfPerimeter - side3));
            }
        }

        public class TriangleHeir : Triangle, ICalc
        {
            public int perimeter;
            public int TrianglePerimeter(int side1, int side2, int side3)
            {
                perimeter = side1 + side2 + side3;
                return perimeter;
            }
        }

        static void Main()
        {
            TriangleHeir triangle = new TriangleHeir();
            int side1 = 13;
            int side2 = 13;
            int side3 = 10;
            int perimeter = triangle.TrianglePerimeter(side1, side2, side3);
            Console.WriteLine("Triangle Perimeter: " + perimeter);
            Console.WriteLine("Triangle Area: " + triangle.TriangleArea(side1, side2, side3, perimeter));

        }
    }

    
}
