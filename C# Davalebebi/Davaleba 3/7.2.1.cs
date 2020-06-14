using System;

namespace Davaleba
{
    class Program
    {
        public class Figure
        {
            private int side1, side2, side3, side;
            public int perimeter, area;
            public Figure(int _side1, int _side2, int _side3)
            {
                side1 = _side1;
                side2 = _side2;
                side3 = _side3;
            }
            public Figure(int _side)
            {
                side = _side;
            }
        }

        public class Triangle : Figure
        {
            public Triangle(int side1, int side2, int side3) : base(side1, side2, side3)
            {
                perimeter = side1 + side2 + side3;
            }
        }

        class Cube : Figure
        {
            public Cube(int side) : base(side)
            {
                area = side * 2;
            }
        }

        static void Main(string[] args)
        {
            Cube cube = new Cube(5);
            Triangle triangle = new Triangle(1, 2, 3);

            Console.WriteLine(cube.area);
            Console.WriteLine(triangle.perimeter);

        }
    }
}
