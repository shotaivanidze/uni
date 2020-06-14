using System;

namespace Davaleba
{
    class Program
    {

        class Rectangle
        {
            protected int width;
        }

        class Inherit : Rectangle
        {
            private int height;
            public Inherit()
            {
                height = 0;
            }
            public Inherit(int num1, int num2)
            {
                height = num1;
                width = num2;
            }
            public int Area()
            {
                return width * height;
            }
        }

        static void Main(string[] args)
        {
            Console.Write("Number 1: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.Write("Number 2: ");
            int num2 = Convert.ToInt32(Console.ReadLine());
            Inherit obj = new Inherit(num1, num2);
            int result = obj.Area();
            Console.WriteLine("Width: {0} \nHeight: {1}", num1, num2);
            Console.WriteLine("Area: {0}", result.ToString());
            Console.ReadKey();
        }
    }
}
